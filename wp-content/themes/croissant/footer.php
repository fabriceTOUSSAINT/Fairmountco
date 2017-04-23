<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package croissant
 */

?>

	</div><!-- #content -->

	<footer class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="hours col-xs-12 col-md-4">
					<h3>Hours</h3>
					<?php echo do_shortcode('[mbhi_hours location="Fairmount-and-co"]'); ?>
				</div>
				<div class="footer-icon col-xs-12 col-md-4">
					<img src="/fairmount-co/wp-content/uploads/2016/11/footer-glasses.png" />
				</div>
				<div class="address col-xs-12 col-md-4">
					<h3>Address</h3>
					<a href="https://www.google.com/maps/place/Fairmount+%26+Co./@39.9698095,-75.1785342,17z/data=!4m8!1m2!2m1!1s795+N.+24th+Street+N.+24th+Street+Philadelphia,+Pennsylvania!3m4!1s0x89c6c7c86ad1d53d:0xfe9cf35936f5bb06!8m2!3d39.9698208!4d-75.1763923">795 N. 24th Street N. 24th Street<br />
					Philadelphia, Pennsylvania<br /></a>
					<a href="tel:2152350507">(215) 235-0506</a>
					<a href="mailto:info@drinkfairmountco.com">info@drinkFairmountCo.com</a>
					<div class="social-block">
						<a href="https://www.facebook.com/DrinkFairmount/" target="_blank">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
						<a href="https://twitter.com/drinkfairmount" target="_blank">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<div class="col-xs-12">
					<p class='dev-stamp'>
					<?php printf( esc_html__( 'Designed & Developed by  %1$s'),'<a target="_blank" href="http://fabricebt.com" rel="designer">Fabrice Toussaint</a>' ); ?>
					</p>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
