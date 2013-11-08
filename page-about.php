<?php
/**
 * Template Name: About
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
			<p>We provide a new generation of design and durable products to the oil field and heavy haul trucking industry. </p>
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
			<div id="about" class="clearfix">
				<div class="text col-sm-7">
					<p>Nu-Gen Services and Rentals LLC, is located in Port Allen, Louisiana, and was founded in 2012 by Ryan Mitchell and Wade Svendson. We provide a new generation of design and durable products to the oil field and heavy haul trucking industry. Our main goal as a company is to provide extraordinary customer service and product reliability before and after the sale. </p>
					<a href="<?php bloginfo('url') ?>/servicespackages" class="button">View Our Services</a>
				</div>
				<div class="builtby col-sm-5">
					<img src="<?php echo get_template_directory_uri(); ?>/img/builtby.png" alt="Built by Nu-Gen">
				</div>
			</div>
			<div id="recentwork" class="row">
				<h2>Some of our recent work</h2>
				<?php $args = array ( 'post_type' => "projects", 'posts_per_page' => 6 );
				$custom_query = new WP_Query( $args );
				if ( $custom_query->have_posts() ):
				   	while ( $custom_query->have_posts() ) : $custom_query->the_post();
				   	$thumb = wp_get_attachment_image_src( get_field('photo'),false);
				 ?>
					    <a href="<?php echo $thumb[0]; ?>" title="Collaboratively customize multifunctional data through vertical networks." class="galpic col-sm-4" data-lightbox="image-1" >
						<span>Enlarge</span>
						<?php echo wp_get_attachment_image( get_field('photo'), 'project' , false); ?>
						<h5><?php the_title(); ?></h5>
						<div class="gradient"></div>
					</a>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>