		<?php
		if (is_front_page()) {
			$footerClass = 'before';
			$ctaClass = '';
		} else {
			$footerClass = 'bg-black';
			$ctaClass = 'd-none';
		}
		?>
		</main><!-- /#main -->

		<footer id="footer" class="<?php echo $footerClass; ?>">
			<div class="container">
				<div class="row <?php echo $ctaClass; ?>">
					<div class="col-lg-6 bg-white footer_cta">
						<h3>Please contact me without obligation to discuss your real estate plans.</h3>
						<?php echo do_shortcode( '[gravityform id="1" title="false"]' ) ?>
					</div>
					<style>
						.desktop_cta_image {
							background-image: url(/wp-content/uploads/2023/06/kev-pic2-cta-1.png);
							background-size: cover;
							background-position: center;
							background-repeat: no-repeat;
						}
					</style>
					<div class="col-lg-6 p-0 desktop_cta_image">
						<img src="/wp-content/uploads/2023/06/kev-pic2-cta-1.png" class="d-lg-none img-fluid" alt="Kevin Bird CTA">
					</div>					
				</div><!-- /.row -->
				
				<div class="row <?php echo $ctaClass; ?>">
					<div class="col-lg-12 p-0 my-5">
						<hr style="border-color: #BCBCBC;opacity:1;">
					</div>
				</div>

				<div class="row common_footer justify-content-between">
					<div class="col-lg-3 my-3 my-lg-0">
						<img src="/wp-content/uploads/2023/06/REMAX-logo-footer.png" class="img-fluid" alt="Remax">
					</div>
					<div class="col-lg-3 my-3 my-lg-0">
						<h5>KEVIN BIRD, Realtor®</h5>
						<p>1319 Exmouth Street <br> Sarnia, ON L7S 3Y1</p>
						<p>Call or txt: <a href="tel:647-988-9446">647-988-9446</a></p>
						<p>Email: <a href="mailto:kevin@kevinbird.ca">kevin@kevinbird.ca</a></p>
					</div>
					<div class="col-lg-3 my-3 my-lg-0">
						<h5>Properties for Sale</h5>
						<a href="#">Sarnia Homes for Sale</a>
						<a href="#">Lambton Shores Homes for Sale</a>
					</div>
					<div class="col-lg-3 my-3 my-lg-0">
						<h5>Follow me</h5>
						<a href="#"><img src="/wp-content/uploads/2023/06/Facebook-icon.png" alt="Facebook"></a>
						<a class="mx-2" href="#"><img src="/wp-content/uploads/2023/06/Instagram-icon.png" alt="Instagram"></a>
					</div>
				</div>
			</div><!-- /.container -->
		</footer><!-- /#footer -->
		<div id="footer_bottom" class="d-flex align-items-center py-4">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="m-0 text-white">MLS®, REALTOR®, REALTORS® and the associated logos are trademarks of The Canadian Real Estate Association (CREA) and identify real estate professionals who are members of CREA.</p>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
