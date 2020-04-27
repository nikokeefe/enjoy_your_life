<?php

/**
 *  Enjoy Theme Customizer
 * 
 * @package Enjoy
 */

function enjoy_customizer( $wp_customize ) {
    
    // Copyright section
    $wp_customize->add_section(
        'sec_copyright', array(
            'title' => 'Copyright Settings',
            'description' => 'Copyright Section'
        )
    );

    $wp_customize->add_setting(
        'set_copyright', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright', array(
            'label' => 'Copyright',
            'description' => 'Add your copyright info here',
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );

    
/**
 * --------------------------------------------------------------------------------
 * Slider Section
 */

    // Slider Section - Page 1
    $wp_customize->add_section(
        'sec_slider', array(
            'title' => __('Slider Settings', 'enjoy'),
            'description' => __('Select a page under Slide 1 to display your banner image. For a carousal effect, select pages for Slides 2 and 3.', 'enjoy'),
        )
    );

            // Field 1 - Slider 1 - Page
            $wp_customize->add_setting(
                'set_slider_page1', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'absint'
                )
            );

            $wp_customize->add_control(
                'set_slider_page1', array(
                    'label' => __('Slide 1', 'enjoy'),
                    'description' => __('Choose a page for the first slide', 'enjoy'),
                    'section' => 'sec_slider',
                    'type' => 'dropdown-pages'
                )
            );

            // Field 2 - Slider 1 - Button Text
            $wp_customize->add_setting(
                'set_slider_button_text1', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_slider_button_text1', array(
                    'label' => __('', 'enjoy'),
                    'description' => __('Button text', 'enjoy'),
                    'section' => 'sec_slider',
                    'type' => 'text'
                )
            );

            // Field 3 - Slider 1 - URL
            $wp_customize->add_setting(
                'set_slider_button_url1', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'esc_url_raw'
                )
            );

            $wp_customize->add_control(
                'set_slider_button_url1', array(
                    'label' => __('', 'enjoy'),
                    'description' => __('Link', 'enjoy'),
                    'section' => 'sec_slider',
                    'type' => 'url'
                )
            );

            // Field 4 - Slider 2 - Page
            $wp_customize->add_setting(
                'set_slider_page2', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'absint'
                )
            );

            $wp_customize->add_control(
                'set_slider_page2', array(
                    'label' => __('Slide 2', 'enjoy'),
                    'description' => __('Choose a page for the second slide', 'enjoy'),
                    'section' => 'sec_slider',
                    'type' => 'dropdown-pages'
                )
            );

            // Field 5 - Slider 2 - Button
            $wp_customize->add_setting(
                'set_slider_button_text2', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_slider_button_text2', array(
                    'label' => __('', 'enjoy'),
                    'description' => __('Button text', 'enjoy'),
                    'section' => 'sec_slider',
                    'type' => 'text'
                )
            );

            // Field 6 - Slider 2 - URL
            $wp_customize->add_setting(
                'set_slider_button_url2', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'esc_url_raw'
                )
            );

            $wp_customize->add_control(
                'set_slider_button_url2', array(
                    'label' => __('', 'enjoy'),
                    'description' => __('Link', 'enjoy'),
                    'section' => 'sec_slider',
                    'type' => 'url'
                )
            );

            // Field 7 - Slider - Page 3
            $wp_customize->add_setting(
                'set_slider_page3', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'absint'
                )
            );

            $wp_customize->add_control(
                'set_slider_page3', array(
                    'label' => __('Slide 3', 'enjoy'),
                    'description' => __('Choose a page for the third slide', 'enjoy'),
                    'section' => 'sec_slider',
                    'type' => 'dropdown-pages'
                )
            );

            // Field 8 - Slider Button Text - Page 3
            $wp_customize->add_setting(
                'set_slider_button_text3', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_slider_button_text3', array(
                    'label' => __('', 'enjoy'),
                    'description' => __('Button text', 'enjoy'),
                    'section' => 'sec_slider',
                    'type' => 'text'
                )
            );

            // Field 9 - Slider Button URL - Page 3
            $wp_customize->add_setting(
                'set_slider_button_url3', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'esc_url_raw'
                )
            );

            $wp_customize->add_control(
                'set_slider_button_url3', array(
                    'label' => __('', 'enjoy'),
                    'description' => __('Link', 'enjoy'),
                    'section' => 'sec_slider',
                    'type' => 'url'
                )
            );


               //   -----------------------------------------------------

    // Home Page Settings Section
    $wp_customize->add_section(
        'sec_home_page', array(
            'title' => __('Home Page Products and Blog Settings', 'enjoy'),
            'description' => __('Home Page Settings', 'enjoy'),
        )
    );

            // Field 1 - Popular Products Title
			$wp_customize->add_setting(
				'set_popular_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> __('', 'enjoy'),
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_popular_title', array(
					'label' 		=> __('Popular Products Title', 'enjoy'),
					'description' 	=> __('Popular Products Title', 'enjoy'),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

            // Popular Products
            $wp_customize->add_setting(
                'set_popular_max_num', array(
                    'type' => 'theme_mod',
                    'default' => '4',
                    'sanitize_callback' => 'absint'
                )
            );

            $wp_customize->add_control(
                'set_popular_max_num', array(
                    'label' => __('Popular Products Max Number', 'enjoy'),
                    'description' => __('Please, add the number of products you would like to display', 'enjoy'),
                    'section' => 'sec_home_page',
                    'type' => 'number'
                )
            );

            $wp_customize->add_setting(
                'set_popular_max_col', array(
                    'type' => 'theme_mod',
                    'default' => '4',
                    'sanitize_callback' => 'absint'
                )
            );

            $wp_customize->add_control(
                'set_popular_max_col', array(
                    'label' => __('Popular Products Max columns', 'enjoy'),
                    'description' => __('Please, add the number of columns you would like to display', 'enjoy'),
                    'section' => 'sec_home_page',
                    'type' => 'number'
                )
            );

            // New Arrivals
            // Field 4 - New Arrivals Title
			$wp_customize->add_setting(
				'set_new_arrivals_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_title', array(
					'label' 		=> __('New Arrivals Title', 'enjoy'),
					'description' 	=> __('New Arrivals Title', 'enjoy'),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
            );
            
            $wp_customize->add_setting(
                'set_new_arrivals_max_num', array(
                    'type' => 'theme_mod',
                    'default' => '4',
                    'sanitize_callback' => 'absint'
                )
            );

            $wp_customize->add_control(
                'set_new_arrivals_max_num', array(
                    'label' => __('New Arrivals Max Number', 'enjoy'),
                    'description' => __('Please, add the number of products you would like to display', 'enjoy'),
                    'section' => 'sec_home_page',
                    'type' => 'number'
                )
            );

            $wp_customize->add_setting(
                'set_new_arrivals_max_col', array(
                    'type' => 'theme_mod',
                    'default' => '4',
                    'sanitize_callback' => 'absint'
                )
            );

            $wp_customize->add_control(
                'set_new_arrivals_max_col', array(
                    'label' => __('New Arrivals Max columns', 'enjoy'),
                    'description' => __('Please, add the number of columns you would like to display', 'enjoy'),
                    'section' => 'sec_home_page',
                    'type' => 'number'
                )
            );

            // --------Deal of the Week------------------
            // Field 7 - Deal of the Week Title
			$wp_customize->add_setting(
				'set_deal_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_deal_title', array(
					'label' 		=> __('Deal of the Week Title', 'enjoy'),
					'description' 	=> __('Deal of the Week Title', 'enjoy'),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
            );
            
            // Display Deal of the week - Checkbox control

            
            $wp_customize->add_setting(
                'set_deal_show', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'absint'
                )
            );

            $wp_customize->add_control(
                'set_deal_show', array(
                    'label' => __('Display Deal of the Week?', 'enjoy'),
                    'section' => 'sec_home_page',
                    'type' => 'checkbox'
                )
            );

            // Deal of the week Product ID

            $wp_customize->add_setting(
                'set_deal', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'absint'
                )
            );

            $wp_customize->add_control(
                'set_deal', array(
                    'label' => __('Deal of the Week - Product ID', 'enjoy'),
                    'description' => __('Please enter the ID of the product you would like to feature', 'enjoy'),
                    'section' => 'sec_home_page',
                    'type' => 'number'
                )
            );

}
add_action( 'customize_register', 'enjoy_customizer' );


function my_fancy_lab_sanitize_checkbox( $checked ) {
    return ( ( isset( $checked ) && $checked == true ) ? true : false );
}