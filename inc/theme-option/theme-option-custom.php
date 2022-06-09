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
        ),
        array(
          'id'      => 'hero_area_text',
          'type'    => 'text',
          'title'   => 'Hero Area Text',
          'desc'    => 'Hero Area Text Here',
        ),
        array(
            'id'        => 'hero_area_pre_text',
            'type'      => 'text',
            'title'     => 'Hero Area Pre Text',
            'desc'      => 'Hero Area Pre Text Here',
        ),
        array(
            'id'        => 'hero_area_first_name',
            'type'      => 'text',
            'title'     => 'Hero Area First Name',
            'desc'      => 'Hero Area First Name Here',
        ),
        array(
            'id'        => 'hero_area_last_name',
            'type'      => 'text',
            'title'     => 'Hero Area Last Name',
            'desc'      => 'Hero Area Last Name Here',
        ),
        array(
            'id'        => 'hero_area_designation',
            'type'      => 'text',
            'title'     => 'Hero Area Designation Name',
            'desc'      => 'Hero Area Designation Name Here',
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
            ),
            array(
                'id'        => 'about_designation',
                'type'      => 'text',
                'title'     => 'About Designation',
                'desc'      => 'About Section Designation Here',
            ),
            array(
                'id'        => 'about_content',
                'type'      => 'textarea',
                'title'     => 'About Content',
                'desc'      => 'About Section Content Here',
            ),
            array(
                'id'     => 'about_repeater_address',
                'type'   => 'repeater',
                'title'  => 'About Address',
                'fields' => array(
                  array(
                    'id'    => 'about_address_label',
                    'type'  => 'text',
                    'title' => 'Address Label'
                  ),
                  array(
                    'id'    => 'about_address_value',
                    'type'  => 'text',
                    'title' => 'Address Value'
                  ),
                ),
              ),
          array(
            'id'        => 'about_download_cv',
            'type'      => 'text',
            'title'     => 'About Button Name',
            'desc'      => 'About Section Button Name Here',
          ),
          array(
            'id'        => 'about_download_cv_url',
            'type'      => 'text',
            'title'     => 'About Button URL',
            'desc'      => 'About Section Button URL Here',
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
            ),
            // Coding skills 
            array(
                'id'        => 'skill_section_coding_skill_title',
                'title'     => 'Skill Section Coding Skill Title',
                'type'      => 'text',
                'desc'      => 'Coding Skill Title goes here',
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
                    ),
                    array(
                        'id'        => 'skill_coding_progress',
                        'title'     => 'Skill Progress',
                        'type'      => 'text',
                        'desc'      => 'Skill Progress goes here',
                    ),
                ),
            ),
            //   Design skills 
            array(
                'id'        => 'skill_section_design_skill_title',
                'title'     => 'Skill Section Design Skill Title',
                'type'      => 'text',
                'desc'      => 'Design Skill Title goes here',
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
                    ),
                    array(
                        'id'        => 'design_progress',
                        'title'     => 'Design Progress',
                        'type'      => 'text',
                        'desc'      => 'Design Progress goes here',
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
                    ),
                    array(
                        'id'        => 'education_course_name',
                        'title'     => 'Education Course Name',
                        'type'      => 'text',
                        'desc'      => 'Education Course Name goes here',
                    ),
                    array(
                        'id'        => 'education_versity_name',
                        'title'     => 'Education Versity Name',
                        'type'      => 'text',
                        'desc'      => 'Education Versity Name goes here',
                    ),
                    array(
                        'id'        => 'education_about_versity',
                        'title'     => 'Education About Versity',
                        'type'      => 'textarea',
                        'desc'      => 'Education About Versity goes here',
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
                    ),
                    array(
                        'id'        => 'experience_course_name',
                        'title'     => 'Experience Course Name',
                        'type'      => 'text',
                        'desc'      => 'Experience Course Name goes here',
                    ),
                    array(
                        'id'        => 'experience_versity_name',
                        'title'     => 'Experience Versity Name',
                        'type'      => 'text',
                        'desc'      => 'Experience Versity Name goes here',
                    ),
                    array(
                        'id'        => 'experience_about_versity',
                        'title'     => 'Experience About Versity',
                        'type'      => 'textarea',
                        'desc'      => 'Experience About Versity goes here',
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
                'desc'      => 'Service Title goes here'
            ),
            array(
                'id'        => 'service_shortdes',
                'title'     => 'Service Short Description',
                'type'      => 'text',
                'desc'      => 'Service Short Description Title goes here'
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
                    ),
                    array(
                        'id'        => 'service_title',
                        'title'     => 'Service Title',
                        'type'      => 'text',
                        'desc'      => 'Service Title goes here',
                    ),
                    array(
                        'id'        => 'service_description',
                        'title'     => 'Service Desctiption',
                        'type'      => 'text',
                        'desc'      => 'Service Desctiption goes here',
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
                    ),
                    array(
                        'id'        => 'counter_name',
                        'title'     => 'Counter Name',
                        'type'      => 'text',
                        'desc'      => 'Counter Name goes here',
                    ),
                ),
            ),
        ),
    ) );
  
  }