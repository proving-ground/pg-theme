<?php
/*
Template Name: Case Study Wrapper
*/
?>


<?php
  function the_slug($echo=true){
    $slug = basename(get_permalink());
    do_action('before_slug', $slug);
    $slug = apply_filters('slug_filter', $slug);
    if( $echo ) echo $slug;
    do_action('after_slug', $slug);
  }

?>



			<div class="clearfix row-fluid">

				<div class="span12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">


                            <section class="post_content">

                                <?php $this_page_id = $wp_query->post->ID; ?>
                                <?php $page_count = 0; ?>

                                <div id="caseCarouselContainer" class="row-fluid">
                                    <div class="carousel slide" id="caseCarousel">
                                      <div class="carousel-inner">

                                        <?php query_posts(array('showposts' => 20, 'post_parent' => $this_page_id, 'post_type' => 'page')); while (have_posts()) { the_post(); ?>
                                            <?php ++$page_count; ?>

                                            <div class="item  <?php if ($page_count==1) echo 'active'; ?>">
                                              <div id="case-Content"><?php the_content(); ?></div>

                                            </div>

                                        <?php } ?>

                                      <!-- Controls -->
                                      <a class="left case-carousel-control" href="#caseCarousel" data-slide="prev">
                                        <span class="icon-prev"></span>
                                      </a>
                                      <a class="right case-carousel-control" href="#caseCarousel" data-slide="next">
                                        <span class="icon-next"></span>
                                      </a>
                                    </div>
                                </div>


                            </section> <!-- end article section -->

                            <footer>

                                <p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>

                            </footer> <!-- end article footer -->

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



