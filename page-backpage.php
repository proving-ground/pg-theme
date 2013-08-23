<?php
/*
Template Name: Backpage
*/
?>

<?php get_header('backpage'); ?>

			<div id="backpage-content" class="clearfix row-fluid">

				<div id="main" class="span11 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

                            <section class="row-fluid post_content">

                                <div class="span12">

                                  <?php the_content(); ?>

                                </div>

                            </section> <!-- end article header -->

                        </article> <!-- end article -->

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

			</div> <!-- end #content -->



<?php get_footer(); ?>