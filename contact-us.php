<?php
	/*template name: Contact Us*/
?>

<?php 
	get_header();
?>

<div id="contact_page">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Contact Us</h1>	

				<p>Sed porttitor, mi at consectetur aliquet, ex metus viverra mi, vel hendrerit mi nisl vel mi. Ut id turpis id magna bibendum consectetur eget ac magna. Sed eu ornare enim. Fusce eget vestibulum dui, sit amet fermentum elit.</p>

				<section class="address">
					<h2>Address</h2>

					<ul>
						<li>Suite 1b,</li>
						<li>Realtex House,</li>
						<li>2 Leeds Rd,</li>
						<li>Rawdon, Leeds</li>
						<li>LS19 6AX</li>
					</ul>
				</section>
			</div>

			<div class="col-md-6">
				<div id="contact_form_wrap">
					<?php echo do_shortcode('[contact-form-7 id="26" title="Contact Page"]'); ?>
				</div>
			</div>
		</div>
	</div>

	<div id="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9413.806212823994!2d-1.684732!3d53.852618!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x62f0a0fefe001143!2sFyber!5e0!3m2!1sen!2suk!4v1562061606422!5m2!1sen!2suk" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>

<?php
	get_footer();
?>
