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
<?php page_summary(); ?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="about">
			<div id="recentwork" class="row">
				<h2>View our equipment offerings</h2>
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