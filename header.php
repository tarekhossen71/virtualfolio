<?php
    // Get options
    $options = get_option( 'my_framework' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <?php wp_head(); ?>
</head>
<body class="theme-red" <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  
  <div class="vg-page page-home" id="home" style="background-image: url(<?php echo $options['hero_area_bg_img']['url']; ?>)">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">
            <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    echo get_bloginfo( 'name' );
                }
            ?>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <?php
            wp_nav_menu( array(
                'theme_location'        => 'primary-menu',
                'menu_id'               => 'primary-menu',
                'menu_class'            => 'navbar-nav ml-auto',
                'container'             => 'ul',
                'add_li_class'          => 'nav-item',
                'link_class'            => 'nav-link'
            ) );
          ?>
        </div>
      </div>
    </div> <!-- End Navbar -->
    <!-- Caption header -->
    <div class="caption-header text-center wow zoomInDown">
        <h5 class="fw-normal">
            <?php
                echo $options['hero_area_text'];
            ?>
        </h5>
        <h1 class="fw-light mb-4">
            <?php
                echo $options['hero_area_pre_text'];
            ?>
            <b class="fg-theme">
                <?php
                    echo $options['hero_area_first_name'];
                ?>
            </b> 
            <?php
                echo $options['hero_area_last_name'];
            ?>
        </h1>
        <div class="badge">
            <?php
                echo $options['hero_area_designation'];
            ?>
        </div>
    </div> 
    <!-- End Caption header -->
    <div class="floating-button"><span class="ti-mouse"></span></div>
  </div>