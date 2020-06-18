		</div><!-- end of wrapper for sticky footer-->	
		<?php if( !is_page( 627 ) ): ?> 
		<footer id="footer">
			<div class="container">
				<div class="row content">
					<div class="column">
						<a href="<?php echo home_url(); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="Jinnah Bistro Logo"></a>
						<!-- <p id="logo_text"> text here</p> -->

						<div id="social">
							<a href="https://www.instagram.com/jinnahbistro/" target="_blank">
								<img src="<?php bloginfo('template_directory'); ?>/images/instagram.svg" alt="Jinnah Bistro's Instagram">
							</a>
							
							<a href="https://www.facebook.com/JinnahBistro/" target="_blank">
								<img src="<?php bloginfo('template_directory'); ?>/images/facebook.svg" alt="Jinnah Bistro's Facebook">
							</a>
						</div>

						<!-- <a id="book_cta" href="https://jinnahbistro.co.uk/book/">BOOK NOW</a> -->

						<ul id="contact_details" class="mob">
							<li>Contact</li>
							<li><a href="tel:01274396666">01274 396 666</a></li>
							<li><a href="mailto:info@jinnahbistro.co.uk">info@jinnahbistro.co.uk</a></li>
						</ul>
					</div> 

					<div class="column">
						<ul id="opening_hours">
							<li>Opening Hours</li>
							<li>Monday - <span>Closed (except Bank Holidays)</span></li>
							<li>Tuesday - <span>4:30pm–11pm</span></li>
							<li>Wednesday - <span>4:30pm–11pm</span></li>
							<li>Thursday - <span>4:30pm–11pm</span></li>
							<li>Friday - <span>4:30pm–11pm</span></li>
							<li>Saturday - <span>4:30pm–11pm</span></li>
							<li>Sunday - <span>4:30pm–11pm</span></li>
						</ul>
					</div>

					<div class="column">
						<ul id="address">
							<li>Address</li>
							<li>69 Bingley Rd, </li>
							<li>Bradford, </li>
							<li>Shipley, </li>
							<li>BD18 4SB</li>
						</ul>


					</div>

					<div class="column">
						<!-- <a id="book_cta" href="https://jinnahbistro.co.uk/book/">BOOK NOW</a> -->
						<ul id="contact_details">
							<li>Contact</li>
							<li><a href="tel:01274396666">01274 396 666</a></li>
							<li><a href="mailto:info@jinnahbistro.co.uk">info@jinnahbistro.co.uk</a></li>
						</ul>
					</div>	

				</div>
			</div>

			<div id="copyright">
				<div class="container">
					<p>&copy; Jinnah Bistro - WEBSITE BY <a href="https://fyber.co.uk/">FYBER</a></p>
				</div>
			</div>
		</footer>
		<?php endif; ?>
		<?php wp_footer(); ?>

		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
	</body>
</html>