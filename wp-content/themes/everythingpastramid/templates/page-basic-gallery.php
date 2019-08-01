<?php
/**
 * Template Name: Basic Gallery
 */
get_header(); ?>
	<?php while (have_posts()): the_post(); ?>
		<header class="page-title">
			<div class="row">
				<div class="small-12 columns">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</header>
		<main class="sub-page-content contact-page">
			<section class="basic-gallery page-section">
				<div class="row">
					<div class="columns small-12">
						<div class="page-content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<?php if( have_rows('basic_gallery') ):
							while ( have_rows('basic_gallery') ) : the_row(); ?>
								<div class="small-12 medium-3 columns">
									<div class="basic-gallery-logo">
										<img src="<?php the_sub_field('basic_gallery_logo'); ?>">
									</div>
								</div>
							<?php endwhile;
						else :
							// no rows found
					endif; ?>
				</div>
			</section>
		</main>
	<?php endwhile; ?>
<?php get_footer(); ?>
