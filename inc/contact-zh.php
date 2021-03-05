<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 le-md-12">
				<h3>联系方式</h3>
				<div class="row">
					<div class="col-lg-6 le-md-12">
						<div class="tel">

							<p><?php echo get_field("phone_label", 683);
								echo get_field("phone", 683); ?> </p>
						</div>
						<div class="web">
							<p> <?php
								echo get_field("website_label", 683);
								echo get_field("website", 683); ?>

							</p>
						</div>
						<div class="email">
							<p><?php
								echo get_field("email_label", 683);
								echo get_field("email", 683);

								?></p>
						</div>
					</div>
					<div class="col-lg-6 le-md-12">
						<div class="address-headquarter">
							<p><?php
								echo get_field("address_label", 683);
								echo get_field("address", 683);
								?></p>
						</div>
						<div class="address-showroom">
							<p><?php
								echo get_field("address2_label", 683);
								echo get_field("address2", 683);
								?>
							</p>
						</div>
					</div>

				</div>
				<div class="map">
					<h3><?php echo get_field("map_label", 683); ?></h3>
					<div class="google-map">
						<?php echo get_field("embed_googld_map", 683); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-5">

				<h3>客户留言/咨询</h3>
				<p>(注：*为必填项)</p>
				<?php echo do_shortcode('[contact-form-7 id="2993" title="interior contact form (CH)"]') ?>
			</div>
		</div>
	</div>
	</div>
</section>