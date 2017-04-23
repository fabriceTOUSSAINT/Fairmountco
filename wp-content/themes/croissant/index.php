<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package croissant
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section>
				<div class="hero">
					<div class="overlay" />
					<div class="container hero-text-block">
						<div class="col-xs hero-img">
							<img src="/fairmount-co/wp-content/uploads/2016/11/FairmountCo_Final_White.png" />
							<h1>Check out our Daily specials and happy hour</h1>
							<a href="#" class='btn btn_light'>Here</a>
						</div>
					</div>
				</div>
			</section>

			<section class="sub-hero-cta">
				<div class="container">
					<div class="row">
						<div class="col-sm dinner-cta">
							<div class="cta-block">
								<h2>Dinning</h2>
								<p>Locally sourced dishes and cooking served from scratch, explore our food menu.</p>
								<a href="food-drink#foods" class='btn btn_light'>See Food Menu</a>
							</div>
						</div>
						<div class="col-sm drink-cta">
							<div class="cta-block">
								<h2>Pub</h2>
								<p>Pouring a rotating tap list from all over the USA, we have beer for enjoying in or taking out.</p>
								<a href="food-drink#drinks" class='btn btn_light'>See Drink Menu</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="middle-block">
				<div class="container about">
					<div class="row flex-items-xs-center">
						<h1 class="col-xs-12">We Are<br />Fairmount&Co</h1>
						<p class="col-md">
							Friendly, neighborhood pub with a passion for good beer and even better food. We pour from 17 rotating drafts and have over 150 bottles to choose from. We make sure to stock everyones favorites and serve our beer fresh as possible from the day we receive it.  Preparing and serving from scratch, our take on American comfort food. We try to source all our ingredients from as many local purveyors as possible and support as many local businesses in the process. Come by yourself or bring the whole family, everyone is welcome at Fairmount & Co.
						</p>
						<div class="col-xs-12">
							<a href="about" class="btn btn_dark">Learn More</a>
						</div>
					</div>
				</div>
				<div class="divider">
					<img src="/fairmount-co/wp-content/uploads/2016/11/divider.png" alt="divider" />
				</div>

				<div class="container news-events">
					<div class="row">
						<div class="col-sm-8 news-events__block">
							<h3 class="header">News <span>&</span> Events</h3>
							<div class="row">
									<?php
										$args = array( 'numberposts' => '2', 'tax_query' => array(
												array(
													'taxonomy' => 'post_format',
													'field' => 'slug',
													'terms' => 'post-format-aside',
													'operator' => 'NOT IN'
												),
												array(
													'taxonomy' => 'post_format',
													'field' => 'slug',
													'terms' => 'post-format-image',
									 				'operator' => 'NOT IN'
												)
										) );
										$recent_posts = wp_get_recent_posts( $args );
										foreach( $recent_posts as $recent ){
											echo '<div class="col-md home-post">';
											echo '<span class="ne_header_wrapper"><h4>' . ( __($recent["post_title"])) . '</h4></span>';
											echo '<p>' . get_excerpt($recent['post_content']) . '</p>';
  										echo '<a href="' . get_permalink($recent["ID"]) . '">More Details</a>';
											echo '</div>';
										}
										echo '<div class="vertical-border"></div>';
										wp_reset_query();
									?>

								<!--
								<div class="col-md home-post">
									<h4>Lorem Isum</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
									<a href="#">More Details</a>
								</div>
								<div class="col-md home-post">
									<h4>Lorem Isum</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
									<a href="#">More Details</a>
								</div> -->



								<div class="col-xs-12 btn_wrapper">
									<a href="news-events" class="btn btn_dark">Read More Events</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4 daily-specials">
							<?php echo do_shortcode('[fdm-menu id=63]'); ?>
						</div>
					</div>
				</div>
			</section>



					<div class="owl-theme" id="homeSlide">
						<div class="item"><img src="http://localhost:8888/fairmount-co/wp-content/uploads/2016/11/2.jpg" /></div>
						<div class="item"><img src="http://localhost:8888/fairmount-co/wp-content/uploads/2016/11/1.jpg" /></div>
						<div class="item"><img src="http://localhost:8888/fairmount-co/wp-content/uploads/2016/11/3.jpg" /></div>
						<div class="item"><img src="http://localhost:8888/fairmount-co/wp-content/uploads/2016/11/vilalobos-2.jpg" /></div>
						<div class="item"><img src="http://localhost:8888/fairmount-co/wp-content/uploads/2016/11/thumb.jpg" /></div>
						<div class="item"><img src="http://localhost:8888/fairmount-co/wp-content/uploads/2016/11/2-1.jpg" /></div>
					</div>



		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			// while ( have_posts() ) : the_post();
			//
			// 	/*
			// 	 * Include the Post-Format-specific template for the content.
			// 	 * If you want to override this in a child theme, then include a file
			// 	 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			// 	 */
			// 	get_template_part( 'template-parts/content', get_post_format() );
			//
			// endwhile;

		// 	the_posts_navigation();
		//
		// else :
		//
		// 	get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
