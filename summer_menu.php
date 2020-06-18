<?php
	/* template name: summer menu */
?>

<?php get_header(); ?>
<div id="christmas_page">
	<div class="container">
		<div id="event_menu">
			<img id="snowflake" src="<?php echo bloginfo('template_directory'); ?>/images/snowflake.svg" alt="">

			<div class="content">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo bloginfo('template_directory'); ?>/images/logo_grey.svg" alt="Jinnah Bistro"
						id="logo_grey">
				</a>

				<h1>SUMMER MENU</h1>




				<div class="menu_section">
					<h2 class="section_heading">STARTERS</h2>
					<p class="intro_paras">All starters are served with salad and mint sauce. Most starters are
						pre-marinated but if you prefer your food less spicy, please speak to a member of staff to see
						if we can accommodate to your needs.</p>
					<div class="menu_items">
						<p class="meal_title">KING PRAWN TIKKA (G) (D) (M) <span>5.95</span></p>
						<p class="meal_info">Juicy Tiger Prawns from the warm waters of South Asia, marinated in our
							special spices and grilled. Served with salad & mint sauce</p>

						<p class="meal_title">SAMOSA CHAAT (V) (G) (D)  <span> 4.75</span></p>
						<p class="meal_info">Meat or Vegetable filled pastry which is deep fried.  Served with a chick peas sauce and raitha  (yoghurt with tomatoes & cucumber) then dressed with Imli sauce (tamarind). A traditional ‘quick bite’ food throughout Southern Asia, packed full of flavours.</p>

						<p class="meal_title">VEGETABLE PAKORA (VE)  <span> 3.75</span></p>
						<p class="meal_info">Bonded with gram flour, spices, cumin seeds and a bit  of love make this starter the perfect summer snack.</p>
						
						<p class="meal_title">SHAMI KEBABS   <span>3.75</span> </p>
						<p class="meal_info">Mince mutton infused with fresh onions, spices and  garlic which is hand crafted into a flat circular shape  and then deep fried to deliver this delicious meat starter. </p>

					</div>
				</div>

				<div class="menu_section">
					<h2 class="section_heading">MAINS</h2>

					<div class="menu_items">

					<p class="meal_title">CHICKEN HANDI  <span>  7.95 </span></p>
						<p class="meal_info">The most authentic and popular Kashmiri curry.  Chicken cooked on the bone in a flavoursome sauce. </p>
						
						<p class="meal_title">KOFTA (D) (VE)  <span>  8.95</span></p>
						<p class="meal_info">Mutton mince balls cooked in a deep rich sauce. A food  found within the homes of villages when feeding guests.  Today we would like you to be our guest.</p>
						
						<p class="meal_title">LASSI KI CURRY (D) (V) <span>7.50  </span></p>
						<p class="meal_info">This is a tastebuds tantalizing yoghurt curry prepared  with gram flour, curd and delicious Vegetable Pakora.  A simply irresistible texture that lives up to its expectation.</p>
					
						
					</div>
				</div>

				<div class="menu_section">
					<h2 class="section_heading">ACCOMPANIMENTS</h2>

					<div class="menu_items">
						<p class="meal_title">GARLIC AND CORIANDER NAN <span>2.95</span></p>
						<p class="meal_title">CHEESE AND ONION NAN <span>3.25</span></p>
					</div>
				</div>

				<!-- <div id="disclaimers">
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
				</div> -->

				<div id="booking_section">
					<a href="<?php echo get_permalink( get_page_by_path( 'reservations' ) ); ?>">BOOK NOW</a>
				</div>

				<p id="go_back">To go back please <a href="<?php echo home_url(); ?>">click here</a></p>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>