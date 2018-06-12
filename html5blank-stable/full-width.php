<?php /* Template Name: Full-width_Template */ ?>

<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		
	

		<section>

		<div class="page_heading">
				
				<?php
				if ( has_post_thumbnail()) {
				$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
				echo '<a href="' . $full_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
				the_post_thumbnail('full');
				echo '</a>';
				}
				?>
 

					<h1><?php the_title(); ?></h1>
			
		</div>
		
			<div class="full-width_wrapper">
		
	
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); ?>

			

						<br class="clear">

				<?php edit_post_link(); ?>

				</article>
				<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

			</div>
		</section>
		
			
		<!-- /section -->
	</main>



<div class="clear"></div>

<?php get_footer(); ?>