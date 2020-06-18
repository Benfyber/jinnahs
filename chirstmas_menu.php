<?php
	/* template name: christmas */
?>

<?php get_header(); ?>
	<div id="christmas_page">
		<div class="container">
			<div id="event_menu">
				<img id="snowflake" src="<?php echo bloginfo('template_directory'); ?>/images/snowflake.svg" alt="">

				<div class="content">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo bloginfo('template_directory'); ?>/images/logo_grey.svg" alt="Jinnah Bistro" id="logo_grey">
					</a>

					<h1>CHRISTMAS MENU</h1>

					<p class="intro_paras">Banquet meal for only £16.95&nbsp;per&nbsp;head.</p> 
					<!-- <p class="intro_paras">Available between 13th - 22nd September.</p>
					<p class="intro_paras">Exclusive to RESERVATIONS ONLY.</p> -->
					
					<div class="menu_section">
						<h2 class="section_heading">POPODOMS AND PICKLES</h2>
					</div>

					<div class="menu_section">
						<h2 class="section_heading">STARTERS</h2>

						<div class="menu_items">
							<p class="meal_title">SIZZLER MIX FOR EACH&nbsp;PERSON</p>
							<p class="meal_info">(CHICKEN TIKKA, SEEKH KEBAB, CHICKEN WINGS, CHOPS,&nbsp;MASSALA&nbsp;FISH)</p>
						</div>
					</div>

					<div class="menu_section">
						<h2 class="section_heading">MAINS</h2>

						<div class="menu_items">
							<p class="meal_title">CHICKEN KARAHI</p>
							<p class="meal_title">LAMB KARAHI</p>
							<p class="meal_title">A VEGETABLE DISH OF THE PARTY’S&nbsp;CHOICE</p>
							<p class="meal_info">(UNLIMITED)</p>
						</div>
					</div>

					<div class="menu_section">
						<h2 class="section_heading">ACCOMPANIMENTS</h2>

						<div class="menu_items">
							<p class="meal_title">PILAU RICE</p>
							<p class="meal_title">NAN</p>
							<p class="meal_title">TANDOORI ROTI</p>
							<p class="meal_info">(UNLIMITED)</p>
						</div>
					</div>

					<div id="disclaimers">
						<p>BISTRO RESERVATION TIMES FOR ALL BOOKINGS ARE LISTED&nbsp;BELOW.</p>

						<p>MAXIMUM CAPACITY IS 20&nbsp;PEOPLE.</p>
					</div>

					<div id="seating_section">
						<h2>SEATING</h2>
						<p>SITTING 1 – 4PM TO 5:45PM</p>
						<p>SITTING 2 – 6PM TO 7:45PM</p>
						<p>SITTING 3 – 8PM TO 10PM</p>
					</div>

					<div id="add_info">
						<p>BANQUET OPTION AVAILABLE FOR PARTIES OF 7 PEOPLE OR&nbsp;MORE.</p>

						<p>A LA CARTE MENU ALSO&nbsp;AVAILABLE</p>
					</div>

					<div id="booking_section">
						<a href="<?php echo get_permalink( get_page_by_path( 'reservations' ) ); ?>">BOOK NOW</a>
					</div>

					<p id="go_back">To go back please <a href="<?php echo home_url(); ?>">click here</a></p>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
 
 
 
 






















































