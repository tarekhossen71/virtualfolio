<?php
    $option = get_option( 'my_framework' );
?>
<!-- Footer -->
<div class="vg-footer">
    <h1 class="text-center">
        <?php
            bloginfo( 'name' );
        ?>
    </h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 py-3">
            <?php
                if( is_active_sidebar( 'footer_one' ) ){
                    dynamic_sidebar( 'footer_one' );
                }
            ?>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <?php
                if( is_active_sidebar( 'footer_two' ) ){
                    dynamic_sidebar( 'footer_two' );
                }
          ?>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
          <?php
                if( is_active_sidebar( 'footer_two' ) ){
                    dynamic_sidebar( 'footer_two' );
                }
          ?>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="col-lg-6">
          <form class="mb-3">
            <?php
                echo do_shortcode( '[contact-form-7 id="87" title="subscribe"]' );
            ?>
          </form>
        </div>
        <div class="col-12">
          <p class="text-center mb-0 mt-4">
            <?php
                echo $option['copyright_text'];
            ?>
          </p>
        </div>
      </div>
    </div>
  </div> <!-- End footer -->
  
  
  <?php wp_footer(); ?>
</body>
</html>