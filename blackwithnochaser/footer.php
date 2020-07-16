<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blackwithnochaser
 */

?>

	<footer id="colophon" class="full-footer">

		<!-- FULL FOOTER -->
		<div class="footer-flexbox">

			<!-- COL WITH LOGO -->
			<div class="footer-column">
				<a href="https://blackwithnochaser.com/">
					<img src="https://placekitten.com/100/100" alt="BWNC logo" width="100" height="100"/>
				</a>
			</div>

			<!-- 3 CENTER COLS -->
			<div class="footer-center-columns">

				<!-- BLOG AND CATEGORIES -->
				<div class="footer-column">
					<h4 class="footer-headers">
						<?php
						/* translates */
						printf( esc_html__( 'Blog', 'blackwithnochaser' ));
						?>
					</h4>
					<ul class="footer-ul">
						<li class="footer-li">
							<?php
							printf( esc_html__( '%s', 'blackwithnochaser' ), '<a href="https://google.com" class="footer-a">Category 1</a>');
							?>
						</li>
						<li class="footer-li">
							<?php
							printf( esc_html__( '%s', 'blackwithnochaser' ), '<a href="https://google.com" class="footer-a">Category 2</a>');
							?>
						</li>
						<li class="footer-li">
							<?php
							printf( esc_html__( '%s', 'blackwithnochaser' ), '<a href="https://google.com" class="footer-a">Category 3</a>');
							?>
						</li>
						<li class="footer-li">
							<?php
							printf( esc_html__( '%s', 'blackwithnochaser' ), '<a href="https://google.com" class="footer-a">Category 4</a>');
							?>
						</li>
					</ul>
				</div>

				<!-- BRANDS -->
				<div class="footer-column">
					<h4 class="footer-headers">
						<?php
						printf( esc_html__( 'Brands', 'blackwithnochaser' ));
						?>
					</h4>
					<ul class="footer-ul">
						<li class="footer-li">
							<?php
							printf( esc_html__( '%s', 'blackwithnochaser' ), '<a href="https://google.com" class="footer-a">Money Talks</a>');
							?>
						</li>
						<li class="footer-li">
							<?php
							printf( esc_html__( '%s', 'blackwithnochaser' ), '<a href="https://google.com" class="footer-a">Very Fly Life</a>');
							?>
						</li>
						<li class="footer-li">
							<?php
							printf( esc_html__( '%s', 'blackwithnochaser' ), '<a href="https://google.com" class="footer-a">Advocacy and Consulting</a>');
							?>
						</li>
						<li class="footer-li">
							<?php
							printf( esc_html__( '%s', 'blackwithnochaser' ), '<a href="https://google.com" class="footer-a">+ many more</a>');
							?>
						</li>
					</ul>
				</div>

				<!-- OUR TEAM -->
				<div class="footer-column">
					<h4 class="footer-headers">
						<?php
						printf( esc_html__( 'Our Team', 'blackwithnochaser' ));
						?>
					</h4>
					<ul class="footer-ul">
						<li class="footer-li">
							<?php
							printf( esc_html__( '%s', 'blackwithnochaser' ), '<a href="https://google.com" class="footer-a">About + History</a>');
							?>
						</li>
						<li class="footer-li">
							<?php
							printf( esc_html__( '%s', 'blackwithnochaser' ), '<a href="https://google.com" class="footer-a">Team</a>');
							?>
						</li>
						<li class="footer-li">
							<?php
							printf( esc_html__( '%s', 'blackwithnochaser' ), '<a href="https://google.com" class="footer-a">Careers</a>');
							?>
						</li>
					</ul>
				</div>
			</div> <!-- END 3 CENTER COLS -->

			<!-- CONNECT COL -->
			<div class="footer-column">
				<h4 class="footer-headers">
					<?php
					/* translates */
					printf( esc_html__( 'Keep Up With Us', 'blackwithnochaser' ));
					?>
				</h4>
				<div>
					<a href="https://www.facebook.com/blackwithnochaser" target="_blank" class="fa fa-facebook"></a>
					<a href="https://twitter.com/blacknochaser" target="_blank" class="fa fa-twitter"></a>
					<a href="https://www.instagram.com/blackwithnochaser/" target="_blank" class="fa fa-instagram"></a>
					<a href="https://www.youtube.com/channel/UCMhhD71qlQVXqm2-Ph3k-dw" target="_blank" class="fa fa-youtube"></a>
				</div>
			</div>
		
		</div> <!-- .footer-flexbox END FULL FOOTER -->

		<!-- ALL RIGHTS RESERVED SECTION -->
		<div class="footer-rights">
			<?php
			printf( esc_html__( 'All rights reserved &copy;	Black With No Chaser 2020', 'blackwithnochaser' ));
			?>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
