<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 le-md-12">
				<h3>Contact</h3>
				<div class="row">
					<div class="col-lg-6 le-md-12">
						<div class="tel">

							<p><?php echo get_field("phone_label", 533);
								echo get_field("phone", 533); ?> </p>
						</div>
						<div class="web">
							<p> <?php
								echo get_field("website_label", 533);
								echo get_field("website", 533); ?>

							</p>
						</div>
						<div class="email">
							<p><?php
								echo get_field("email_label", 533);
								echo get_field("email", 533);

								?></p>
						</div>
					</div>
					<div class="col-lg-6 le-md-12">
						<div class="address-headquarter">
							<p><?php
								echo get_field("address_label", 533);
								echo get_field("address", 533);
								?></p>
						</div>
						<div class="address-showroom">
							<p><?php
								echo get_field("address2_label", 533);
								echo get_field("address2", 533);
								?>
							</p>
						</div>
					</div>

				</div>
				<div class="map">
					<h3><?php echo get_field("map_label", 533); ?></h3>
					<div class="google-map">
						<?php echo get_field("embed_googld_map", 533); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-5">

				<h3>Lave Us A Message</h3>
				<p>(Note: * is required.)</p>
				<?php echo do_shortcode('[contact-form-7 id="645" title="interior contact form (EN)"]') ?>
			</div>
		</div>
	</div>
	</div>
</section>