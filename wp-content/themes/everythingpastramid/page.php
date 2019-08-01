<?php get_header(); ?>
	<?php while (have_posts()): the_post(); ?>
		<?php get_template_part('parts/hero'); ?>
			<section class="section section-bottom">
				<div class="row">
					<!-- BEGIN .content -->
					<div class="page-content columns small-12 medium-10 medium-push-1">
						<?php the_content(); ?>
					</div>
				</div>
			</section>
	<?php endwhile; ?>
<?php get_footer(); ?>
