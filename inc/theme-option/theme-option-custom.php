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
                'id'     => 'skill_coding_repeater',
                'type'   => 'repeater',
                'title'  => 'Skill Progress',
                'fields' => array(
              
                  array(
                    'id'    => 'skill_coding_name',
                    'type'  => 'text',
                    'title' => 'Coding Skill Name',
                    'desc'  => 'Coding Skill Name goes here',
                  ),
                  array(
                    'id'    => 'skill_coding_progress',
                    'type'  => 'text',
                    'title' => 'Coding Skill Progress',
                    'desc'  => 'Coding Skill Progress goes here',
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
                'id'     => 'skill_design_repeater',
                'type'   => 'repeater',
                'title'  => 'Design Skill Progress',
                'fields' => array(
              
                  array(
                    'id'    => 'skill_design_name',
                    'type'  => 'text',
                    'title' => 'Design Skill Name',
                    'desc'  => 'Design Skill Name goes here',
                  ),
                  array(
                    'id'    => 'skill_design_progress',
                    'type'  => 'text',
                    'title' => 'Design Skill Progress',
                    'desc'  => 'Design Skill Progress goes here',
                  ),
              
                ),
              ),
        ),
    ) );
    
  
  }