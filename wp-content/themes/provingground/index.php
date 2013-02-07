<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>
			
			<?php
			  $page_id = 10; //ID of page from your WP admin panel
			  $page_data = get_page( $page_id ); 
			
			  echo '<h1>' . $page_data->post_title . '</h1>'; // Show page title
			?>
			  <div id="blog-intro" style="margin-bottom:3em;">
			<?php  
			  echo $page_data->post_content; // Show page content
			?>
			</div>
			
			<?php if ( have_posts() ) : ?>
			
				<?php //provingground_content_nav( 'nav-top' ); ?>
			
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php get_template_part( 'content', get_post_format() ); ?>
					
				<?php endwhile; ?>
				
				<?php provingground_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'provingground' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'provingground' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

<?php get_footer(); ?>