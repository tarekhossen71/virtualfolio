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
          'id'    => 'hero_area_text',
          'type'  => 'text',
          'title' => 'Hero Area Text',
        ),
        array(
            'id'    => 'hero_area_pre_text',
            'type'  => 'text',
            'title' => 'Hero Area Pre Text',
          ),
      )
    ) );
    CSF::createSection( $prefix, array(
        'title'   => 'About Section',
        'fields'  => array(
            array(
                'id'        => 'about-name',
                'type'      => 'text',
                'title'     => 'About Name'
            ),
        ),
    ) );
    
  
  }