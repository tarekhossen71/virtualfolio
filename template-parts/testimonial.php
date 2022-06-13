    <?php
        $options = get_option( 'my_framework' );
    ?>
  <!-- Testimonial -->
  <div class="vg-page page-testimonial">
    <div class="container">
      <h1 class="text-center fw-normal wow fadeInUp">
        <?php
            echo $options['testimonial_title'];
        ?>
      </h1>
      <div class="row justify-content-center mt-5 wow fadeInUp">
        <div class="col-md-9">
          <div class="owl-carousel testi-carousel">
            <?php
                $testimonials = $options['testimonial_repeater'];
                foreach( $testimonials as $testimonial ):
            ?>
                <div class="item">
                <div class="row">
                    <div class="col-md-6">
                    <div class="img-place">
                        <img src="<?php echo $testimonial['testimonial_image']['url']; ?>" alt="">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="caption">
                        <div class="testi-content">
                            <?php
                                echo $testimonial['testimonial_content'];
                            ?>
                        </div>
                        <div class="testi-info">
                        <div class="thumb-profile">
                            <img src="<?php echo $testimonial['testimonial_image']['url']; ?>" alt="">
                        </div>
                        <div class="tagline">
                            <h5 class="mb-0">
                                <?php
                                    echo $testimonial['testimonial_name'];
                                ?>
                            </h5>
                            <span class="text-muted">
                                <?php
                                    echo $testimonial['testimonial_position'];
                                ?>
                            </span>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            <?php
                endforeach;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- End testimonial -->