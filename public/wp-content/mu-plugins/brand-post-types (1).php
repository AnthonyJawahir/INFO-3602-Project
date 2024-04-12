<?php

    function phone_post_types(){
    register_post_type('brand',array(
            'rewrite'=> array('slug' => 'brand' ),
            'taxonomies' => array ('category'),
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerp'),
            'public' => true,
            'labels' => array(
            'name' => "Phone Brands",
            'add_new_item' => 'Add New Phone Brand',
            'edit_item' => 'Edit Brand',
            'all_items' => 'All Brands',
            'singular_name' => "Phone Brand"
        ),
        'menu_icon' => 'dashicons-smartphone'

        ));
        register_post_type('model',array(
            'rewrite'=> array('slug' => 'model' ),
            'taxonomies' => array ('category'),
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerp'),
            'public' => true,
            'labels' => array(
            'name' => "Phone Models",
            'add_new_item' => 'Add New Phone Model',
            'edit_item' => 'Edit Models',
            'all_items' => 'All Models',
            'singular_name' => "Phone Models"
        ),
        'menu_icon' => 'dashicons-smartphone'

        ));
        register_post_type('accessory',array(
            'rewrite'=> array('slug' => 'accessory' ),
            'taxonomies' => array ('category'),
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerp'),
            'public' => true,
            'labels' => array(
            'name' => "Phone Accessories",
            'add_new_item' => 'Add New Phone Accessory',
            'edit_item' => 'Edit Accessoriess',
            'all_items' => 'All Accessoriess',
            'singular_name' => "Phone Accessories"
        ),
        'menu_icon' => 'dashicons-smartphone'

        ));

    }
    add_action ('init', 'phone_post_types');



        
    
    
?>