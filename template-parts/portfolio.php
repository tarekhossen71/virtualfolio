<?php
    $options = get_option( 'my_framework' );
?>
<!-- Portfolio page -->
<div class="vg-page page-portfolio" id="portfolio">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">
            <?php
                echo $options['portfolio_title'];
            ?>
        </div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">
        <?php
            echo $options['portfolio_shortdes'];
        ?>
      </h1>
      <div class="filterable-button py-3 wow fadeInUp" data-toggle="selected">
        <button class="btn btn-theme-outline selected" data-filter="*">All</button>
            <?php
                $terms = get_terms( 'portfolio_taxonomy' );
                foreach( $terms as $term ):
            ?>
                <button class="btn btn-theme-outline" data-filter=".<?php echo $term->slug; ?>">
                    <?php
                        echo $term->name;
                    ?>
                </button>
            <?php
                endforeach;
            ?>
      </div>

      <div class="gridder my-3">
        <?php
            $portfolio = new WP_Query( array(
                'post_type'     => 'portfolio',
                'post_per_page' => 6,
            ) );
            while( $portfolio->have_posts() ):
                $portfolio->the_post();
                $termsArray = get_the_terms( $post->ID, 'portfolio_taxonomy' );
                $termSlug = '';
                foreach( $termsArray as $term ):
                    $termSlug .= $term->slug . ' ';
                endforeach;
            ?>
            <div class="grid-item <?php echo $termSlug; ?> wow zoomIn">
                <div class="img-place" data-src="<?php the_post_thumbnail_url(); ?>" data-fancybox data-caption="<h5 class='fg-theme'><?php the_title(); ?></h5> <p><?php the_content(); ?></p>">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    <div class="img-caption">
                    <h5 class="fg-theme">
                        <?php
                            the_title();
                        ?>
                    </h5>
                        <?php
                            the_content();
                        ?>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
        ?>
      </div> <!-- End gridder -->
    </div>
  </div> <!-- End Portfolio page -->