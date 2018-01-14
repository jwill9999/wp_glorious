 <!-- 
      ******************************************* 
      ********* ENQUEUE SCRIPTS CSS JS **********
      *******************************************       
    -->

<?php function glorious_script_enqueue()
{
    // css
    wp_enqueue_style('bootstrapStyle', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 'all');
    wp_enqueue_style('customStyle', get_template_directory_uri() . '/assets/css/glorious.css', array(), 'all');

    // Js

    wp_enqueue_script('bootstrapJs', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), true);
    wp_enqueue_script('customJs', get_template_directory_uri() . '/assets/js/glorious.js', array(), true);
}

add_action('wp_enqueue_scripts', 'glorious_script_enqueue');