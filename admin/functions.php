<?php
include __DIR__.DS.'customization.php';
add_action('admin_menu', 'wtst_layout_menu');

function wtst_layout_menu() {
    add_action('admin_init', 'wtst_register_settings');

    if (is_plugin_active('whitesite-theme-toolkit/whitesite-theme-toolkit.php')) {
        add_submenu_page(
                'wtst-setup', __('Settings'), __('Settings'), 'administrator', 'wtst_layout_options', 'wtst_layout_options'
        );
    } else {
        add_theme_page(__('Whitesite theme settings'), __('Whitesite theme settings'), 'administrator', 'wtst_layout_options', 'wtst_layout_options');
    }
}

function wtst_register_settings() {
    $wtst_options_tab = wtst_options::tab();
    foreach ($wtst_options_tab as $grp => $grp_vars) {
        foreach ($grp_vars as $var_name) {
            register_setting(WTST_OPT_GRP_PREFIX . $grp, $var_name);
        }
    }
}

function wtst_layout_options() {
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }


    wp_enqueue_media();
    wp_enqueue_editor();
    wp_enqueue_script('text-widgets');

    wp_register_script('jQueryUI', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js');
    wp_enqueue_script('jQueryUI');
    wp_register_style('jQueryUI', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
    wp_enqueue_style('jQueryUI');

    wp_enqueue_style('wp-color-picker');
    wp_enqueue_script('wp-color-picker');
    wp_localize_script(
            'ajax-script', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
            )
    );

    ob_start();
    include(__DIR__ . DS . 'view' . DS . 'class-wtst-opt-rows.php');
    include(__DIR__ . DS . 'view' . DS . 'settings.php');
    $out = ob_get_clean();
    echo $out;
}
