<?php

namespace App;


function theme_support()
{
    add_theme_support('title-tag');
}

function document_title($title)
{
    unset($title['tagline']);
    return $title;
}
function register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', [], false);
    wp_enqueue_style('bootstrap');

    wp_enqueue_style("maincss", get_template_directory_uri() . '/style.css');
    wp_enqueue_style('maincss');

    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', [], false, true);
    wp_enqueue_script('bootstrap');
}

function plugin_mentormarketing()
{
    register_post_type(
        'MentorMarketing',
        [
            'label' => 'mentormarketing_product',
            'public' => true,
            'supports' => ['title', 'editor', 'thumbnail'],
            'show_in_rest' => true,
        ]
    );
}

add_action('init', 'App\plugin_mentormarketing');
add_action('after_setup_theme', 'App\theme_support');
add_action('wp_enqueue_scripts', 'App\register_assets');
add_filter('document_title_parts', 'App\document_title');
