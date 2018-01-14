<div class="container marginAround">
  <div class="row text-center">
  <a href="<?php the_permalink(); ?>"><div class="col-xs-12 col-sm-3"><?php the_post_thumbnail(array('class' => 'img-responsive'))?></div>
    <div class="col-xs-12 col-sm-9"></a>
    <a href="<?php the_permalink(); ?>">
        <h3><?php the_title(); ?></h3>
      </a>
      <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
      <small><?php the_author();?></a>@<?php the_date();?></small>
     
    
    <?php the_excerpt()?></div>
  </div>
</div>