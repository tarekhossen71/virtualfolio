    <?php
        $options = get_option( 'my_framework' );
    ?>
  <!-- Blog -->
  <div class="vg-page page-blog" id="blog">
    <div class="container">
      <div class="text-center">
        <div class="badge badge-subhead wow fadeInUp">
            <?php
                echo $options['blog_title'];
            ?>
        </div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">
             <?php
                echo $options['blog_shortdes'];
            ?>
      </h1>
      <div class="row post-grid">
        <?php
            $blog = new WP_Query( array(
                'post_type'     => 'post',
                'order'         => 'asc'
            ) );

            while( $blog->have_posts() ):
                $blog->the_post();
        ?>
            <div class="col-md-6 col-lg-4 wow fadeInUp">
                <div class="card">
                    <div class="img-place">
                        <?php
                            the_post_thumbnail( 'large' );
                        ?>
                    </div>
                    <div class="caption">
                    <a href="javascript:void(0)" class="post-category">
                        <?php
                            the_category( ' ' );
                        ?>
                    </a>
                    <a href="#" class="post-title">
                        <?php
                            the_title();
                        ?>
                    </a>
                    <span class="post-date">
                        <span class="sr-only">Published on</span> 
                        <?php
                            echo get_the_date();
                        ?>
                    </span>
                    </div>
                </div>
            </div>
        <?php
            endwhile;
        ?>
        
      </div>
    </div>
  </div> <!-- End blog -->