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
            As business becomes mobile, Proving Ground provides forward thinking executives the ability to close the gaps on envisioning, rationalizing, and executing their mobile businesses.
          </p>

          <ul class="nav nav-tabs nav-stacked accordion">
            <li>
              <a href="#">Mobile strategy</a>
              <p>
                For most companies, mobile is a strategic priority because of its ability to provide a significant competitive advantage. 
                Proving Ground uses its proven strategy framework to help executive teams understand their opportunities, define mobile objectives, and ideate specific short and long-term initiatives for their achievement.
              </p>
            </li>
            <li>
              <a href="#">Mobile maturity assessment</a>
              <p>
                Fully leveraging mobile for strategic, competitive advantage requires a series of technological and organizational transformations. Each company’s potential is different. 
                Proving Ground’s mobile maturity framework lets executives fully understand their mobile readiness and realistically assess their mobile potential.
              </p>
            </li>
            <li>
              <a href="#">Technology roadmap planning</a>
              <p>
                A technology roadmap is a critical business tool that mitigates risk and enables executives to make strategic bets on long-term technology investments. 
                The Proving Ground technology roadmap provides the business justification and the technology path through the existing, emerging and yet unknown landscape towards enabling the company’s mobile vision.
              </p>
            </li>
            <li>
              <a href="#">Mobile web-enablement</a>
              <p>
                Mobile prospects are searching for you, and mobile customers want to interact with you. 
                Our tightly bounded, mobile web-enablement engagement lets us identify, develop and deploy key functionality that makes a significant business impact in a tight time frame.
              </p>
            </li>
            <li>
              <a href="#">Mobile application development</a>
              <p>
                Whether it runs on an Apple iOS device, Android, or Blackberry, almost every mobile app has to connect to enterprise systems. 
                In addition to delivering an app that users ￼￼embrace, Proving Ground ensures your apps connect securely and efficiently with back-end systems.
              </p>
            </li>
            <li>
              <a href="#">Embedded software development</a>
              <p>
                The number of machine-to-machine (M2M) and wireless embedded devices is growing exponentially - and so is the number of ways they can be deployed to improve products and operations. 
                Proving Ground helps companies envision their M2M future and then designs and develops innovative M2M solutions that deliver business value.
              </p>
            </li>
            <li>
              <a href="#">Mobile business model design</a>
              <p>
                Mobile innovation allows businesses to create, deliver and capture value in entirely new ways. 
                Proving Ground helps companies generate, rationalize and test new business models that maximize the value of mobile and fit the company’s core business strategy.
              </p>
            </li>
            <li>
              <a href="#">Human-centered design</a>
              <p>
                Human-centered design has been used for decades to create new solutions. 
                Proving Ground uses HCD to understand, first-hand, the challenges users face and develop innovative solutions that are both technically feasible and commercially viable.
              </p>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="span5 offset1"><a name="whatwethink"></a>
          <h2>What We Think</h2>
          <p>
            Before long, the primary way companies deliver value will be through mobile and connected devices. 
            What they need most is the conceptual framework and technical understanding to evolve into a mobile business.<br />&nbsp;
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
                Rapidly growing media management and distribution company Clearleap exists to help regional cable companies deliver the same content and services as media giants ￼Comcast, Time Warner, and Cox — a mission easier said than done when dealing with the limits of infrastructure far from major cities.
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
                A portion of America’s $80 billion annual furniture sales used to pass through the hands and bank accounts of interior designers — providing as much as 30% of the average designer’s annual income. 
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
            Getting mobile innovation right requires an experienced team pushing the limits of what’s possible, what’s practical, and what’s valuable.
          </p>
          <a class="extern" href="<?php echo get_permalink(12); ?>">Meet The Team &raquo;</a>
        </div>
      </div>
    </div>  

     	

<?php get_footer(); ?>