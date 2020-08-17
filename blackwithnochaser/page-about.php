<?php
/**
 * Template Name: About
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="section-base about-frame-1">
			<div class="about-frame-1-header">
				<div class="about-frame-1-text-1">
					a solution-oriented multimedia roundtable
				</div>
				<div class="about-frame-1-text-2">
					guided by unapologetic and unfiltered minds that think Black and live Black
				</div>
			</div>
			<div class="about-frame-1-parallax-group">
				<div class="parallax-layer about-frame-1-parallax-layer-back">
					<img class="about-frame-1-image" src="http://naomid5.sg-host.com/wp-content/uploads/2020/08/prince-akachi-l3IHXOdMyHQ-unsplash-scaled.jpg" />
				</div>
			</div>
		</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
