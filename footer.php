			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">

					<div class="pull-right">
					  <img src="/wp-content/uploads/icon-linkedin.png" width="24" border="0">
					  <img src="/wp-content/uploads/icon-facebook.png" width="24" border="0">
					  <img src="/wp-content/uploads/icon-google.png" width="24" border="0">
					  <img src="/wp-content/uploads/icon-twitter.png" width="24" border="0">
					</div>
			
					<div id="footer-links-container">
                        <?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
                        <span class="copywrite">&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> </span>
					</div>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div></div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

    <script src="<?php bloginfo('template_directory');?>/library/js/jquery.jshowoff.js"></script>

		<?php wp_footer(); // js scripts are inserted using this function ?>



	</body>

</html>