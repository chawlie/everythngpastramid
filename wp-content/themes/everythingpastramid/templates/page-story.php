<?php
/**
 * Template Name: The Story
 */
get_header(); ?>
	<?php while (have_posts()): the_post(); ?>
		<?php get_template_part('parts/hero'); ?>
		<section class="section section-bottom">
			<div class="row">
				<div class="columns small-12 medium-8 medium-push-2">
					<?php the_content(); ?>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php get_footer(); ?>
