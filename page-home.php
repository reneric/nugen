<?php
/**
 * Template Name: Home
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
<div id="intro" role="large">
<div class="introbg"></div>
	<div class="flexslider">
		<ul class="slides">
			<li style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/truck.png');">
				<div class="container">
					<div class="caption col-md-7 col-md-offset-5">
						<p>The truck stop <span>you don&apos;t</span> want to pass up</p>
						<a href="#" class="button">Contact us today!</a>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="home">
			<div class="row">
				<div class="col-sm-4 welcome">
					<p><?php the_field("welcome_text"); ?></p>
					<span></span>
				</div>
				<a class="col-sm-4 services" href="<?php bloginfo('url'); ?>/servicespackages" title="View our services &amp; packages">
					<img src="<?php echo get_template_directory_uri(); ?>/img/services.png" alt="alt text">
					<h1>View Our Services &amp; Packages</h1>
				</a>
				<a class="col-sm-4 recentwork" href="<?php bloginfo('url'); ?>/projects" title="View our recent work">
					<span class="featured"></span>
					<img src="<?php echo get_template_directory_uri(); ?>/img/recentwork.png" alt="alt text">
					<h1>View Our Recent Work</h1>
				</a>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>