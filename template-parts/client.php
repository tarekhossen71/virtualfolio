    <?php
        $options = get_option( 'my_framework' );
    ?>
  <!-- Client -->
  <div class="vg-page page-client">
    <div class="container">
      <div class="row">
        <?php
            $clients = $options['our_client_repeater'];
            foreach( $clients as $client ):
        ?>
            <div class="col-md-6 col-lg-4 col-xl-3 item">
            <div class="img-place wow fadeInUp">
                <img src="<?php echo $client['our_client_image_first_row']['url']; ?>" alt="">
            </div>
            </div>
        <?php
            endforeach;
        ?>
      </div>
      <div class="row">
        <?php
            foreach( $clients as $client ):
        ?>
            <div class="col-md-6 col-lg-4 col-xl-3 item">
            <div class="img-place wow fadeInUp">
                <img src="<?php echo $client['our_client_image_second_row']['url']; ?>" alt="">
            </div>
            </div>
        <?php
            endforeach;
        ?>
        </div>
      </div>
    </div>
  </div> <!-- End client -->