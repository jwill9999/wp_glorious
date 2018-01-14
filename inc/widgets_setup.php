 <!-- 
      ******************************************* 
      ********* WIDGETS SETUP *******************
      *******************************************       
    -->
<?php
function wpb_init_widgets($id)
{
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'class' => 'custom',
        'description' => 'standard sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Box1',
        'id' => 'box1',
        'class' => 'custom',
        'description' => 'Box widget 1',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Box2',
        'id' => 'box2',
        'class' => 'custom',
        'description' => 'Box widget 2',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Box3',
        'id' => 'box3',
        'class' => 'purple',
        'description' => 'Box widget 3',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'wpb_init_widgets');