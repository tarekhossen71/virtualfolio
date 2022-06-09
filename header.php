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
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  <!-- Setting button -->
  <div class="config">
    <div class="template-config">
      <!-- Settings -->
      <div class="d-block">
        <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
      </div>
      <!-- Puschase -->
      <div class="d-block">
        <a href="https://macodeid.com/projects/virtual-folio/" class="btn btn-fab btn-sm" title="Get this template" data-toggle="tooltip" data-placement="left"><span class="ti-download"></span></a>
      </div>
      <!-- Help -->
      <div class="d-block">
        <a href="#" class="btn btn-fab btn-sm" title="Help" data-toggle="tooltip" data-placement="left"><span class="ti-help"></span></a>
      </div>
    </div>
    <div class="set-menu">
      <p>Select Color</p>
      <div class="color-bar" data-toggle="selected">
        <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
        <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
        <span class="color-item bg-theme-green" data-class="theme-green"></span>
        <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
        <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
      </div>
      <select class="custom-select d-block my-2" id="change-page">
        <option value="">Choose Page</option>
        <option value="index">Topbar</option>
        <option value="blog-topbar">Blog (Topbar)</option>
        <option value="index-2">Minibar</option>
        <option value="blog-minibar">Blog (Minibar)</option>
      </select>
    </div>
  </div>
  
  <div class="vg-page page-home" id="home" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg_image_1.jpg)">
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
          <ul class="nav ml-auto">
            <li class="nav-item">
              <button class="btn btn-fab btn-theme no-shadow">En</button>
            </li>
          </ul>
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