<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta span1">
			<?php provingground_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	
		<div class="span7">		
			<header class="entry-header">
				<?php if ( is_sticky() ) : ?>
					<hgroup>
						<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'provingground' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<h3 class="entry-format"><?php _e( 'Featured', 'provingground' ); ?></h3>
					</hgroup>
				<?php else : ?>
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'provingground' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<?php endif; ?>			
			</header><!-- .entry-header -->
			By <?php the_author_posts_link(); ?>
			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
			<?php else : ?>
			<div class="entry-content">
				<?php //the_content( __( '<span style="text-align:right;">Read Full Article <span class="meta-nav">&rarr;</span></span>', 'provingground' ) ); ?>
				<?php the_excerpt(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'provingground' ) . '</span>', 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->
			<?php endif; ?>
			
			<footer class="entry-meta">
				<?php $show_sep = true; ?>
				<?php if ( comments_open() ) : ?>
				<span class="comments-link lato"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Comment', 'provingground' ) . '</span>', __( '1 Comment', 'provingground' ), __( '% Comments', 'provingground' ) ); ?></span>
				<?php endif; // End if comments_open() ?>
				<?php if ( $show_sep ) : ?>
				<span class="sep"> | </span>
				<?php endif; // End if $show_sep ?>					
				<?php edit_post_link( __( 'Edit', 'provingground' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- #entry-meta -->
		</div>	

	</article><!-- #post-<?php the_ID(); ?> -->