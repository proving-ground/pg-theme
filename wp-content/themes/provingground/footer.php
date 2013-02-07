<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
			
			<!--div class="push"></div-->
			
	<?php if(!is_front_page()): ?>
			</div>
		</div>	
	</div>
	<?php endif; ?>

	</div> <!-- /container -->
    <div id="footer" class="navbar navbar-fixed-bottom bottombar">
      <div class="navbar-inner">
        <div class="container">
          <p class="copyright">&copy; Proving Ground <?php echo date('Y'); ?></p>
          <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container_class' => 'nav-collapse', 'menu_class' => 'nav' ) ); ?>
        </div>
      </div>
    </div>
</div>	
<?php wp_footer(); ?>
	
</body>
</html>