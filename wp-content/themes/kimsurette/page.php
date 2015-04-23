<?php


get_header(); ?>
<div class="page-posts">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="container">
					<div class="row">
						<div class="col-8">
							<div class="title-container">
								<div class="page-title">
									<?php the_title( $echo ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="content-container"><?php get_template_part( 'content', 'page' ); ?>
				<div class="gallery"><?php 

					$image = get_field('gallery');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
					</div>
				<?php the_field('project_description'); ?>
				</div>




			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
		</div>


<?php get_footer(); ?>
 