<?php
/**
 * Template Name: Recipes
 */
get_header(); ?>
	<?php while (have_posts()): the_post(); ?>
		<?php get_template_part('parts/hero'); ?>
		<section class="section section-bottom">
	        <div class="row">
		        <?php if( have_rows('recipes') ):
					    while ( have_rows('recipes') ) : the_row(); ?>
					        <div class="small-12 medium-8 medium-push-2 columns">
						        <div class="recipe-container">
							        <h3><?php the_sub_field('recipe_name'); ?></h3>
							        <p><?php the_sub_field('recipe_content'); ?></p>
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
