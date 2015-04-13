<?php
function childheme_customize_register( $wp_customize ) {
    
    //Adding a section
    $wp_customize->add_section(
                        'footer_setting_section',
                        array(
                            'title' => 'Footer Settings',
                            'description' => 'This section club the setting for the fotter of the theme.',
                            'priority' => 9999,
                        )
    );
    
    //Add a setting
    $wp_customize->add_setting(
                    'show_footer_text'
    );
    
    
    //Add control
    $wp_customize->add_control(
                    'show_footer_text',
                    array(
                        'type' => 'checkbox',
                        'label' => 'Show footer text',
                        'section' => 'footer_setting_section',
                    )
    );
    
    //Add a setting
    $wp_customize->add_setting(
                    'footer_text_textbox',
                    array(
                         'default' => 'Footer text goes here',
                         'transport'   => 'postMessage'
                    )
    );
    
    //Add control
     $wp_customize->add_control(
                    'footer_text_textbox',
                    array(
                        'label' => 'Footer text',
                        'section' => 'footer_setting_section',
                        'type' => 'text',
                    )
    );
}
add_action( 'customize_register', 'childheme_customize_register' );


function childtheme_customizer_live_preview() {
    wp_enqueue_script(
        'child-themecustomizer',			
        get_stylesheet_directory_uri().'/child-theme-customizer.js',
        array( 'jquery','customize-preview' ),	
        '1.0',						
        true						
    );
}
add_action( 'customize_preview_init', 'childtheme_customizer_live_preview' );