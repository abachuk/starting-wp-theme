<?php
/**
 *
 * @package WordPress
 */

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					
					<h1 class="entry-title"><?php the_title(); ?></h1>


					<div class="entry-content">
						<?php the_content(); ?>
						
						
						<?php
						//$project_text = get_post_meta($post->ID, 'test_text', true);
						//echo $project_text;
						?>
						

					</div><!-- .entry-content -->
				</article><!-- #post-## -->

<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>