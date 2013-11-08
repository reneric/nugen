<?php
/**
 * Template Name: Packages
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
		<div id="content" class="site-content" role="packages">
			<div id="packages" class="clearfix">
				<div class="col-sm-6 column">
				<?php if(get_field('packages')): ?>
					<?php 	$count = count(get_field('packages')); 
						$i=1;
						$half = $count/2;
					?>
					<?php while(has_sub_field('packages')): ?>
					<div class="package">
						<h4><?php the_sub_field("package_name"); ?></h4>
						<?php the_sub_field('package_list'); ?>
					</div>
					<?php 
						echo $column = ($i==round($half)) ? '</div><div class="col-sm-6 column">' : '';
					 ?>
					<?php $i++;endwhile;endif; ?>
				</div><!-- column -->
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>