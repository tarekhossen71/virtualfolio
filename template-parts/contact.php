<?php
    $options = get_option( 'my_framework' );
?>
<!-- Contact -->
<div class="vg-page page-contact" id="contact">
    <div class="container-fluid">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">
            <?php
                echo $options['contact_title'];
            ?>
        </div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">
        <?php
            echo $options['contact_shortdes'];
        ?>
      </h1>
      <div class="row py-5">
        <div class="col-lg-7 px-0 pr-lg-3 wow zoomIn">
          <div class="vg-maps">
            <div id="google-maps" style="width: 100%; height: 100%;"></div>
          </div>
        </div>
        <div class="col-lg-5">
          <form class="vg-contact-form">
            <?php
                echo do_shortcode( '[contact-form-7 id="86" title="Contact form 1"]' );
            ?>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- End Contact -->