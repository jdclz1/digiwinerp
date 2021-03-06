<?php
/**
 * The template for displaying all pages.
 *
 * @package Alternate Lite
 */

get_header(); ?>

<div id="contentwrapper">
	<?php if (has_post_thumbnail()): ?>
  		<?php the_post_thumbnail('alternate-singlethumb'); ?>
    <?php endif; ?>

	<div id="content">
    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    		<div class="post" id="post-<?php the_ID(); ?>">
      			<h1 class="entry-title">
        			<?php the_title(); ?>
      			</h1>
      			<div class="entry">
        			<?php the_content(); ?>
        			<?php wp_link_pages(array('before' => '<p><strong>'. __( 'Pages:', 'alternate-lite' ) .'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        			<?php comments_template(); ?>
      			</div>
    		</div>
    	<?php endwhile; endif; ?>
  	</div>
</div>
<?php get_footer(); ?>
