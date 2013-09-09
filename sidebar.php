				<div id="sidebar1" class="fluid-sidebar sidebar span4" role="complementary">
				     <div id="search-form">
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


					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->

						<div class="alert alert-message">

							<p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>

						</div>

					<?php endif; ?>

				</div>