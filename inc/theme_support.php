 <!-- 
      ******************************************* 
      ********* GLORIOUS THEME SUPPORT **********
      *******************************************       
    -->

<?php
function wpb_theme_setup()
{
    add_theme_support('post-thumbnails');

    // Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
    ));

    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
}

add_action('after_setup_theme', 'wpb_theme_setup');    