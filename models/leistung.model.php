<?php

class GLLeistung
{
    public function __construct()
    {
        add_action('init', array($this, 'register_post_type'), 99, 2);
    }

    public function register_post_type()
    {
        register_post_type('leistung', array(
            'labels' => array(
                'name' => __('Leistungen'),
                'singular_name' => __('Leistung'),
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-megaphone',
            'rewrite' => array('slug' => 'leistungen'),
            'supports' => array('title', 'thumbnail'),
        ));
    }
}

$init = new GLLeistung();
