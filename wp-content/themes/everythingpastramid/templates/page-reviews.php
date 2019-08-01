<?php
/**
 * Template Name: Reviews
 */
get_header(); ?>
	<?php while (have_posts()): the_post(); ?>
		<?php get_template_part('parts/hero'); ?>
		<section class="section">
			<div class="row">
				<!-- BEGIN .content -->
				<div class="page-content columns small-12 medium-10 medium-push-1">
					<?php the_content(); ?>
				</div>
			</div>
		</section>

		<section class="section section-bottom text-center">
	        <div class="row">
		        <?php if( have_rows('reviews') ):
					    while ( have_rows('reviews') ) : the_row(); ?>
					        <div class="small-12 medium-8 medium-push-2 columns">
						        <div class="testimonial border-top">
							        <div class="testimonial-body">
								        <p><?php the_sub_field('testimonial'); ?></p>
								    </div>
							        <div class="testimonial-details">
								        <h4><?php the_sub_field('full_name'); ?></h4>
								        <p><?php the_sub_field('location'); ?></p>
								    </div>
								</div>
							</div>
					    <?php endwhile;
					else :
					    // no rows found
				endif; ?>
			</div>
		</section>
	<?php endwhile; ?>
<?php get_footer(); ?>
