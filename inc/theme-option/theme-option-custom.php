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
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Hero Area Section',
      'fields' => array(
        // A text field
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
    CSF::createSection( $prefix, array(
        'title'   => 'About Section',
        'fields'  => array(
            array(
                'id'        => 'about-name',
                'type'      => 'text',
                'title'     => 'About Name',
                'desc'      => 'About Section Name Here',
            ),
        ),
    ) );
    
  
  }