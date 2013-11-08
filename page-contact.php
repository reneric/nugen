<?php
/**
 * Template Name: Contact
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
	<div id="primary" class="content-area">
		<div id="content" class="site-content clearfix" role="contact">
			<div id="contactform" class="col-sm-6 clearfix">
				<?php gravity_form(1, $display_title=true, $display_description=true, $display_inactive=false, $field_values=null, $ajax=false, $tabindex); ?>
			</div>
			<div id="map" class="col-sm-6">
				<h1>Our Contact Info</h1>
				<div class="mapframe"></div>
				<ul class="addy">
					<li>2069 Commercial Drive</li>
					<li>Port Allen, LA 70867</li>
				</ul>
				<ul class="contact-info">
					<li class="phone">(225) 445-7536</li>
					<li class="email">sales@nu-gen.com</li>
				</ul>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>