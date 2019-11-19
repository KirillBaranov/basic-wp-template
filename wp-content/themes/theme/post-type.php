<?php

/** Архив руководителей. */
add_action( 'init', 'questions' );

function questions() {
    $labels = array(
        'name' => 'Часто задаваемые вопросы',
        'singular_name' => 'Часто задаваемые вопросы',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-editor-help',
        'menu_position' => 20,
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail')
    );
    register_post_type('questions', $args);
}

