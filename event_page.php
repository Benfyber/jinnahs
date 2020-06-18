<?php
	/* template name: Event Page */
?>

<?php get_header(); ?>
	<div id="event_page">
		<div class="container">
			<div id="event_menu">
				<img id="pattern_top" src="<?php echo bloginfo('template_directory'); ?>/images/pattern.svg" alt="">
				<img id="pattern_bottom" src="<?php echo bloginfo('template_directory'); ?>/images/pattern.svg" alt="">
				<img id="saltaire_stamp" src="<?php echo bloginfo('template_directory'); ?>/images/saltaire_stamp.svg" alt="">

				<div class="content">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo bloginfo('template_directory'); ?>/images/logo_grey.svg" alt="Jinnah Bistro" id="logo_grey">
					</a>

					<h1>SALTAIRE FESTIVAL</h1>

					<p class="intro_paras">A 5 Course meal for only £25.00 per head.</p> 
					<p class="intro_paras">Available between 13th - 22nd September.</p>
					<p class="intro_paras">Exclusive to RESERVATIONS ONLY.</p>
					
					<div id="pre_starter">
						<h2 class="section_heading">EXCLUSIVE&nbsp;MENU</h2>
						
						<p class="meal_title">Popodoms and Pickles</p>
					</div>

					<div id="starters">
						<h2 class="section_heading">STARTERS</h2>

						<h3 class="meal_title">Samosa Chaat (Meat or Vegetable)</h3>
						<p class="meal_info">Meat or Vegetable filled pastry which is deep fried. Served with a chick peas sauce and raitha (yoghurt consisting of tomatoes, cucumber and cumin seeds) and dressed with imli sauce (tamarind). A traditional ‘quick bite’ food throughout Southern Asia packed full of flavours.</p>

						<h3 class="meal_title">Shami Kebab</h3>
						<p class="meal_info">Mutton mince mixed using onions, garlic and ginger. Pan fried and served with salad and sauce.</p>

						<h3 class="meal_title">Vegetable Pakora</h3>
						<p class="meal_info">Onions and potatoes mixed with gram flour and deep fried.</p>
					</div>

					<div id="mains">
						<h2 class="section_heading">MAINS</h2>

						<h3 class="meal_title">Shab Deg</h3>
						<p class="meal_info">Shabdeg or Shab daig is cooked with Turnip. This dish is believed to have originated from Kashmir. “Shab” means night and “daigh” means cooking pot in Urdu language. This dish was left to simmer during the night. Our dish is cooked using Chicken (on the bone) which has been slow cooked with a blend of spices and delicious British Turnip.</p>

						<h3 class="meal_title">Lassi Ki Curry (Vegeterian)</h3>
						<p class="meal_info">This is a tantalizingly yoghurt curry prepared with gram flour, curd and delicious Vegetable Pakora. A simply irresistible texture that lives up to its expectation of truly Kashmiri taste because of its mildly spiced, deep fried Pakora submerged in thick gravy.</p>

						<h3 class="meal_title">Kofta</h3>
						<p class="meal_info">Mutton mince which has been carefully spiced and deep fired and then cooked in a rich spicy tomato base. A flavoursome authentic dish enjoyed only on special occasions.</p>
					</div>

					<div id="sundries">
						<h2 class="section_heading">SUNDRIES</h2>

						<h3 class="meal_title">Meeta Pilau</h3>
						<p class="meal_info">Pakistani long grain rice cooked using sugar, coconut pieces and Sultanas.</p>

						<h3 class="meal_title">Roghni Nan</h3>
						<p class="meal_info">A unique nan made using sesame seeds, eggs, flour and milk. Soft, tasty and a great compliment to any curry.</p>
					</div>

					<div id="dessert">
						<h2 class="section_heading">DESSERT</h2>

						<h3 class="meal_title">Gulab Jamon</h3>
						<p class="meal_info">Milk solids are prepared by heating milk over a low flame for a long time until the water content has evaporated and only the milk solids remain. These milk solids, known as khoya in the Indian subcontinent are kneaded into a dough, with a small amount of flour (maida), and then shaped into small balls and deep-fried in oil or ghee (clarified butter) at a low temperature until they get their familiar golden brown color.</p>

						<h3 class="meal_title">Kashmiri Tea</h3>
						<p class="meal_info">Tea cooked in milk and for a long period and sweetened using Rooh Afza (Rose Water Sweet Syrup). Garnished with Pistachio. Served Sweet.</p>
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
 
 
 
 






















































