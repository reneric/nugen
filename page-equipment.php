<?php
/**
 * Template Name: Projects
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div id="intro" role="small">
<div class="introbg"></div>
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="summary">
	<div class="container">
		<div class="col-sm-9 content">
			<p>We Cary a full line of truck accessories including toolboxes, fuel transfer tanks, hose reels, compressors, and much more.
</p>
			<span></span>
		</div>
		<div class="col-sm-3 call">
			<div class="questions">
				<h5>Questions?</h5>
				<a href="<?php bloginfo('url') ?>/contact" class="button">Contact Us</a>
			</div>
		</div>
	</div>
</div>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="about">
			<div id="recentwork" class="row">
				<h2>View our equipment offerings</h2>
				<a href="<?php echo get_template_directory_uri(); ?>/img/bigtruck.png" title="Collaboratively customize multifunctional data through vertical networks." class="galpic col-sm-4" data-lightbox="image-1" >
					<span>Enlarge</span>
					<img src="<?php echo get_template_directory_uri(); ?>/img/abouttruck.png" alt="alt text">
					<h5>Chealsea Heavy-Duty &amp; Bolt</h5>
					<div class="gradient"></div>
				</a>
				<a href="<?php echo get_template_directory_uri(); ?>/img/bigtruck.png" title="Collaboratively customize multifunctional data through vertical networks." class="galpic col-sm-4" data-lightbox="image-2" >
					<span>Enlarge</span>
					<img src="<?php echo get_template_directory_uri(); ?>/img/abouttruck.png" alt="alt text">
					<h5>Chealsea Heavy-Duty &amp; Bolt</h5>
					<div class="gradient"></div>
				</a>
				<a href="<?php echo get_template_directory_uri(); ?>/img/bigtruck.png" title="Collaboratively customize multifunctional data through vertical networks." class="galpic col-sm-4" data-lightbox="image-2" >
					<span>Enlarge</span>
					<img src="<?php echo get_template_directory_uri(); ?>/img/abouttruck.png" alt="alt text">
					<h5>Chealsea Heavy-Duty &amp; Bolt</h5>
					<div class="gradient"></div>
				</a>
				<a href="<?php echo get_template_directory_uri(); ?>/img/bigtruck.png" title="Collaboratively customize multifunctional data through vertical networks." class="galpic col-sm-4" data-lightbox="image-4" >
					<span>Enlarge</span>
					<img src="<?php echo get_template_directory_uri(); ?>/img/abouttruck.png" alt="alt text">
					<h5>Chealsea Heavy-Duty &amp; Bolt</h5>
					<div class="gradient"></div>
				</a>
				<a href="<?php echo get_template_directory_uri(); ?>/img/bigtruck.png" title="Collaboratively customize multifunctional data through vertical networks." class="galpic col-sm-4" data-lightbox="image-5" >
					<span>Enlarge</span>
					<img src="<?php echo get_template_directory_uri(); ?>/img/abouttruck.png" alt="alt text">
					<h5>Chealsea Heavy-Duty &amp; Bolt</h5>
					<div class="gradient"></div>
				</a>
				<a href="<?php echo get_template_directory_uri(); ?>/img/bigtruck.png" title="Collaboratively customize multifunctional data through vertical networks." class="galpic col-sm-4" data-lightbox="image-6" >
					<span>Enlarge</span>
					<img src="<?php echo get_template_directory_uri(); ?>/img/abouttruck.png" alt="alt text">
					<h5>Chealsea Heavy-Duty &amp; Bolt</h5>
					<div class="gradient"></div>
				</a>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>