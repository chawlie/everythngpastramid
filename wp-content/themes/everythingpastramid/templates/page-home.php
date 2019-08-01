<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<?php while (have_posts()): the_post(); ?>
    <?php get_template_part('parts/hero'); ?>
    <section class="section section-bottom">
        <?php
            $product_location = get_field('product_location');
            $product_title = get_field('product_title');
            $product_text = get_field('product_text');
            $product_image = get_field('product_image');
            $popup_text = get_field('popup_text');
            $popup_contents = get_field('popup_contents');
            $section_one_headline = get_field('section_one_headline');
            $section_one_text = get_field('section_one_text');
            $section_one_button_text = get_field('section_one_button_text');
            $section_one_button_link = get_field('section_one_button_link');
            $testimonial_headline = get_field('testimonial_headline');
            $image_subtext = get_field('image_subtext');
        ?>
        <div class="row product">
            <div class="columns small-12 medium-5">
                <div class="product-callout">
                    <h2><?= $product_location ?></h2>
                    <h1><?= $product_title ?></h1>
                    <p><?= $product_text ?></p>
                    <img src="<?php echo $product_image['url']; ?>" alt="<?php echo $product_image['alt']; ?>" class="margin-bottom-30" />
                    <a data-open="warming-instructions"><?= $popup_text ?></a>
                    <?php if($popup_contents !=''): ?>
                        <div class="small reveal" id="warming-instructions" data-reveal>
                            <?= $popup_contents ?>
                            <button class="close-button" data-close aria-label="Close modal" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="columns small-12 medium-7">
                <div class="product-description">
                    <h3><?= $section_one_headline ?> </h3>
                    <p><?= $section_one_text ?></p>
                    <?php if($section_one_button_text !=''): ?>
                        <a href="<?= $section_one_button_link ?>" class="btn"><?= $section_one_button_text ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php if($testimonial_headline !=''): ?>
    <section class="section section-bottom">
        <div class="row">
            <div class="reviews-home text-center">
                <h3><?= $testimonial_headline ?></h3>
            </div>
            <div class="orbit" role="region" aria-label="Reviews" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                <div class="orbit-wrapper">
                    <div class="orbit-controls">
                        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                    </div>
                    <ul class="orbit-container">
                       <?php if( have_rows('testimonial') ):
                            while ( have_rows('testimonial') ) : the_row(); ?>
                                <li class="orbit-slide">
                                    <div class="testimonial text-center">
                                        <div class="testimonial-body">
                                            <p><?php the_sub_field('testimonial_text'); ?></p>
                                        </div>
                                        <div class="testimonial-details">
                                            <h4><?php the_sub_field('testimonial_full_name'); ?></h4>
                                            <p><?php the_sub_field('testimonial_location'); ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile;
                            else :
                                // no rows found
                        endif; ?>
                    </ul>
                </div>
                <nav class="orbit-bullets">
                    <?php $counter = -1; ?>
                    <?php if( have_rows('testimonial') ): while ( have_rows('testimonial') ) : the_row(); ?>
                    <?php $counter++; ?>
                    <button data-slide="<?= $counter?>"><span class="show-for-sr">Second slide details.</span></button>
                    <?php endwhile; else : endif; ?>
                </nav>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section>
        <div class="row full-width home-images-container">
            <div class="columns small-12 medium-6">
                <img src="<?php bloginfo('template_url'); ?>/site/images/beefribs-split.jpg" alt="">
                <div class="img-text-banner"><?= $image_subtext ?></div>
            </div>
            <div class="columns small-12 medium-6 butcher-knives">
                <img src="<?php bloginfo('template_url'); ?>/site/images/butcher-knives.svg" alt="">
            </div>
        </div>
    </section>
<?php endwhile; ?>

<?php get_footer(); ?>
