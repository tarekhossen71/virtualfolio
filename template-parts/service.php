<?php
    $options = get_option( 'my_framework' );       
?>
<div class="vg-page page-service">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">
            <?php
                echo $options['service_title'];
            ?>
        </div>
      </div>
      <h1 class="fw-normal text-center wow fadeInUp">
            <?php
                echo $options['service_shortdes'];
            ?>
      </h1>
      <div class="row mt-5">
        <?php
            $service_cards = $options['service_card'];
            foreach( $service_cards as $service_card ):
        ?>
            <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card card-service wow fadeInUp">
                <div class="icon">
                <span class="<?php echo $service_card['service_icon_class']; ?>"></span>
                </div>
                <div class="caption">
                <h4 class="fg-theme">
                    <?php
                        echo $service_card['service_title'];
                    ?>
                </h4>
                <p>
                    <?php
                        echo $service_card['service_description'];
                    ?>
                </p>
                </div>
            </div>
            </div>
        <?php
            endforeach;
        ?>
        
      </div>
    </div>
  </div>
  <div class="vg-page page-funfact" style="background-image: url(<?php echo $options['counter_bg_img']['url']; ?>">
    <div class="container">
        <div class="row section-counter">
                <?php
                    $counter_sections = $options['counter_section'];
                    foreach( $counter_sections as $counter ):
                ?>
                    <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
                        <h1 class="number" data-number="<?php echo $counter['counter_number']; ?>">
                            <?php
                                echo $counter['counter_number'];
                            ?>
                        </h1>
                        <span>
                            <?php
                                echo $counter['counter_name'];
                            ?>
                        </span>
                    </div>
                <?php
                    endforeach;
                ?>
            
        </div>
    </div>
  </div>