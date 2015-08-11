<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="container home-content">
	<div class="blurb">
		<h2>Hello, I'm Derek.</h2>
		<p>I plan, design and develop stunning web interfaces using HTML, CSS, PHP, Javascript and Blah. Lorem ipsum dolor sit amet, doctus phaedrum mea et, te vis nibh atomorum mandamus. Mundi placerat et vel. Ne voluptua nominati liberavisse mel, sea pertinax.</p>
	</div>
	<div class="home-expierence">
		<div class="platform-item">
			<a href=""><i class="fa fa-shopping-cart"></i></a>
			<h4>eCommerce</h4>
			<p>Lorem ipsum dolor sit amet, doctus phaedrum mea et, te vis nibh atomorum mandamus. Mundi placerat et vel. Ne voluptua nominati liberavisse mel, sea.</p>
		</div>
		<div class="platform-item">
			<a href=""><i class="fa fa-wordpress"></i></a>
			<h4>Wordpress</h4>
			<p>Lorem ipsum dolor sit amet, doctus phaedrum mea et, te vis nibh atomorum mandamus. Mundi placerat et vel. Ne voluptua nominati liberavisse mel, sea.</p>
		</div>
		<div class="platform-item last">
			<a href=""><i class="fa fa-line-chart"></i></a>
			<h4>Marketing</h4>
			<p>Lorem ipsum dolor sit amet, doctus phaedrum mea et, te vis nibh atomorum mandamus. Mundi placerat et vel. Ne voluptua nominati liberavisse mel, sea.</p>
		</div>
	</div>
</div>

<?php get_footer(); ?>
