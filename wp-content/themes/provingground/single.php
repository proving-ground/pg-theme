<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>
					<div class="span1">&nbsp;</div>
					<div class="span7">
					<?php comments_template( '', true ); ?>
					</div>
					
					<nav id="nav-single" style="clear:both;">
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'provingground' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'provingground' ) ); ?></span>
					</nav><!-- #nav-single -->

				<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>