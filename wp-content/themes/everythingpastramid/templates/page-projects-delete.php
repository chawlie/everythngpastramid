<?php
/**
 * Template Name: Project Portfolio
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
			<?php
  $args = array(
    'post_type' => 'project-portfolio',
    'post_status' => 'publish',
    'posts_per_page' => '10'
  );
  $products_loop = new WP_Query( $args );
  if ( $products_loop->have_posts() ) :
    while ( $products_loop->have_posts() ) : $products_loop->the_post();
      // Set variables
      $title = get_the_title();
      $description = get_the_content();
      $download = get_field(‘download’);
      $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
      $product_image1 = $featured_image[0];
      $product_image2 = get_field(‘product_image’);
      // Output
      ?>
      <div class=”product”>
        <img src=”<?php echo $product_image1;  ?>” alt=”<?php echo $title; ?>”>
        <h2><?php echo $title; ?></h2>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <img src=”<?php echo $product_image1;  ?>” alt=”product-detail” class=”product-detail align-right”>
        <?php echo $description; ?>
        <p><a href=”<?php echo $download; ?>” target=”_blank” name=”Spec Sheet”>Download Spec Sheet</a></p>
      </div>
      <?php
      endwhile;
    wp_reset_postdata();
  endif; ?>
		</main>
	<?php endwhile; ?>
<?php get_footer(); ?>
