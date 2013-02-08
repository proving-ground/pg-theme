<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 * Template Name: Homepage
 */
	
get_header(); ?>	

	  <div class="row">
        <div class="span6 whatwedo"><a name="whatwedo"></a>
          <h2>What We Do</h2>
          <p>
            Proving Ground creates digital customer experiences that drive sales, differentiate brands, foster loyalty, and launch entirely new lines of business.
          </p>

          <ul class="nav nav-tabs nav-stacked accordion">
            <li>
              <a href="#">DIGITAL EXPERIENCE STRATEGY</a>
              <p>
                If it’s important, it deserves a strategy. How will your company define, rationalize and implement digital customer experiences to support your business goals? Most companies struggle for an answer. Proving Ground can help. We’ll assess where you stand and what impact your current digital experiences are having on your business. Then we’ll create a roadmap to where you ought to be that prioritizes and supports each project with a business case.
              </p>
            </li>
            <li>
              <a href="#">MULTI-SCREEN EXPERIENCE DESIGN</a>
              <p>
                Customers routinely jump from smartphones to computers to tablets &mdash; often in the course of completing a single task. How do you design a seamless experience for this seemingly eratic behavior? Proving Ground analyzes behavior from the customer’s point-of-view and builds a consistent experiences with just the right bridges across devices so customers never get lost in the cracks.
              </p>
            </li>
            <li>
              <a href="#">DIGITAL PRODUCT DEVELOPMENT</a>
              <p>
                Multi-screen changes everything. Proving Ground works with established products companies to redefine and extend their products for a multi-screen world. We’ve even helped a few start-ups get their first product to market. Our approach ensures a product that is flexible and scalable while minimizing the risk, cost and time in getting to market.
              </p>
            </li>
            <li>
              <a href="#">HTML5 &amp; RICH INTERNET APPLICATIONS</a>
              <p>
                HTML5 promises highly functional, rich user experiences that are universally available from multiple screens. But it’s not without its challenges. Slow loading, choppy mobile experiences are common, but not because of an inherent platform problem; it’s almost always a question of architectures and application design. Our extensive experience in HTML5 and rich internet application development ensures your project will deliver as promised.
              </p>
            </li>
            <li>
              <a href="#">MOBILE WEB-ENABLEMENT</a>
              <p>
                Mobile prospects are searching for you, and mobile customers want to interact with you. Yet a surprising number of companies don’t have a mobile-ready web site. Proving Ground knows a total redevelopment can be as undesireable as it is impractical. Our tightly bounded, mobile web-enablement engagement lets us identify, develop and deploy key functionality that makes a significant business impact in a tight time frame.
              </p>
            </li>
            <li>
              <a href="#">TECHNOLOGY ROADMAP PLANNING</a>
              <p>
                A technology roadmap is a critical business tool that mitigates risk and enables executives to make strategic bets on long-term technology investments. The Proving Ground technology roadmap provides the business justification and the technology path through the existing, emerging and yet unknown landscape towards enabling the company’s mobile vision.
              </p>
            </li>
            <li>
              <a href="#">Native iOS, Android and Windows 8 Development</a>
              <p>
                While some claim to be device-agnostics, we are staunch device-advocates &mdash; for each of the big 3 operating systems. Android, iOS and Windows 8 all have significant differences which should be embraced. Because when a native app is the right solution, those differences create the opportunity for exceptional digital experiences.
              </p>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="span5 offset1"><a name="whatwethink"></a>
          <h2>What We Think</h2>
          <p>
            The world of digital experience is evolving every day &mdash; and resetting customer expectations. We spend a lot of time watching what others are doing. Not to copy them, but to constantly evolve the way we think about our client’s digital experiences.
          </p>

			<?php
			$home_query = new WP_Query('showposts=3');
			if ( $home_query -> have_posts() ) : while ( $home_query -> have_posts() ) : $home_query -> the_post(); ?>
			
				<?php //get_template_part( 'content', get_post_format() ); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>					
					<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta span1">
						<?php provingground_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
					<div class="span4">
						<header class="entry-header">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</header><!-- .entry-header -->

						<div class="postlist_author">
						By <?php the_author_posts_link(); ?>
						</div>

						<div class="entry-content">
							<?php the_excerpt(); ?>						
						</div><!-- .entry-content -->
					</div>	
				</article><!-- #post-<?php the_ID(); ?> -->

			
			<?php endwhile; ?>
			<?php endif; ?>          
			
          <a class="extern" href="<?php bloginfo('url'); ?>/what-we-think/">Read The Blog &raquo;</a>
        </div>
      </div>
      <div class="row">
        <div class="span6 whatwevedone"><a name="whatwevedone"></a>
          <h2>What We’ve Done</h2>
          <p>
            We’ve developed and deployed mobile solutions to drive cost savings, open new revenue streams, differentiate competitors, and reinvent entire industries.
          </p>
          
          <ul class="nav nav-tabs nav-stacked accordion">
            <li>
              <a href="#">Coca-Cola</a>
              <p>
                Coca-Cola’s travel management team negotiates deeply discounted rates with hotels, car rental agencies, and other providers. 
                Unfortunately, traveling Coke employees often don’t have access to the discount codes needed to claim travel benefit.
              </p>
              <p>
                Coke engaged Proving Ground to develop a smartphone application that allows employees to access travel benefits anywhere in the world. 
                Native apps for IOS, Blackberry and Android make it easy for employees to use their personal smartphones at the point of purchase.
              </p>
              <p class="clearfix">
                <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/coca-cola/coke_blackberry.png" class="thickbox"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/coca-cola/coke_blackberry.png" src="Coca-Cola Blackberry Example" class="span1" /></a>
                <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/coca-cola/coke_iphone.png" class="thickbox"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/coca-cola/coke_iphone.png" src="Coca-Cola iPhone Example" class="span1" /></a>
                <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/coca-cola/coke_ipad.png" class="thickbox"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/coca-cola/coke_ipad.png" src="Coca-Cola iPad Example" class="span1" /></a>
              </p>
            </li>
            <li>
              <a href="#">Clearleap</a>
              <p>
                Rapidly growing media management and distribution company Clearleap exists to help regional cable companies deliver the same content and services as media giants ￼Comcast, Time Warner, and Cox &mdash; a mission easier said than done when dealing with the limits of infrastructure far from major cities.
              </p>
              <p>
                Proving Ground helps Clearleap fulfill its promise by leveraging technology that's already in consumers' homes. 
                For example, apps for Tivo and LG smart TVs deliver On-Demand and HBO-Go to areas previously impossible to reach.
              </p>
              <p class="clearfix">
                <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/clearleap/clearleap.png" class="thickbox"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/clearleap/clearleap.png" src="Clearleap Example" class="span3" /></a>
              </p>
            </li>
            <li>
              <a href="#">EviRx</a>
              <p>
                EviRx pioneered the field of video analysis, starting with solutions that make it cheaper and easier to certify new teachers. 
                Success begets imitation, and three years later several well established education tech companies entered the video analysis space.
              </p>
              <p>
                Proving Ground helped EviRx maintain category leadership by changing the game from flip-cams and desktop computers to mobile. 
                Proving Ground targeted the iPad because of its high penetration throughout colleges and its ability to deliver utility that no desktop product can touch.
              </p>
              <p class="clearfix">
                <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/evirx/evirx_1.png" class="thickbox"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/evirx/evirx_1.png" src="EviRx Example 1" class="span2" /></a>
                <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/evirx/evirx_2.png" class="thickbox"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/evirx/evirx_2.png" src="EviRx Example 2" class="span2" /></a>
              </p>
            </li>
            <li>
              <a href="#">PlayOn Sports</a>
              <p>
                PlayOn Sports is the largest rights holder and distributor of high school sporting event video. 
                With media consumption among teens migrating quickly from computers to mobile, PlayOn needed a crash course in mobile strategy.
              </p>
              <p>
                Proving Ground showed PlayOn how delivery through the traditional app model would undervalue PlayOn’s content to consumers and create a costly revenue share with Apple and Google. 
                Instead, Proving Ground developed a subscription-based solution that allowed PlayOn to keep 100% of a significantly higher recurring revenue stream.
              </p>
              <p class="clearfix">
                <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/playon/playon_1.png" class="thickbox"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/playon/playon_1.png" src="PlayOn Sports Example 1" class="span1" /></a>
                <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/playon/playon_2.png" class="thickbox"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/playon/playon_2.png" src="PlayOn Sports Example 2" class="span1" /></a>
                <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/playon/playon_3.png" class="thickbox"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/playon/playon_3.png" src="PlayOn Sports Example 3" class="span1" /></a>
              </p>
            </li>
            <li>
              <a href="#">Home Anatomy</a>
              <p>
                A portion of America’s $80 billion annual furniture sales used to pass through the hands and bank accounts of interior designers &mdash; providing as much as 30% of the average designer’s annual income.
                But the price transparency of the internet has virtually killed this income stream and decimated the design industry in the process. 
                Home Anatomy was created to restore them both.
              </p>
              <p>
                The Proving Ground-developed, Home Anatomy native iOS and Android application is part Instagram and part Etsy. 
                With it, designers capture and send pictures of the unique items they uncover for their clients as they drive about town. 
                Clients can approve and purchase the items with one click, while designers get relief form comparison shopping.
              </p>
              <p class="clearfix">
                <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/home anatomy/home_anatomy_1.png" class="thickbox"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/home anatomy/home_anatomy_1.png" src="Home Anatomy Example 1" class="span2" /></a>
                <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/home anatomy/home_anatomy_2.png" class="thickbox"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pg_portfolio_slices/home anatomy/home_anatomy_2.png" src="Home Anatomy Example 2" class="span2" /></a>
              </p>
            </li>
          </ul>
        </div>
    </div>
    <div class="row">
        <div class="span5 offset1"><a name="whoweare"></a>
          <h2>Who We Are</h2>
          <p>
            To better understand who we are, it’s good to start with who we are not.
          </p>
          <a class="extern" href="<?php echo get_permalink(12); ?>">Meet The Team &raquo;</a>
        </div>
      </div>
    </div>  

     	

<?php get_footer(); ?>