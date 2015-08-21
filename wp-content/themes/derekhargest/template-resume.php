<?php /* Template Name: Resume Template */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="container">
		<div class="page-title">
			<h1 class="subtitle"><span><?php the_title(); ?></span></h1>
		</div>
	</div>
	<div class="page-content">
		<div class="container resume">
		</div>
	</div>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>
