<?php
    $options = get_option( 'my_framework' );
?>
<div class="vg-page page-about" id="about">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="img-place wow fadeInUp">
            <img src="<?php echo $options['about_image']['url']; ?>" alt="">
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1 wow fadeInRight">
            <h1 class="fw-light">
                <?php 
                    echo $options['about_name']; 
                ?>
            </h1>
            <h5 class="fg-theme mb-3">
                <?php 
                    echo $options['about_designation']; 
                ?>
            </h5>
            <p class="text-muted">
                <?php 
                    echo $options['about_content']; 
                ?>
            </p>
            <ul class="theme-list">
                <?php 
                    $about_repeater_address = $options['about_repeater_address'];
                    foreach ($about_repeater_address as $about_address) {
                ?>
                    <li>
                        <b>
                            <?php
                                echo $about_address['about_address_label'];
                            ?>
                        </b> 
                            <?php
                                echo $about_address['about_address_value'];
                            ?>
                    </li>
                <?php
                    }
                ?>
                
            </ul>
            <a href="<?php echo $options['about_download_cv_url']; ?>" class="btn btn-theme-outline">
                <?php
                    echo $options['about_download_cv'];
                ?>
            </a>
        </div>
      </div>
    </div>
    <div class="container py-5">
      <h1 class="text-center fw-normal wow fadeIn">
            <?php
                echo $options['skill_section_title'];
            ?>
      </h1>
      <div class="row py-3">
        <div class="col-md-6">
          <div class="px-lg-3">
            <h4 class="wow fadeInUp">
                <?php
                    echo $options['skill_section_coding_skill_title'];
                ?>
            </h4>
            <?php
                $skill_coding_repeater = $options['skill_coding_repeater'];
                foreach($skill_coding_repeater as $skill_coding):
            ?>
                <div class="progress-wrapper wow fadeInUp">
                <span class="caption">
                    <?php
                        echo $skill_coding['skill_coding_name'];
                    ?>
                </span>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $skill_coding['skill_coding_progress']; ?>%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <?php
                        echo $skill_coding['skill_coding_progress'];
                    ?>%
                </div>
                </div>
                </div>
            <?php
                endforeach;
            ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="px-lg-3">
            <h4 class="wow fadeInUp">
                <?php
                    echo $options['skill_section_design_skill_title'];
                ?>
            </h4>
                <?php
                    $skill_design_repeater = $options['skill_design_repeater'];
                    foreach( $skill_design_repeater as $skill_design ):
                ?>
                    <div class="progress-wrapper wow fadeInUp">
                    <span class="caption">
                        <?php
                            echo $skill_design['design_name'];
                        ?>
                    </span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $skill_design['design_progress']; ?>%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <?php
                            echo $skill_design['design_progress'];
                        ?>%
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
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-6 wow fadeInRight">
            <h2 class="fw-normal">
                <?php
                    echo $options['education_title'];
                ?>
            </h2>
            <ul class="timeline mt-4 pr-md-5">
                <?php
                    $education_repeater = $options['education_repeater'];
                    foreach( $education_repeater as $education ):
                ?>
                    <li>
                        <div class="title">
                            <?php
                                echo $education['education_year'];
                            ?>
                        </div>
                        <div class="details">
                        <h5>
                            <?php
                                echo $education['education_course_name'];
                            ?>
                        </h5>
                        <small class="fg-theme">
                            <?php
                                echo $education['education_versity_name'];
                            ?>
                        </small>
                        <p>
                            <?php
                                echo $education['education_about_versity'];
                            ?>
                        </p>
                        </div>
                    </li>
                <?php
                    endforeach;
                ?>
                
            </ul>
        </div>
        <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
          <h2 class="fw-normal">
                <?php
                    echo $options['experience_title'];
                ?>
          </h2>
          <ul class="timeline mt-4 pr-md-5">
                <?php
                    $experience_repeater = $options['experience_repeater'];
                    foreach( $experience_repeater as $experience ):
                ?>
                    <li>
                        <div class="title">
                            <?php
                                echo $experience['experience_year'];
                            ?>
                        </div>
                        <div class="details">
                            <h5>
                                <?php
                                    echo $experience['experience_course_name'];
                                ?>
                            </h5>
                            <small class="fg-theme">
                                <?php
                                    echo $experience['experience_versity_name'];
                                ?>
                            </small>
                            <p>
                                <?php
                                    echo $experience['experience_about_versity'];
                                ?>
                            </p>
                        </div>
                    </li>
                <?php
                    endforeach;
                ?>
            
          </ul>
        </div>
      </div>
    </div>
  </div>