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
					<p><span>Monday</span>4:00pm - 2:00am</p>
					<p><span>Monday</span>4:00pm - 2:00am</p>
					<p><span>Monday</span>4:00pm - 2:00am</p>
					<p><span>Monday</span>4:00pm - 2:00am</p>
					<p><span>Monday</span>4:00pm - 2:00am</p>
					<p><span>Monday</span>4:00pm - 2:00am</p>
					<p><span>Monday</span>4:00pm - 2:00am</p>
				</div>
				<div class="col-xs-12 col-md-4">
					<img src="/fairmount-co/wp-content/uploads/2016/11/footer-glasses.png" />
				</div>
				<div class="address col-xs-12 col-md-4">
					<h3>Address</h3>
					<p>Somwhere</p>
					<p>
						Yea thats it, this place is somewhere
					</p>

				</div>
				<div class="col-xs-12">
					<?php printf( esc_html__( 'Designed & Developed by  %1$s'),'<a target="_blank" href="http://fabricebt.com" rel="designer">Fabrice Toussaint</a>' ); ?>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
