<?php
    // Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'my_framework';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'Theme Options',
      'menu_slug'  => 'theme-options',
      'priority'    => '1',
    ) );
  
    //
    // Hero Area section
    CSF::createSection( $prefix, array(
      'title'  => 'Hero Area Section',
      'fields' => array(
        // A text field
        array(
          'id'      => 'hero_area_bg_img',
          'type'    => 'media',
          'title'   => 'Hero Area Background Image',
          'desc'    => 'Hero Area Background Image Here',
          'default' => get_template_directory(). '/assets/img/bg_image_1.jpg',
        ),
        array(
          'id'      => 'hero_area_text',
          'type'    => 'text',
          'title'   => 'Hero Area Text',
          'desc'    => 'Hero Area Text Here',
          'default' => 'Welcome',
        ),
        array(
            'id'        => 'hero_area_pre_text',
            'type'      => 'text',
            'title'     => 'Hero Area Pre Text',
            'desc'      => 'Hero Area Pre Text Here',
            'default'   => 'I\'m'
        ),
        array(
            'id'        => 'hero_area_first_name',
            'type'      => 'text',
            'title'     => 'Hero Area First Name',
            'desc'      => 'Hero Area First Name Here',
            'default'   => 'Stephen',
        ),
        array(
            'id'        => 'hero_area_last_name',
            'type'      => 'text',
            'title'     => 'Hero Area Last Name',
            'desc'      => 'Hero Area Last Name Here',
            'default'   => 'Doe',
        ),
        array(
            'id'        => 'hero_area_designation',
            'type'      => 'text',
            'title'     => 'Hero Area Designation Name',
            'desc'      => 'Hero Area Designation Name Here',
            'default'   => 'UI/UX & Web Designer',
        ),
      )
    ) );
    // About Section 
    CSF::createSection( $prefix, array(
        'title'   => 'About Section',
        'fields'  => array(
            array(
                'id'        => 'about_image',
                'type'      => 'media',
                'title'     => 'About Image',
                'desc'      => 'About Section Image Here',
            ),
            array(
                'id'        => 'about_name',
                'type'      => 'text',
                'title'     => 'About Name',
                'desc'      => 'About Section Name Here',
                'default'   => 'Stephen Doe',
            ),
            array(
                'id'        => 'about_designation',
                'type'      => 'text',
                'title'     => 'About Designation',
                'desc'      => 'About Section Designation Here',
                'default'   => 'UI/UX & Web Designer',
            ),
            array(
                'id'        => 'about_content',
                'type'      => 'textarea',
                'title'     => 'About Content',
                'desc'      => 'About Section Content Here',
                'default'   => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form but the majority have suffered alteration in some',
            ),
            array(
                'id'     => 'about_repeater_address',
                'type'   => 'repeater',
                'title'  => 'About Address',
                'fields' => array(
                  array(
                    'id'        => 'about_address_label',
                    'type'      => 'text',
                    'title'     => 'Address Label',
                    'default'   => 'From:',
                  ),
                  array(
                    'id'        => 'about_address_value',
                    'type'      => 'text',
                    'title'     => 'Address Value',
                    'default'   => 'Texas, US',
                  ),
                ),
              ),
          array(
            'id'        => 'about_download_cv',
            'type'      => 'text',
            'title'     => 'About Button Name',
            'desc'      => 'About Section Button Name Here',
            'default'   => 'Download CV',
          ),
          array(
            'id'        => 'about_download_cv_url',
            'type'      => 'text',
            'title'     => 'About Button URL',
            'desc'      => 'About Section Button URL Here',
            'default'   => '#',
          ),
        ),
    ) );
    // MY skills 
    CSF::createSection( $prefix, array(
        'title'     => 'My Skills Section',
        'fields'    => array(
            array(
                'id'        => 'skill_section_title',
                'title'     => 'Skill Section Title',
                'type'      => 'text',
                'desc'      => 'Skill Section Title goes here',
                'default'   => 'My Skills',
            ),
            // Coding skills 
            array(
                'id'        => 'skill_section_coding_skill_title',
                'title'     => 'Skill Section Coding Skill Title',
                'type'      => 'text',
                'desc'      => 'Coding Skill Title goes here',
                'default'   => 'Coding Skills',
            ),
            array(
                'id'        => 'skill_coding_repeater',
                'title'     => 'Skill Coding',
                'type'      => 'repeater',
                'fields'    => array(
                    array(
                        'id'        => 'skill_coding_name',
                        'title'     => 'Skill Name',
                        'type'      => 'text',
                        'desc'      => 'Skill Name goes here',
                        'default'   => 'JavaScript',
                    ),
                    array(
                        'id'        => 'skill_coding_progress',
                        'title'     => 'Skill Progress',
                        'type'      => 'text',
                        'desc'      => 'Skill Progress goes here',
                        'default'   => '86',
                    ),
                ),
            ),
            //   Design skills 
            array(
                'id'        => 'skill_section_design_skill_title',
                'title'     => 'Skill Section Design Skill Title',
                'type'      => 'text',
                'desc'      => 'Design Skill Title goes here',
                'default'   => 'Design Skills',
            ),
            array(
                'id'        => 'skill_design_repeater',
                'title'     => 'Skill Design',
                'type'      => 'repeater',
                'fields'    => array(
                    array(
                        'id'        => 'design_name',
                        'title'     => 'Design Name',
                        'type'      => 'text',
                        'desc'      => 'Design Name goes here',
                        'default'   => 'UI / UX Design',
                    ),
                    array(
                        'id'        => 'design_progress',
                        'title'     => 'Design Progress',
                        'type'      => 'text',
                        'desc'      => 'Design Progress goes here',
                        'default'   => '92',
                    ),
                ),
            ),
        ),
    ) );
    // Education Section 
    CSF::createSection( $prefix, array(
        'title'     => 'Education Section',
        'fields'    => array(
            array(
                'id'        => 'education_title',
                'title'     => 'Education Title',
                'type'      => 'text',
                'desc'      => 'Education Title goes here',
                'default'   => 'Education',
            ),
            array(
                'id'        => 'education_repeater',
                'title'     => 'Education Details',
                'type'      => 'repeater',
                'fields'    => array(
                    array(
                        'id'        => 'education_year',
                        'title'     => 'Education Year',
                        'type'      => 'text',
                        'desc'      => 'Education Year goes here',
                        'default'   => '2010',
                    ),
                    array(
                        'id'        => 'education_course_name',
                        'title'     => 'Education Course Name',
                        'type'      => 'text',
                        'desc'      => 'Education Course Name goes here',
                        'default'   => 'Specialize of course',
                    ),
                    array(
                        'id'        => 'education_versity_name',
                        'title'     => 'Education Versity Name',
                        'type'      => 'text',
                        'desc'      => 'Education Versity Name goes here',
                        'default'   => 'University of Study',
                    ),
                    array(
                        'id'        => 'education_about_versity',
                        'title'     => 'Education About Versity',
                        'type'      => 'textarea',
                        'desc'      => 'Education About Versity goes here',
                        'default'   => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered',
                    ),
                ),
            ),
        ),
    ) );
    // Experience Section 
    CSF::createSection( $prefix, array(
        'title'     => 'Experience',
        'fields'    => array(
            array(
                'id'        => 'experience_title',
                'title'     => 'Experience Title',
                'type'      => 'text',
                'desc'      => 'Experience Tile goes here',
                'default'   => 'Experience',
            ),
            array(
                'id'        => 'experience_repeater',
                'title'     => 'Experience',
                'type'      => 'repeater',
                'fields'    => array(
                    array(
                        'id'        => 'experience_year',
                        'title'     => 'Experience Year',
                        'type'      => 'text',
                        'desc'      => 'Experience Year goes here',
                        'default'   => '2017 - Current',
                    ),
                    array(
                        'id'        => 'experience_course_name',
                        'title'     => 'Experience Course Name',
                        'type'      => 'text',
                        'desc'      => 'Experience Course Name goes here',
                        'default'   => 'Specialize of course',
                    ),
                    array(
                        'id'        => 'experience_versity_name',
                        'title'     => 'Experience Versity Name',
                        'type'      => 'text',
                        'desc'      => 'Experience Versity Name goes here',
                        'default'   => 'University of Study',
                    ),
                    array(
                        'id'        => 'experience_about_versity',
                        'title'     => 'Experience About Versity',
                        'type'      => 'textarea',
                        'desc'      => 'Experience About Versity goes here',
                        'default'   => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered',
                    ),
                ),
            ),
        ),
    ) );
    // Service Section 
    CSF::createSection( $prefix, array(
        'title'         => 'Service Section',
        'fields'        => array(
            array(
                'id'        => 'service_title',
                'title'     => 'Service Title',
                'type'      => 'text',
                'desc'      => 'Service Title goes here',
                'default'   => 'Service',
            ),
            array(
                'id'        => 'service_shortdes',
                'title'     => 'Service Short Description',
                'type'      => 'text',
                'desc'      => 'Service Short Description Title goes here',
                'default'   => 'What can i do?',
            ),
            array(
                'id'        => 'service_card',
                'title'     => 'Service',
                'type'      => 'repeater',
                'fields'    => array(
                    array(
                        'id'        => 'service_icon_class',
                        'title'     => 'Service Icon Class Name',
                        'type'      => 'text',
                        'desc'      => 'Get Icon Class Name From https://themify.me/themify-icons',
                        'default'   => 'ti-paint-bucket',
                    ),
                    array(
                        'id'        => 'service_title',
                        'title'     => 'Service Title',
                        'type'      => 'text',
                        'desc'      => 'Service Title goes here',
                        'default'   => 'Web Design',
                    ),
                    array(
                        'id'        => 'service_description',
                        'title'     => 'Service Desctiption',
                        'type'      => 'text',
                        'desc'      => 'Service Desctiption goes here',
                        'default'   => 'There are many variations of passages of Lorem Ipsum available',
                    ),
                ),
            ),
        ),
    ) );
    // Counter Section 
    CSF::createSection( $prefix, array(
        'title'     => 'Counter Section',
        'fields'    => array(
            array(
                'id'        => 'counter_bg_img',
                'title'     => 'Counter Background Image',
                'type'      => 'media',
                'desc'      => 'Counter Background Image goes here'
            ),
            array(
                'id'        => 'counter_section',
                'title'     => 'Counter',
                'type'      => 'repeater',
                'fields'    => array(
                    array(
                        'id'        => 'counter_number',
                        'title'     => 'Counter Number',
                        'type'      => 'text',
                        'desc'      => 'Counter Number goes here',
                        'default'   => '768',
                    ),
                    array(
                        'id'        => 'counter_name',
                        'title'     => 'Counter Name',
                        'type'      => 'text',
                        'desc'      => 'Counter Name goes here',
                        'default'   => 'Clients',
                    ),
                ),
            ),
        ),
    ) );
    // Portfolio Section 
    CSF::createSection($prefix, array(
        'title'     => 'Portfolio Section',
        'fields'    => array(
            array(
                'id'        => 'portfolio_title',
                'title'     => 'Portfolio Title',
                'type'      => 'text',
                'desc'      => 'Portfolio Section Title goes here',
                'default'   => 'Portfolio',
            ),
            array(
                'id'        => 'portfolio_shortdes',
                'title'     => 'Portfolio Short Description',
                'type'      => 'text',
                'desc'      => 'Portfolio Section Short Description goes here',
                'default'   => 'See my work',
            ),
        ),
    ));
    // Testimonial Section 
    CSF::createSection( $prefix, array(
        'title'     => 'Testimonial',
        'fields'    => array(
            array(
                'id'        => 'testimonial_title',
                'title'     => 'Testimonial Title',
                'type'      => 'text',
                'desc'      => 'Testimonial Section Title goes here',
                'default'   => 'What Clients are Saying',
            ),
            array(
                'id'        => 'testimonial_repeater',
                'type'      => 'repeater',
                'title'     => 'Testimonial',
                'fields'    => array(
                    array(
                        'id'        => 'testimonial_content',
                        'type'      => 'textarea',
                        'title'     => 'Testimonial Content',
                        'desc'      => 'Testimonial Content goes here',
                        'default'   => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered',
                    ),
                    array(
                        'id'        => 'testimonial_image',
                        'type'      => 'media',
                        'title'     => 'Testimonial Image',
                        'desc'      => 'Testimonial Image goes here',
                        'default'   => 'Satria Nugraha',
                    ),
                    array(
                        'id'        => 'testimonial_name',
                        'title'     => 'Testimonial Name',
                        'type'      => 'text',
                        'desc'      => 'Testimonial Section Name goes here',
                        'default'   => 'Satria Nugraha',
                    ),
                    array(
                        'id'        => 'testimonial_position',
                        'type'      => 'text',
                        'title'     => 'Testimonial Position',
                        'desc'      => 'Testimonial Position goes here',
                        'default'   => 'CEO Nutshell',
                    ),
                ),
            ),
        ),
    ) );
    // Our client section 
    CSF::createSection( $prefix, array(
        'title'     => 'Our Client Section',
        'fields'    => array(
            array(
                'id'        => 'our_client_repeater',
                'type'      => 'repeater',
                'title'     =>  'Our Client',
                'fields'    => array(
                    array(
                        'id'        => 'our_client_image_first_row',
                        'type'      => 'media',
                        'title'     => 'Our Client Image',
                        'desc'      => 'Our Client Image goes here'
                    ),
                    array(
                        'id'        => 'our_client_image_second_row',
                        'type'      => 'media',
                        'title'     => 'Our Client Image',
                        'desc'      => 'Our Client Image goes here'
                    ),
                ),
            ),
        ),
    ) );
    // Blog Section 
    CSF::createSection( $prefix, array(
        'title'     => 'Blog Section',
        'fields'    => array(
            array(
                'id'        => 'blog_title',
                'title'     => 'Blog Title',
                'type'      => 'text',
                'desc'      => 'Blog title goes here',
                'default'   => 'Blog',
            ),
            array(
                'id'        => 'blog_shortdes',
                'title'     => 'Blog Short Description',
                'type'      => 'text',
                'desc'      => 'Blog Short Description goes here',
                'default'   => 'Latest Post',
            ),
        ),
    ));
    // Contact Section 
    CSF::createSection( $prefix, array(
        'title'     => 'Contact Section',
        'fields'    => array(
            array(
                'id'        => 'contact_title',
                'title'     => 'Contact Title',
                'type'      => 'text',
                'desc'      => 'Contact title goes here',
                'default'   => 'Contact',
            ),
            array(
                'id'        => 'contact_shortdes',
                'title'     => 'Contact Short Description',
                'type'      => 'text',
                'desc'      => 'Contact Short Description goes here',
                'default'   => 'Get in touch',
            ),
        ),
    ));
    // Copyright Section 
    CSF::createSection( $prefix, array(
        'title'     => 'Copyright Section',
        'fields'    => array(
            array(
                'id'        => 'copyright_text',
                'title'     => 'Copyright Text',
                'type'      => 'textarea',
                'desc'      => 'Copyright Text goes here',
                'default'   => 'Copyright ©2022. All right reserved | Author <a href="#">Tarek</a>',
            ),
        ),
    ));
  
  }