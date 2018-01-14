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
    <style>
      .showcase{
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url') . '/img/showcase.jpg'); ?>) no-repeat center center;
      }
    </style>
  </head>
  <body>

     <!-- 
      ******************************************* 
      **************** NAVIGATION ***************
      *******************************************       
    -->
    
       <?php  get_template_part( 'template_parts/content', 'navbar' ) ?>
     

    <!-- 
      ******************************************* 
      **************** SHOWCASE IMAGE ***************
      *******************************************       
    -->
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 showcase">
        <div id="center" class="container">
          <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
          <p><?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?></p>
          <a href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>" class="btn btn-primary btn-lg" target='_blank'><?php echo get_theme_mod('btn_text', 'Get Started'); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- 
      ******************************************* 
      **************** WIDGET BOXES ***************
      *******************************************       
    -->
<section class="boxes">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
          <?php if (is_active_sidebar('box1')): ?>
            <?php dynamic_sidebar('box1');?>
          <?php endif;?>
      </div>
      <div class="col-md-4">
          <?php if (is_active_sidebar('box2')): ?>
            <?php dynamic_sidebar('box2');?>
          <?php endif;?>
      </div>
      <div class="col-md-4">
          <?php if (is_active_sidebar('box3')): ?>
            <?php dynamic_sidebar('box3');?>
          <?php endif;?>
      </div>
    </div>
  </div>
</section>


    <!-- 
      ******************************************* 
      **************** WP_QUERY 1 ***************
      *******************************************       
    -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>Latest Posts</h2>
			  <hr>
          <?php
            $args = array(
                'type' => 'post',
                'posts_per_page' => 1,
            );
 $lastBlog = new WP_Query($args);

if ($lastBlog->have_posts()):
    while ($lastBlog->have_posts()): $lastBlog->the_post();?>
						<?php get_template_part('template_parts/content', 'frontpage')?>
    <?php endwhile;
endif;
wp_reset_postdata();
?>
  </div>
</div>  

  <!-- 
      ******************************************* 
      **************** WP_QUERY 2 ***************
      *******************************************       
    -->

  <div class="row">
      <div class="col-sm-12">
      <h2>Other Posts</h2>
      <hr>
      <?php
        $args = array(
            'type' => 'post',
            'posts_per_page' => 4,
            'offset' => 5,
        );

$lastBlog = new WP_Query($args);

if ($lastBlog->have_posts()):
    while ($lastBlog->have_posts()): $lastBlog->the_post();?>
								<?php get_template_part('template_parts/content', 'frontpage')?>	
    <?php endwhile;
endif;
wp_reset_postdata();
?>
  </div>
</div>  <!-- end of second query  -->

      <!-- 
      ******************************************* 
      **************** WP_QUERY 3 ***************
      *******************************************       
    -->

    <div class="row">
      <div class="col-sm-12">
      <h2>Travel Posts</h2>
			<hr>
      <?php
        $args = array(
            'type' => 'post',
            'posts_per_page' => -1,
            'category_name' => 'travel',
        );

$lastBlog = new WP_Query($args);
if ($lastBlog->have_posts()):
    while ($lastBlog->have_posts()): $lastBlog->the_post();?>
       <?php get_template_part('template_parts/content', 'frontpage')?>
    <?php endwhile;									  

endif;

wp_reset_postdata();

?>
  </div>
</div>  

  
   </div>  <!-- end of container  -->
</section>


 <!-- 
      ******************************************* 
      **************** FOOTER ***************
      *******************************************       
    -->
<footer class="blog-footer">
  <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name');?></p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>

<?php wp_footer()?>
</body>
</html>
