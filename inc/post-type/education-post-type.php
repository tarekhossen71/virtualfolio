<?php
    function v_folio_education(){
        $labels = array(
            'name'               => __( 'Educations', 'v_folio' ),
            'singular_name'      => __( 'Education', 'v_folio' ),
            'add_new'            => _x( 'Add New Education', 'v_folio', 'v_folio' ),
            'add_new_item'       => __( 'Add New Education', 'v_folio' ),
            'edit_item'          => __( 'Edit Education', 'v_folio' ),
            'new_item'           => __( 'New Education', 'v_folio' ),
            'view_item'          => __( 'View Education', 'v_folio' ),
            'search_items'       => __( 'Search Educations', 'v_folio' ),
            'not_found'          => __( 'No Educations found', 'v_folio' ),
            'not_found_in_trash' => __( 'No Educations found in Trash', 'v_folio' ),
            'parent_item_colon'  => __( 'Parent Education', 'v_folio' ),
            'menu_name'          => __( 'Educations', 'v_folio' ),
        );
    
        $args = array(
            'labels'              => $labels,
            'hierarchical'        => false,
            'description'         => 'description',
            'taxonomies'          => array(),
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => null,
            'menu_icon'           => null,
            'show_in_nav_menus'   => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => true,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => true,
            'capability_type'     => 'post',
            'supports'            => array(
                'title',
                'editor',
                'custom-fields',
            ),
        );
    
        register_post_type( 'education', $args );
    }
    add_action( 'init', 'v_folio_education' );
    