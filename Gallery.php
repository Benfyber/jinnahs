<?php
	/* template name: Gallery */
?>
<?php get_header(); ?>
<section id="gallery_page">
    <div class="container-fluid pl-0 pr-0">
        <div class="row no-gutters">
            <div class="column">
                <div id="heading_wrap">
                    <h1><span>THE</span><br> PHOTO<br> GALLERY</h1>
                </div>
            </div>
            <!-- <?php 
					$gallery_field = get_field('gallery_images');
					$image = $gallery_field[0];

					$size_xl = $image['sizes']['gallery_xl'];
					$size_l = $image['sizes']['gallery_l'];
					$size_m = $image['sizes']['gallery_m'];
					$size_s = $image['sizes']['gallery_s'];
					$size_xs = $image['sizes']['gallery_xs'];
				?>


				<style>
					.first_row, .gallery_img{
						background-image: url(<?php echo $size_xl; ?>);
					}

					@media only screen and (max-width: 1920px){
						.first_row, .gallery_img{
							background-image: url(<?php echo $size_l; ?>);
						}
					}

					@media only screen and (max-width: 1400px){
						.first_row, .gallery_img{
							background-image: url(<?php echo $size_m; ?>);
						}
					}

					@media only screen and (max-width: 1000px){
						.first_row, .gallery_img{
							background-image: url(<?php echo $size_s; ?>);
						}
					}

					@media only screen and (max-width: 380px){
						.first_row, .gallery_img{
							background-image: url(<?php echo $size_xs; ?>);
						}
					}
				</style>

				<?php

				// display first image on load
				if( $gallery_field ): ?>
		            <div class="column">
						<?php if( $image['caption'] && $image['description'] ): ?>
							<div class="gallery_img blur"></div>

							<div class="overlay">
			            		<div class="bg"></div>
			            		<h2><?php echo $image['caption']; ?></h2>
			            		<p><?php echo $image['description']; ?></p>
			            	</div>
						<?php elseif( $image['caption'] ): ?>
							<div class="gallery_img blur"></div>

							<div class="overlay">
			            		<div class="bg"></div>
			            		<h2><?php echo $image['caption']; ?></h2>
			            	</div>
						<?php else: ?> 
							<div class="gallery_img"></div>
						<?php endif; ?>
		            </div>
				<?php endif; ?> -->
            <!--loading the first image in seperately due to the ajax load more plugin adding a wrapper around the images which broke the design-->
            <?php 
				$images = get_field('gallery_images');
				// $image = $images[0];
				
				// display first image on load
				if( $images ): $i = 0;?>
            <?php while( $i < 1 ): ?>
            <div class="column">
                <?php if( $images[$i]['caption'] && $images[$i]['description'] ): ?>
                <div class="gallery_img blur" style="background-image: url(<?php echo $images[$i]['url']; ?>);"></div>
                <div class="overlay">
                    <div class="bg"></div>
                    <h2>
                        <?php echo $images[$i]['caption']; ?>
                    </h2>
                    <p>
                        <?php echo $images[$i]['description']; ?>
                    </p>
                </div>
                <?php elseif( $images[$i]['caption'] ): ?>
                <div class="gallery_img blur" style="background-image: url(<?php echo $images[$i]['url']; ?>);"></div>
                <div class="overlay">
                    <div class="bg"></div>
                    <h2>
                        <?php echo $images[$i]['caption']; ?>
                    </h2>
                </div>
                <?php else: ?>
                <div class="gallery_img" style="background-image: url(<?php echo $images[$i]['url']; ?>);"></div>
                <?php endif; ?>
            </div>
            <?php $i++; ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php if ( have_posts() ) : ?>
    <div class="container-fluid pl-0 pr-0">
        <div class="row no-gutters">
            <!-- <?php while ( have_posts() ) : the_post(); ?>    
						<?php the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?> -->
            <?php echo do_shortcode( '[ajax_load_more acf="true" acf_post_id="13" acf_field_type="gallery" acf_field_name="gallery_images" post_type="post" transition_container="false" images_loaded="true" button_label="Load More" button_loading_label="Loading" offset="1" posts_per_page="4" scroll="false"]' );
					?>
        </div>
    </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>