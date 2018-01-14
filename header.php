<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description');?>">
    <title>
      <?php bloginfo('name');?> |
      <?php is_front_page() ? bloginfo('description') : wp_title();?>
    </title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head();?>
  </head>
  <body>
    
        <?php get_template_part( 'template_parts/content', 'navbar' )   ?>
      

    <div class="container">
      <div class="blog-header">
        <h1 class="blog-title"><?php bloginfo('name');?></h1>
        <p class="lead blog-description"><?php bloginfo('description');?></p>
      </div>
