<?php /* Template Name: Portfolio Template */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="container">
		<div class="page-title">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="page-content">
		<div class="container portfolio">
			<div class="p-item">
				<div class="p-side">
					&nbsp;
				</div>
				<div class="p-image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-bead.jpg" alt="" />
				</div>
							<div class="p-side">
				&nbsp;
			</div>
				<div class="p-info">
					<h2>Beadaholique</h2>
					<p>While working for Groove, created a custom Magento theme for a high volume client with over 30,000 skus. Developed numerous custom features to solve many problems.</p>
					<h3>- Highlights</h3>
					<ul>
						<li>Created video product type using Youtube ID</li>
						<li>Leveraged bundeled product type to sell project product</li>
						<li>Mapped data architecture</li>
					</ul>
					<h3>- Roles</h3>
					<ul>
						<li>Front End Developer on project</li>
					</ul>
				</div>
			<div class="p-side last">
				&nbsp;
			</div>
			</div>
		</div>
	</div>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
