<?php
    require_once get_theme_file_path() .'/inc/theme-option/codestar-framework.php';
    require_once get_theme_file_path() .'/inc/theme-option/theme-option-custom.php';

    function v_folio_theme_setup(){
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'menus' );
        add_theme_support( 'widgets' );
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-background' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'title-tag' );

        register_nav_menus( array(
            'primary-menu'      => __( 'Primary Menu', 'v_folio' ),
        ) );

        function add_menu_link_class( $atts, $item, $args ) {
            if (property_exists($args, 'link_class')) {
              $atts['class'] = $args->link_class;
            }
            return $atts;
          }
          add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

        function add_additional_class_on_li($classes, $item, $args) {
            if(isset($args->add_li_class)) {
                $classes[] = $args->add_li_class;
            }
            return $classes;
        }
        add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

        function tg_atts( $atts, $item, $args ){
        $atts['data-animate'] = 'scrolling';
        return $atts;
        }
        add_filter( 'nav_menu_link_attributes', 'tg_atts', 10, 3 );
    }
    add_action( 'after_setup_theme', 'v_folio_theme_setup' );

    function v_folio_assets(){
        // Version define 
        $theme = wp_get_theme();
        if(home_url() === "http://wordpress.test") {
            define("VERSION", time());
        } else {
            define("VERSION", $theme->get('Version'));
        }

        // Style 
        wp_enqueue_style( 'themify-icons', get_template_directory_uri().'/assets/css/themify-icons.css' );
        wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css' );
        wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/vendor/animate/animate.css' );
        wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assets/vendor/owl-carousel/owl.carousel.css' );
        wp_enqueue_style( 'perfect-scrollbar', get_template_directory_uri().'/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css' );
        wp_enqueue_style( 'nice-select', get_template_directory_uri().'/assets/vendor/nice-select/css/nice-select.css' );
        wp_enqueue_style( 'jquery-fancybox', get_template_directory_uri().'/assets/vendor/fancybox/css/jquery.fancybox.min.css' );
        wp_enqueue_style( 'virtual', get_template_directory_uri().'/assets/css/virtual.css' );
        wp_enqueue_style( 'topbar-virtual', get_template_directory_uri().'/assets/css/topbar.virtual.css' );
        wp_enqueue_style( 'v-folio-main-style', get_stylesheet_uri() );

        // Scripts 
        wp_enqueue_script( 'jquery-js', get_template_directory_uri().'/assets/js/jquery-3.5.1.min.js', array( ),VERSION, true );
        wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array( 'jquery' ),VERSION, true );
        wp_enqueue_script( 'owl-carousel', get_template_directory_uri().'/assets/vendor/owl-carousel/owl.carousel.min.js', array( 'jquery' ),VERSION, true );
        wp_enqueue_script( 'perfect-scrollbar', get_template_directory_uri().'/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js', array( 'jquery' ),VERSION, true );
        wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri().'/assets/vendor/isotope/isotope.pkgd.min.js', array( 'jquery' ),VERSION, true );
        wp_enqueue_script( 'jquery-nice-select', get_template_directory_uri().'/assets/vendor/nice-select/js/jquery.nice-select.min.js', array( 'jquery' ),VERSION, true );
        wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri().'/assets/vendor/fancybox/js/jquery.fancybox.min.js', array( 'jquery' ),VERSION, true );
        wp_enqueue_script( 'wow-min', get_template_directory_uri().'/assets/vendor/wow/wow.min.js', array( 'jquery' ),VERSION, true );
        wp_enqueue_script( 'animateNumber-min', get_template_directory_uri().'/assets/vendor/animateNumber/jquery.animateNumber.min.js', array( 'jquery' ),VERSION, true );
        wp_enqueue_script( 'jquery-waypoints', get_template_directory_uri().'/assets/vendor/waypoints/jquery.waypoints.min.js', array( 'jquery' ),VERSION, true );
        wp_enqueue_script( 'google-maps', get_template_directory_uri().'/assets/js/google-maps.js', array( 'jquery' ),VERSION, true );
        wp_enqueue_script( 'topbar-virtual', get_template_directory_uri().'/assets/js/topbar-virtual.js', array( 'jquery' ),VERSION, true );
        wp_enqueue_script( 'googleapis-map', '//maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap', array( 'jquery' ),VERSION, true );
    }
    add_action( 'wp_enqueue_scripts', 'v_folio_assets' );

    // Meta Tag 
    function v_folio_head_meta(){
    ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
    <?php
    }
    add_action( 'wp_head', 'v_folio_head_meta' );

    // Custom Post Type 
    require_once( get_theme_file_path( '/inc/post-type/education-post-type.php' ) );
    