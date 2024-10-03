<?php global $theme_options; ?>
<footer class="footer wow fadeInUp">
    <div class="container">
      <div class="footer-contents">
        <div class="payment-modes">
       <?php echo $theme_options['footer_content']; ?>
        </div>

        <div class="footer-links">
          	<?php wp_nav_menu(array('menu'=>$theme_options['footer_menu1'], 'menu_class'      => 'footer-links')); ?>
        </div>
        <div class="social-media">
        <ul>
								 <?php if($theme_options['enable_fb']==1){ ?>
						<li><a href="<?php echo $theme_options['theme_fb']; ?>" target="_blank"><i class="icon-facebook"></i></a></li>

                <?php } if($theme_options['enable_tw']==1){ ?>
						<li><a href="<?php echo $theme_options['theme_tw']; ?>" target="_blank"><i class="icon-x"></i></a></li>
						 <?php }  if($theme_options['enable_lkn']==1){ ?>
					<li><a href="<?php echo $theme_options['theme_ln']; ?>" target="_blank"><i class="icon-linkedin"></i></a></li>
						
               <?php } if($theme_options['enable_ytb']==1){ ?>
						<li><a href="<?php echo $theme_options['theme_ytb']; ?>" target="_blank"><i class="icon-youtube"></i></a></li>
                   <?php } ?>
			  
       
          </ul>
        </div>
      </div>
      <div class="copyright wow fadeInUp">
       <p><?php echo $theme_options['foot_copy']; ?></p>
      </div>
    </div>
  </footer>
  <!-- Footer ends here -->

  <!-- Jquery 3.6.3 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <!--Bootstrap 5.3.0 Script-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Main js -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>

	</body>
</html>
