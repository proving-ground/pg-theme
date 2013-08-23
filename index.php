

<?php get_header('backpage'); ?>


			<div id="backpage-content" class="row-fluid">

                <div id="main" class="span11 clearfix" role="main">

                     <div id="blog-header">
                       <div id="search-form" class="pull-right">
                          <form action="<?php echo home_url( '/' ); ?>" method="get" class="form-stacked">
                              <fieldset>
                                <div class="clearfix">
                                    <div class="input-append input-prepend">
                                        <span class="add-on"><i class="icon-search"></i></span>
                                        <input type="text" name="s" id="search" placeholder="<?php _e("Search","bonestheme"); ?>" value="<?php the_search_query(); ?>" />
                                        <button type="submit" class="search-button"><?php _e("Search","bonestheme"); ?></button>
                                    </div>
                                  </div>
                              </fieldset>
                          </form>
                       </div>
                       <div class="blog-title">Blog</div>
                     </div>

                    <div id="grid-container">
                        <?php
                        $num_cols = 3; // set the number of columns here
                        //the query section is only neccessary if the code is used in a page template//
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // for pagination
                        $args = array(
                          'posts_per_page' => 16, // optional to overwrite the dashboard setting
                          'cat' => 0, // add any other query parameter to this array
                          'paged' => $paged
                        );
                        query_posts($args);
                        //end of query section
                        if (have_posts()) :
                          for ( $i=1 ; $i <= $num_cols; $i++ ) :
                            echo '<div id="col-'.$i.'" class="col">';
                            $counter = $num_cols + 1 - $i;
                            while (have_posts()) : the_post();
                              if( $counter%$num_cols == 0 ) : ?>
                                <div class="new-wrapper">
                                    <div class="post-image">
                                       <?php echo the_post_thumbnail('medium'); ?>
                                    </div>
                                    <a class="post-title" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
                                    <div class="post-sub-title">
                                        <?php the_time('M d'); ?> | <?php the_tags() ?>
                                    </div>
                                    <div class="post-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>

                                </div> <!-- closing div of new-wrapper -->
                              <?php endif;
                              $counter++;
                            endwhile;
                            rewind_posts();
                            echo '</div>'; //closes the column div
                          endfor;
                          next_posts_link('&laquo; Older Entries');
                          previous_posts_link('Newer Entries &raquo;');
                        else:
                          echo 'no posts';
                        endif;
                        wp_reset_query();
                        ?>
                    </div>








                </div> <!-- end #main -->

            </div> <!-- end #content -->


<?php get_footer(); ?>
