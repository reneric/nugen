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
	<?php if(get_field('slider')): ?>
		<ul class="slides">
		<?php while(has_sub_field('slider')): ?>
			<li style="background-image:url(<?php the_sub_field('image'); ?>);">
				<div class="container"> 
					<div class="caption col-md-7 col-md-offset-5">
						<p><?php the_sub_field('caption'); ?></p>
						<a href="<?php the_sub_field('button_link'); ?>" class="button"><?php the_sub_field('button_text'); ?></a>
					</div>
				</div>
			</li>
		<?php endwhile; ?>
		</ul>
	<?php endif; ?>
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