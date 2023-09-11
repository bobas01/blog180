<?php
if (!function_exists('mytheme_options')) {

    function mytheme_options()
    {
        add_theme_support(('post-thumbnails'));

        register_nav_menus(array(
            'main_menu' => __('Main Menu', 'text_domain'),

        ));
    }
    add_action('after_setup_theme', 'mytheme_options', 0);
}


if (!function_exists('custom_post_type')) {
    function custom_post_type()
    {
        register_post_type(
            'student',
            array(
                'labels'      => array(
                    'name'          => __('Stagiaires', 'textdomain'),
                    'singular_name' => __('Stagiaire', 'textdomain'),
                ),
                'public'      => true,
                'has_archive' => true,
                'menu_position' => 5,
                'menu_icon'   => 'dashicons-groups',
                'supports'    => array(
                    'title',
                    'editor',
                    'thumbnail',
                    'excerpt',
                    'custom-fields',
                    'comments',
                    'revisions',
                    'page-attributes',
                    'post-formats',
                ),
                'show_in_rest' => true
            )

        );
    }
    add_action('init', 'custom_post_type');
}

add_filter('single_template', 'custom_single_template');

function custom_single_template($single_template)
{
    global $post;

    if ($post->post_type == 'student') {
        $single_template = dirname(__FILE__) . '/single-stagiaire.php';
    }

    return $single_template;
}

if (!function_exists('widget_registration')){
    function widget_registration(){
        register_sidebar(array (
            'name'=> 'Footer 1',
            'id'=> 'footer1',
            'before_widget'=> '<div class="footer-widget">',
            'after_widget'=> '</div>',
            'before_title'=> '<h3 class="footer-title">',
            'after_title'=> '</h3>',
        )
        );
    }
    add_action('widgets_init', 'widget_registration');
}