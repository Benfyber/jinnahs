<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148909629-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-148909629-1');
	</script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jinnah Bistro | The finest quality Kashmiri Cuisine</title>
	<link rel="stylesheet" href="https://use.typekit.net/xdz2pfb.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
	<div id="flex_wrapper">
		<?php if( is_front_page() ): ?>
		<div id="vouchers">
			<a href="<?php echo get_permalink(15); ?>">Gift vouchers are available for purchase from
				our&nbsp;restaurant</a>
		</div>
		<?php endif; ?>

		<?php if(  !is_page(655) ): ?>
		<!-- if not event page -->
		<header id="header" <?php if( is_page( 354 ) ): ?> class="half" <?php endif; ?> <?php if( is_page( 6 ) ): ?>
			class="full" <?php endif; ?>>
			<div class="overlay"></div>

			<div class="container topbar">
				<div id="hd_logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="Jinnah Bistro Logo">
					</a>
				</div>

				<nav id="hd_nav">
					<?php wp_nav_menu( array('theme_location' => 'header_nav', 'container' => false) ); ?>
				</nav>

				<div id="social">
					<a href="https://www.instagram.com/jinnahbistro/" target="_blank">
						<img src="<?php bloginfo('template_directory'); ?>/images/instagram.svg"
							alt="Jinnah Bistro's Instagram">
					</a>

					<a href="https://www.facebook.com/JinnahBistro/" target="_blank">
						<img src="<?php bloginfo('template_directory'); ?>/images/facebook.svg"
							alt="Jinnah Bistro's Facebook">
					</a>

					<a href="https://jinnahbistrosaltaire.com/our_menu.php" target="_blank" class="menubutton mob">Order
						now</a>
					<!-- <a style="margin:1.5rem 0 0 0" href="<?php echo get_permalink(15); ?>" class="menubutton mob">Buy a Voucher</a> -->

					<!-- <a href="<?php echo get_permalink( get_page_by_path( 'christmas-menu' ) ); ?>" id="saltaire_fest_link">
								<img src="<?php echo bloginfo('template_directory'); ?>/images/snowflake.svg" alt="">
								Christmas Menu
							</a> -->

					<!-- <a href="<?php echo get_permalink( get_page_by_path( 'christmas-menu' ) ); ?>" id="saltaire_fest_link">
								<img src="<?php echo bloginfo('template_directory'); ?>/images/saltaire_fest.svg" alt="">
							</a> -->
				</div>
			</div>

			<div <?php if( is_page( 354 ) ): ?> id="careers" <?php endif; ?> class="container hero">
				<?php if( is_front_page() ): ?>
				<div id="animatein" class="content">
					<p>Welcome to</p>
					<img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="Jinnah Bistro Logo">
					

					<div class="btns">
						<a href="https://jinnahbistrosaltaire.com/our_menu.php" class="menubutton">Order now</a>
						<!-- <a href="/reservations/" class="menubutton">Book now</a> -->
						
					<!-- <a style="margin:1.5rem 0 0 0" href="<?php echo get_permalink(15); ?>" class="menubutton mob">Buy a Voucher</a> -->
					</div>

					<!-- <div id="saltaire_fest_link">
									<a href="<?php echo get_permalink( get_page_by_path( 'christmas-menu' ) ); ?>" >
										<img src="<?php echo bloginfo('template_directory'); ?>/images/snowflake.svg" alt="">
										Christmas Menu
									</a>
								</div> -->

					<div id="social2">
						<a href="https://www.instagram.com/jinnahbistro/" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/images/instagram.svg"
								alt="Jinnah Bistro's Instagram">
						</a>

						<a href="https://www.facebook.com/JinnahBistro/" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/images/facebook.svg"
								alt="Jinnah Bistro's Facebook">
						</a>
					</div>


				</div>
				<div class="row grey-background">
					<div class="col-12 flex-center">
						<p>
							Due to the Coronavirus (COVID-19) outbreak our Takeout Opening Hours are:</p>
						<p>
							Wednesday – Sunday 4:30pm to 10:00pm</p>
						<p>
							Closed on Monday and Tuesday (except Bank Holiday)

						</p>
						<!-- <a id="close-covid" href="">OK</a> -->
					</div>
				</div>

				<?php elseif( is_page( 354 ) ): ?>
				<div class="content" <?php if( is_front_page() ): ?> class="homehero" <?php endif; ?>>
					<p>Work for us</p>
					<p>Fill out the form below and submit your CV</p>
				</div>
				<?php else: ?>
				<div class="content"></div>
				<?php endif; ?>
			</div>
		</header>
		<?php endif; ?>