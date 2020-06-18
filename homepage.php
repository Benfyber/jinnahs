<?php 
	/* Template Name: Homepage */
?>

<?php get_header(); ?>
<div id="homepage">

	<section class="intro">

		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-6  voucher-left">
				</div>
				<div class="col-xl-6 voucher-right justify-content-md-center content" data-aos="fade-right"
					data-aos-duration="3000">
					<h2>Gift vouchers are available for purchase</h2>
					<p>Contact us to get one now</p>
					<a style="margin:1.5rem 0 0 0" href="<?php echo get_permalink(15); ?>" class="menubutton ">Buy a
						Voucher</a>

				</div>



			</div>
			<div class="row">

				<div class="col-xl-6 left justify-content-md-center content" data-aos="fade-left"
					data-aos-duration="3000">
					<h2>About Jinnah Bistro</h2>

					<p>Jinnah Bistro is located in the heart of Saltaire, a world heritage site in Bradford, West
						Yorkshire. The Bistro has been designed to serve traditional Kashmiri food using the finest
						quality and locally sourced meats and ingredients in line with its demanding tourist catchment
						area.</p>

					<p>Jinnah Restaurants has been serving the finest quality Kashmiri cuisine to Yorkshire for over 25
						years. With the successful launch of its Bradford branch situated on Leeds Road Bradford, we
						have now taken the best selling dishes from our menus and created Jinnah Bistro.</p>


				</div>

				<div class="col-xl-6 right">
				</div>

			</div>

			<div class="row">

				<div class="col-xl-6 left1">
				</div>

				<div class="col-xl-6 right1 justify-content-md-center content" data-aos="fade-right"
					data-aos-duration="3000">
					<p>The Bistro offers a unique dining experience that of which can be related to mountainous areas of
						Kashmir. With it’s traditional crockery and modern yet quirky décor, diners are guaranteed to be
						amazed with the surrounding and more importantly the food. Our aim is to create a mesmerising
						and tantalising experience. Jinnah Bistro serves curries, South Asian starters and hand crafted
						beverages such as mocktails, and desserts to complete the dining experience</p>

					<p>The Bistro also offers all these great dining experiences straight to your doorstep via our Home
						Delivery Service. Restaurant quality food delivered fresh to your doorstep.</p>
				</div>

			</div>

		</div>
	</section>


	<section id="gallery_section">
		<div class="container-fluid pl-0 pr-0">
			<div class="row no-gutters">
				<div class="col-12 col-md-6 column">
					<div id="title_wrap">
						<h2 data-aos="fade-right">Head over to our <br><a
								href="https://jinnahbistro.co.uk/gallery/">Gallery</a> to see more</h2>
					</div>
				</div>

				<?php 
						// getting the gallery field from the gallery page(page id 13)
						$images = get_field('gallery_images', 13);
						// getting three random keys from the field
						$rand_images = array_rand($images, 3);
					?>

				<div class="col-12 col-md-6 column">
					<div class="gal_img"
						style="background-image: url(<?php echo $images[$rand_images[0]]['sizes']['gallery_xl']; ?>);">
					</div>
				</div>

				<div class="col-12 col-md-6 column">
					<div class="gal_img"
						style="background-image: url(<?php echo $images[$rand_images[1]]['sizes']['gallery_xl']; ?>);">
					</div>
				</div>

				<div class="col-12 col-md-6 column">
					<div class="gal_img"
						style="background-image: url(<?php echo $images[$rand_images[2]]['sizes']['gallery_xl']; ?>);">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="reviews">
		<section id="fb_reviews">
			<div class="container">
				<div class="row">
					<div class="col-12" data-aos="fade-left">
						<h2>FACEBOOK REVIEWS</h2>

						<?php do_action( 'wprev_pro_plugin_action', 1 ); ?>
					</div>
				</div>
			</div>
		</section>

		<section id="ad_reviews">
			<div class="container">
				<div class="row">
					<div class="col-12" data-aos="fade-right">
						<h2>TRIPADVISOR REVIEWS</h2>

						<?php do_action( 'wprev_tripadvisor_plugin_action', 1 ); ?>
					</div>
				</div>
			</div>
		</section>
	</section>
</div>
<?php get_footer(); ?>