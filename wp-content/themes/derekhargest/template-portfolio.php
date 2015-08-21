<?php /* Template Name: Portfolio Template */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="container">
		<div class="page-title">
			<h1 class="subtitle"><span><?php the_title(); ?></span></h1>
		</div>
	</div>
	
	<div class="page-content">
		
				
		<div class="container portfolio grid">
			<?php
			$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 6);
			$posts_array = get_posts( $args );
		?>

		<?php if ( $posts_array ): ?>
			<?php foreach ($posts_array as $post): ?>
				<div class="grid-item">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo get_field( "main_thumbnail" ); ?>" />
							<div class="grid-overlay">
								<div class="overlay-content">
									<i class="fa <?php echo get_field( "fa_icon" ); ?>"></i>
									<h3><?php the_title(); ?></h3>
									<p>Something</p>
								</div>
							</div>
						</a>
					</div>
				
			<?php endforeach; ?>
		
		<?php wp_reset_postdata(); ?>
		
		<?php endif; ?>

		</div>
	</div>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
