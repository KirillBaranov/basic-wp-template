<?php

/** Archive for questions list. */
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



/** Post type for mock up's. */
add_action( 'init', 'mock_up' );

function mock_up() {
    $labels = array(
        'name' => 'Мокапы',
        'singular_name' => 'Мокапы',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-image',
        'menu_position' => 20,
        'show_in_rest' => true,
        'supports' => array( 'title', 'thumbnail')
    );
    register_post_type('mockup', $args);
}



/** Post type for team. */
add_action( 'init', 'team' );

function team() {
    $labels = array(
        'name' => 'Наша команда',
        'singular_name' => 'Наша команда',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-businessperson',
        'menu_position' => 20,
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail')
    );
    register_post_type('team', $args);
}


function team_metaboxes() {
    add_meta_box(
        'employee_metabox', 'Дополнительно', 'add_team_metaboxes', 'team', //id
        'normal', 'high');
}

add_action('admin_init', 'team_metaboxes');

/**
 * @param type $employee
 */
function add_team_metaboxes($employee) {

    $role = get_post_meta($employee->ID, 'role', true); ?>

    <div class="role__block">
        <label style="margin: 20px 0; display: block; width:100%;">Роль в команде</label>
        <input type="text" class="role" name="role" style="margin-bottom: 20px; width: 100%;" value="<?= $role; ?>">
    </div>

<? }

function employee_team_handler($employee_id, $employee) {
    if ($employee->post_type == 'team') {

        if (isset($_POST['role']) && $_POST['role'] != '' || $_POST['role'] == '') {
            update_post_meta($employee_id, 'role', $_POST['role']);
        }


    }
}

add_action('save_post', 'employee_team_handler', 12, 2);



