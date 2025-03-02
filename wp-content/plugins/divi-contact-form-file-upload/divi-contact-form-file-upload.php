<?php
/*
Plugin Name: Divi Child Theme File Field
Description: Adds a "File Upload" field option to Divi Contact Form module.
Version: 1.0
Author: Your Name
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Step 1: Add the "File Upload" field type to Divi Contact Form field options
add_filter( 'et_pb_contact_field_types', 'divi_child_add_file_field_type' );

function divi_child_add_file_field_type( $field_types ) {
    $field_types['file'] = esc_html__( 'File Upload', 'divi-child-theme' );
    return $field_types;
}

// Step 2: Render the file input field in the contact form
add_action( 'et_pb_contact_form_additional_fields', 'divi_child_render_file_field', 10, 2 );

function divi_child_render_file_field( $field, $args ) {
    if ( $field['type'] === 'file' ) {
        echo sprintf(
            '<input type="file" name="%s" id="%s" class="et_pb_contact_file_input" />',
            esc_attr( $field['id'] ),
            esc_attr( $field['id'] )
        );
    }
}

// Step 3: Handle file uploads when the form is submitted
add_action( 'et_pb_contact_form_process', 'divi_child_handle_file_upload', 10, 2 );

function divi_child_handle_file_upload( $form_data, $module ) {
    if ( isset( $_FILES ) && ! empty( $_FILES ) ) {
        foreach ( $_FILES as $file_key => $file ) {
            if ( $file['error'] === UPLOAD_ERR_OK ) {
                $upload_dir = wp_upload_dir();
                $target_path = $upload_dir['path'] . '/' . basename( $file['name'] );

                if ( move_uploaded_file( $file['tmp_name'], $target_path ) ) {
                    $form_data[ $file_key ] = $upload_dir['url'] . '/' . basename( $file['name'] );
                }
            }
        }
    }

    return $form_data;
}

// Step 4: Add validation for file fields (optional)
add_filter( 'et_pb_contact_form_validate_field', 'divi_child_validate_file_field', 10, 4 );

function divi_child_validate_file_field( $is_valid, $field_value, $field_options, $field_type ) {
    if ( $field_type === 'file' && empty( $_FILES[ $field_options['id'] ]['name'] ) ) {
        $is_valid = false;
    }

    return $is_valid;
}
