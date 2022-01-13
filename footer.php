
		<?php if ( is_active_sidebar( 'footer-widget' ) ) : ?>

			<aside id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			
				<?php dynamic_sidebar( 'footer-widget' ); ?>
				
			</aside>

		<?php endif; ?>

		<footer class="flex-container-footer">

			<div class="flex-item-right-footer">
			
				<ul class="social-icon">

					<?php do_action('footer_social_media_icons'); ?>

				</ul>
			
			</div>
				
			<div class="flex-item-left-footer">

				<!-- Dynamic footer that displays the current year and website title -->
				<p>Copyright © <?php the_time('Y'); ?> <a href="https://github.com/Rodrigo-Correa/" target="_blank"><?php bloginfo('name'); ?></a>. Theme Designed by <a href="https://www.rodrigocorrea.me/"  target="_blank">Rodrigo Corrêa</a>. All Rights Reserved.</p>

			</div>

		</footer>
		
		<!-- Scroll To Top Button -->
		<button onclick="topFunction()" id="myBtn"><i class="fas fa-arrow-up"></i></button>

		<!-- JavaScript - Scroll To Top Button -->
		<script>
			//Get the button
			var mybutton = document.getElementById("myBtn");

			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mybutton.style.display = "block";
			  } else {
				mybutton.style.display = "none";
			  }
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
			  document.body.scrollTop = 0;
			  document.documentElement.scrollTop = 0;
			}
		</script>
		
		<?php wp_footer(); ?>

	</body>

</html>