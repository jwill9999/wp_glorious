<?php
/**
 * Template Name: Page No Title
 *
 * @package WordPress
 * @subpackage Glorious
 * @since Glorious 1.0.0
 */
?>

<?php
get_header();
?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post();?>
	    <h1> This is my fixed title </h1>
									<small>Posted on: <?php the_time('F j, Y');?> at <?php the_time('g:i a');?>, in <?php the_category()?></small>
									<?php the_content();?>
	    <?php endwhile;?>
<?php endif;?>
<?php
?>

 <?php get_footer()?>
