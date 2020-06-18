<?php
	/* template name: menu */
?>

<?php get_header(); ?>
<section id="menu_page">
	<section id="food_menu">
		<div class="container">

			<div class="row">
				<div class="col-12">
					<ul class="quicklinks">
						<li><a data-scroll href="#starters">Starters</a></li>
						<li><a data-scroll href="#mains">Mains</a></li>
						<li><a data-scroll href="#veg">Vegetable Mains</a></li>
						<li><a data-scroll href="#accompaniments">Accompaniments</a></li>
						<li><a data-scroll href="#drinks">Drinks</a></li>
						<li><a data-scroll href="#mocktails">Mocktails</a></li>
						<li><a data-scroll href="#desserts">Desserts</a></li>
						<li><a data-scroll href="#hotdrinks">Hot Drinks</a></li>
					</ul>
				</div>
			</div>

			<div class="row" id="pretext">
				<div class="col-10 mx-auto">
					<h3>
						All our ingredients are fresh and locally sourced where possible. As a business we firmly
						believe in supporting the British Farming Industry and always aim to buy our raw materials
						locally.
					</h3>
				</div>
			</div>

			<!-- starters -->
			<div id="starters" class="row section">
				<div class="col-12">
					<h2 class="heading">Starters</h2>
					<p class="desctitle">
						All starters are served with salad and mint sauce. Most starters are pre-marinated but if you
						prefer your food less spicy, please speak to a member of staff to see if we can accommodate to
						your needs.
					</p>
				</div>
			</div>

			<div class="row">
				<!-- breakfast toast-->
				<?php if( have_rows('starters') ): ?>


				<ul class="menu_list">

					<?php while( have_rows('starters') ): the_row(); 

					// vars
					$foodname = get_sub_field('foodname');
					$desc = get_sub_field('desc');
					$price = get_sub_field('price');

					?>

					<li>

						<p class="foodname"><?php echo $foodname; ?></p>
						<p class="desc"><?php echo $desc; ?></p>
						<p class="price">£<?php echo $price; ?></p>

					</li>

					<?php endwhile; ?>

				</ul>

				<?php endif; ?>

			</div>

			<div class="row">
				<ul class="quicklinks2">
					<li><a data-scroll href="#mains">Mains</a></li>
					<li><a data-scroll href="#veg">Vegetable Mains</a></li>
					<li><a data-scroll href="#accompaniments">Accompaniments</a></li>
					<li><a data-scroll href="#drinks">Drinks</a></li>
					<li><a data-scroll href="#mocktails">Mocktails</a></li>
					<li><a data-scroll href="#desserts">Desserts</a></li>
					<li><a data-scroll href="#hotdrinks">Hot Drinks</a></li>
				</ul>
			</div>


			<!-- Mains -->
			<div id="mains" class="row section">
				<div class="col-12">
					<h2 class="heading">Mains</h2>
					<p class="desctitle">
						All our food is cooked using fresh spices and ingredients. We do not use any artificial food
						colouring or flavours nor do we include any preservatives in any of our food. If there is
						anything not on our menu that you would like please speak to a member of the team as they may be
						available on request.
					</p>
				</div>
			</div>

			<div class="row">
				<!-- breakfast toast-->
				<?php if( have_rows('mains') ): ?>


				<ul class="menu_list">

					<?php while( have_rows('mains') ): the_row(); 

					// vars
					$foodname = get_sub_field('foodname');
					$price = get_sub_field('price');

					?>

					<li>

						<?php echo $foodname; ?>

						<span>
							£<?php echo $price; ?>
						</span>

					</li>

					<?php endwhile; ?>

				</ul>

				<?php endif; ?>

			</div>

			<?php if( have_rows('biryani') ): ?>
			<div class="row">

				<div class="col-12">
					<h2 class="sub-heading">
						Biryani
					</h2>
				</div>

				<p class="desctitle">
					Rice dishes cooked using Basmati long grain crops originated from Pakistan. Great taste, great aroma
					creating the ultimate rice dish. Can be served with raitha or curry sauce.
				</p>

				<ul class="menu_list">

					<?php while( have_rows('biryani') ): the_row(); 

					// vars
					$foodname = get_sub_field('foodname');
					$price = get_sub_field('price');

					?>

					<li>

						<?php echo $foodname; ?>

						<span>
							£<?php echo $price; ?>
						</span>

					</li>

					<?php endwhile; ?>

				</ul>

				<?php endif; ?>

			</div>



			<div class="row">
				<ul class="quicklinks2">
					<li><a data-scroll href="#starters">Starters</a></li>
					<li><a data-scroll href="#veg">Vegetable Mains</a></li>
					<li><a data-scroll href="#accompaniments">Accompaniments</a></li>
					<li><a data-scroll href="#drinks">Drinks</a></li>
					<li><a data-scroll href="#mocktails">Mocktails</a></li>
					<li><a data-scroll href="#desserts">Desserts</a></li>
					<li><a data-scroll href="#hotdrinks">Hot Drinks</a></li>
				</ul>
			</div>

			<!-- Veg Mains -->
			<div id="veg" class="row section">
				<div class="col-12">
					<h2 class="heading">Vegetable Mains</h2>
				</div>
				<p class="desctitle">
					Also available as a side
				</p>
			</div>

			<div class="row">
				<!-- breakfast toast-->
				<?php if( have_rows('vegmains') ): ?>


				<ul class="menu_list">

					<?php while( have_rows('vegmains') ): the_row(); 

					// vars
					$foodname = get_sub_field('foodname');
					$price = get_sub_field('price');
					$sidePrice = get_sub_field('price_side');

					?>

					<li>

						<?php echo $foodname; ?>
						<div class="flex-center">
							<span class="main-price">
								£<?php echo $price; ?>
							</span>
							<?php if( $sidePrice ): ?>
							<span class="side-price">
								£<?= $sidePrice ?>
							</span>
						</div>
						<?php endif;?>
					</li>

					<?php endwhile; ?>

				</ul>

				<?php endif; ?>

			</div>

			<div class="row">
				<ul class="quicklinks2">
					<li><a data-scroll href="#starters">Starters</a></li>
					<li><a data-scroll href="#mains">Mains</a></li>
					<li><a data-scroll href="#accompaniments">Accompaniments</a></li>
					<li><a data-scroll href="#drinks">Drinks</a></li>
					<li><a data-scroll href="#mocktails">Mocktails</a></li>
					<li><a data-scroll href="#desserts">Desserts</a></li>
					<li><a data-scroll href="#hotdrinks">Hot Drinks</a></li>
				</ul>
			</div>


			<!--accompaniments -->
			<div id="accompaniments" class="row section">
				<div class="col-12">
					<h2 class="heading">Accompaniments</h2>
				</div>
			</div>

			<div class="row">
				<!-- breakfast toast-->
				<?php if( have_rows('accompaniments') ): ?>


				<ul class="menu_list">

					<?php while( have_rows('accompaniments') ): the_row(); 

					// vars
					$foodname = get_sub_field('foodname');
					$price = get_sub_field('price');

					?>

					<li>

						<?php echo $foodname; ?>

						<span>
							£<?php echo $price; ?>
						</span>

					</li>

					<?php endwhile; ?>

				</ul>

				<?php endif; ?>

			</div>

			<div class="row">
				<ul class="quicklinks2">
					<li><a data-scroll href="#starters">Starters</a></li>
					<li><a data-scroll href="#mains">Mains</a></li>
					<li><a data-scroll href="#veg">Vegetable Mains</a></li>
					<li><a data-scroll href="#drinks">Drinks</a></li>
					<li><a data-scroll href="#mocktails">Mocktails</a></li>
					<li><a data-scroll href="#desserts">Desserts</a></li>
					<li><a data-scroll href="#hotdrinks">Hot Drinks</a></li>
				</ul>
			</div>


			<!--drinks -->
			<div id="drinks" class="row section">
				<div class="col-12">
					<h2 class="heading">Drinks</h2>
				</div>
			</div>

			<div class="row">
				<!-- breakfast toast-->
				<?php if( have_rows('drinks') ): ?>


				<ul class="menu_list">

					<?php while( have_rows('drinks') ): the_row(); 

					// vars
					$foodname = get_sub_field('foodname');
					$price = get_sub_field('price');

					?>

					<li>

						<?php echo $foodname; ?>

						<span>
							£<?php echo $price; ?>
						</span>

					</li>

					<?php endwhile; ?>

				</ul>

				<?php endif; ?>

			</div>

			<div class="row">
				<ul class="quicklinks2">
					<li><a data-scroll href="#starters">Starters</a></li>
					<li><a data-scroll href="#mains">Mains</a></li>
					<li><a data-scroll href="#veg">Vegetable Mains</a></li>
					<li><a data-scroll href="#accompaniments">Accompaniments</a></li>
					<li><a data-scroll href="#mocktails">Mocktails</a></li>
					<li><a data-scroll href="#desserts">Desserts</a></li>
					<li><a data-scroll href="#hotdrinks">Hot Drinks</a></li>
				</ul>
			</div>


			<!--mocktails -->
			<div id="mocktails" class="row section">
				<div class="col-12">
					<h2 class="heading">Mocktails</h2>
				</div>
			</div>

			<div class="row">
				<!-- breakfast toast-->
				<?php if( have_rows('mocktails') ): ?>


				<ul class="menu_list">

					<?php while( have_rows('mocktails') ): the_row(); 

					// vars
					$foodname = get_sub_field('foodname');
					$price = get_sub_field('price');

					?>

					<li>

						<?php echo $foodname; ?>

						<span>
							£<?php echo $price; ?>
						</span>

					</li>

					<?php endwhile; ?>

				</ul>

				<?php endif; ?>

			</div>

			<div class="row">
				<ul class="quicklinks2">
					<li><a data-scroll href="#starters">Starters</a></li>
					<li><a data-scroll href="#mains">Mains</a></li>
					<li><a data-scroll href="#veg">Vegetable Mains</a></li>
					<li><a data-scroll href="#accompaniments">Accompaniments</a></li>
					<li><a data-scroll href="#drinks">Drinks</a></li>
					<li><a data-scroll href="#desserts">Desserts</a></li>
					<li><a data-scroll href="#hotdrinks">Hot Drinks</a></li>
				</ul>
			</div>

			<!-- desserts -->

			<div id="desserts" class="row section">
				<div class="col-12">
					<h2 class="heading">Desserts</h2>
				</div>
			</div>

			<div class="row">
				<!-- breakfast toast-->
				<?php if( have_rows('desserts') ): ?>


				<ul class="menu_list">

					<?php while( have_rows('desserts') ): the_row(); 

					// vars
					$foodname = get_sub_field('foodname');
					$price = get_sub_field('price');

					?>

					<li>

						<?php echo $foodname; ?>

						<span>
							£<?php echo $price; ?>
						</span>

					</li>

					<?php endwhile; ?>

				</ul>

				<?php endif; ?>

			</div>

			<div class="row">
				<ul class="quicklinks2">
					<li><a data-scroll href="#starters">Starters</a></li>
					<li><a data-scroll href="#mains">Mains</a></li>
					<li><a data-scroll href="#veg">Vegetable Mains</a></li>
					<li><a data-scroll href="#accompaniments">Accompaniments</a></li>
					<li><a data-scroll href="#drinks">Drinks</a></li>
					<li><a data-scroll href="#mocktails">Mocktails</a></li>
					<li><a data-scroll href="#hotdrinks">Hot Drinks</a></li>
				</ul>
			</div>

			<!-- hot drinks -->
			<div id="hotdrinks" class="row section">
				<div class="col-12">
					<h2 class="heading">Hot Drinks</h2>
				</div>
			</div>

			<div class="row">
				<!-- breakfast toast-->
				<?php if( have_rows('hotdrinks') ): ?>


				<ul class="menu_list">

					<?php while( have_rows('hotdrinks') ): the_row(); 

					// vars
					$foodname = get_sub_field('foodname');
					$price = get_sub_field('price');

					?>

					<li>

						<?php echo $foodname; ?>

						<span>
							£<?php echo $price; ?>
						</span>

					</li>

					<?php endwhile; ?>

				</ul>

				<?php endif; ?>

			</div>

			<div class="row">
				<ul class="quicklinks2">
					<li><a data-scroll href="#starters">Starters</a></li>
					<li><a data-scroll href="#mains">Mains</a></li>
					<li><a data-scroll href="#veg">Vegetable Mains</a></li>
					<li><a data-scroll href="#accompaniments">Accompaniments</a></li>
					<li><a data-scroll href="#drinks">Drinks</a></li>
					<li><a data-scroll href="#mocktails">Mocktails</a></li>
					<li><a data-scroll href="#desserts">Desserts</a></li>
				</ul>
			</div>






			<p class="additional_info">*Subject to availability<br><br><strong>G = Containes Gluten | D = Containers
					Dairy | F - Contains Fish</strong></p>


			<div class="row" id="posttext">
				<div class="col-12">

					<p>
						Allergens Information: Jinnah Bistro and its associated businesses (Jinnah Restaurant) do not
						use nuts in any of our curries. We do however use ingredients which state ‘may contain traces of
						nuts.’ You must also note we do not work in a nut free kitchen and our oils are used for all
						food types and cross contamination is present. We cannot serve any customer who suffers from
						Celiac Disease as there is cross contamination within our kitchen. If you suffer from any
						allergy related issues, please inform a member of staff, and we will try our utmost best to
						accommodate your needs or advise you to the best of our knowledge.
					</p>

				</div>
			</div>


		</div>

	</section>
</section>
<?php get_footer(); ?>