<?php /* Template Name: Portfolio Detail Template */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="container">
		<div class="page-title">
			<h1 class="subtitle"><span>Portfolio // <?php the_title(); ?></span></h1>
		</div>
	</div>
	<div class="page-content">
		<div class="container portfolio">
			<div class="p-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-bead.jpg" alt="" />
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-bead.jpg" alt="" />
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-bead.jpg" alt="" />
			</div>
			<div class="p-info">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<hr />
				<h3>Information</h3>
				<p>While working for Groove, created a custom Magento theme for a high volume client with over 30,000 skus. Developed numerous custom features to solve many problems. While working for Groove, created a custom Magento theme for a high volume client with over 30,000 skus. Developed numerous custom features to solve many problems.</p>
								<h3>Information</h3>
				<p>While working for Groove, created a custom Magento theme for a high volume client with over 30,000 skus. Developed numerous custom features to solve many problems. While working for Groove, created a custom Magento theme for a high volume client with over 30,000 skus. Developed numerous custom features to solve many problems.</p>
								<h3>Information</h3>
				<p>While working for Groove, created a custom Magento theme for a high volume client with over 30,000 skus. Developed numerous custom features to solve many problems. While working for Groove, created a custom Magento theme for a high volume client with over 30,000 skus. Developed numerous custom features to solve many problems.</p>
			</div>
		</div>
	</div>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
