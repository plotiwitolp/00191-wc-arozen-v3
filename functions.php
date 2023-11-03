<?php

// start выключение обновления плагина acf-pro
add_filter('site_transient_update_plugins', 'remove_update_notification');
function remove_update_notification($value)
{
    unset($value->response["advanced-custom-fields-pro/acf.php"]);
    return $value;
}
// end выключение обновления плагина acf-pro

// start включение элементов в тему
add_theme_support('custom-logo');

add_action('after_setup_theme', function () {
    register_nav_menus([
        'header_menu' => 'Меню в шапке',
        'footer_menu' => 'Меню в подвале'
    ]);
});
// end включение элементов в тему


// START отключение лишних стилей, блоков и функций

// start отключение стилей таблицы плагина
add_filter('tablepress_use_default_css', 'wpkum_tablepress_css_conditionally');
function wpkum_tablepress_css_conditionally($load)
{
    return false;
}
// end отключение стилей таблицы плагина

// start отключение стандартных wp-комментариев и записей
function disable_comments_admin_menu()
{
    remove_menu_page('edit-comments.php');
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'disable_comments_admin_menu');

function disable_comments_post_types_support()
{
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
}
add_action('init', 'disable_comments_post_types_support');
// end отключение стандартных wp-комментариев и записей

// END отключение лишних стилей, блоков и функций