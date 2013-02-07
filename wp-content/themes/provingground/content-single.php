<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
	<div class="span1">
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php provingground_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</div>
	<div class="span7">
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>		
		</header><!-- .entry-header -->
	By <?php the_author_posts_link(); ?>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'provingground' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
	
		<footer class="entry-meta">
			
			<?php edit_post_link( __( 'Edit', 'provingground' ), '<span class="edit-link">', '</span>' ); ?>
	
			<?php if ( get_the_author_meta( 'description' ) && ( ! function_exists( 'is_multi_author' ) || is_multi_author() ) ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries ?>
			<div id="author-info">
				<div id="author-avatar">
					<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'provingground_author_bio_avatar_size', 68 ) ); ?>
				</div><!-- #author-avatar -->
				<div id="author-description">
					<h2><?php printf( __( 'About %s', 'provingground' ), get_the_author() ); ?></h2>
					<?php the_author_meta( 'description' ); ?>
					<div id="author-link">
						<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
							<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'provingground' ), get_the_author() ); ?>
						</a>
					</div><!-- #author-link	-->
				</div><!-- #author-description -->
			</div><!-- #entry-author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
	</div>	
</article><!-- #post-<?php the_ID(); ?> -->