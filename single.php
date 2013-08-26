<?php get_header('backpage'); ?>

	<div id="backpage-content" class="row-fluid">

        <div id="main" class="span11 clearfix" role="main">

			<div id="post-content" class="clearfix row-fluid">
			
				<div id="main" class="span8 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
						
							<div class="blog-title"><?php the_title(); ?></div>

                            <p class="post-sub-title"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('M d'); ?>" pubdate><?php the_date('M d'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> </p>

						    <?php the_post_thumbnail( 'wpbs-featured' ); ?>


						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
							
							<?php wp_link_pages(); ?>
					
						</section> <!-- end article section -->
						
						<footer>

			                <div class="post-tags">
							<?php the_tags(); ?>
							</div>

							<?php 
							// only show edit button if user has permission to edit posts
							if( $user_level > 0 ) { 
							?>
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","bonestheme"); ?></a>
							<?php } ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template('',true); ?>
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

        </div>
    </div>

<?php get_footer(); ?>