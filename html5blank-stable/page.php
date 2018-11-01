<?php /* Template Name: Content_Page_TemplateV1 */ ?>

<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		
	

		<section>

		<div class="page_heading">
			<div class="title_image">
				<?php
							if ( has_post_thumbnail()) {
							$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
							echo '<href="' . $full_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
							the_post_thumbnail('full');
							echo '';
							}
							?>
			</div>
 
 

			<h1 class="title"><?php the_title(); ?></h1>
			
		</div>
		
	<div class="clear"></div>
		
	<div class="page_content">
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
	
<?php get_sidebar('central'); ?>
<?php get_sidebar(); ?>

<div class="clear"></div>

<?php get_footer(); ?>
