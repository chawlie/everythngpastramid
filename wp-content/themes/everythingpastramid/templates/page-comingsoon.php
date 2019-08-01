<?php
/**
 * Template Name: Page - Coming Soon
 */
get_header('comingsoon'); ?>

<?php while (have_posts()): the_post(); ?>
    <section class="page-section coming-soon">
        <div class="text-center">
            <div class="coming-soon-content">
                <div class="row">
                    <div class="small-12 columns text-center">
                        <div class="coming-soon-logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_url'); ?>/site/images/everything-pastramid-logo-2019.svg" alt="<?php bloginfo('name'); ?>" /></a>
                        </div>
                        <h1 class="coming-soon-headline">Texas style pastrami. Better Brine &amp; Better bark means better flavor. </h1>
                        <img class="coming-soon-hero-image" src="<?php bloginfo('template_url'); ?>/site/images/pastramid-home-hero-rib.jpg">
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 medium-12 large-4 columns text-center">
                        <div class="cs-product-container">
                            <h2 class="secondary">Beef</h2>
                            <div class="cs-product-image">
                                <img class="cow" src="<?php bloginfo('template_url'); ?>/site/images/product-cuts-beef.svg">
                            </div>
                            <div class="cs-product-list">
                                <h3 class="secondary">Pastrami'd</h3>
                                <ul>
                                    <li>Plate Short Ribs</li>
                                    <li>Chuck Short Ribs</li>
                                    <li>Brisket</li>
                                    <li>Tenderloin</li>
                                    <li>Beef Shank</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="small-12 medium-12 large-4 columns text-center">
                        <div class="cs-product-container">
                            <h2 class="secondary">Pork</h2>
                            <div class="cs-product-image">
                                <img class="pig" src="<?php bloginfo('template_url'); ?>/site/images/product-cuts-pork.svg">
                            </div>
                            <div class="cs-product-list">
                                <h3 class="secondary">Pastrami'd</h3>
                                <ul>
                                    <li>Pork Ribs</li>
                                    <li>Pork Butt</li>
                                    <li>Cushion</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="small-12 medium-12 large-4 columns text-center">
                        <div class="cs-product-container">
                            <h2 class="secondary">Poultry</h2>
                            <div class="cs-product-image">
                                <img class="chicken" src="<?php bloginfo('template_url'); ?>/site/images/product-cuts-poultry.svg">
                            </div>
                            <div class="cs-product-list">
                                <h3 class="secondary">Pastrami'd</h3>
                                <ul>
                                    <li>Chicken Wings</li>
                                    <li>Chicken Drumettes</li>
                                    <li>Turkey Legs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="banner-container">
                    <div class="angled-banner">
                        <h1>Quality Meats • Fresh Ingredients</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 medium-12 large-12 columns text-center home-slider">
                        <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
                        <div class="orbit-wrapper home-slide-gallery">
                            <div class="orbit-controls">
                              <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                              <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                            </div>
                            <ul class="orbit-container">
                              <li class="is-active orbit-slide">
                                <figure class="orbit-figure">
                                  <img class="orbit-image" src="<?php bloginfo('template_url'); ?>/site/images/pastramid-home-gallery01.jpg" alt="Everything Pastramid Ribs">
                                </figure>
                              </li>
                              <li class="orbit-slide">
                                <figure class="orbit-figure">
                                  <img class="orbit-image" src="<?php bloginfo('template_url'); ?>/site/images/pastramid-home-gallery03.jpg" alt="Everything Pastramid Brisket">
                                </figure>
                              </li>
                              <li class="orbit-slide">
                                <figure class="orbit-figure">
                                  <img class="orbit-image" src="<?php bloginfo('template_url'); ?>/site/images/pastramid-home-gallery04.jpg" alt="Everything Pastramid Brisket">
                                </figure>
                              </li>
                              <li class="orbit-slide">
                                <figure class="orbit-figure">
                                  <img class="orbit-image" src="<?php bloginfo('template_url'); ?>/site/images/pastramid-home-gallery05.jpg" alt="Everything Pastramid">
                                </figure>
                              </li>
                              <li class="orbit-slide">
                                <figure class="orbit-figure">
                                  <img class="orbit-image" src="<?php bloginfo('template_url'); ?>/site/images/pastramid-home-gallery06.jpg" alt="Pulled Pork">
                                </figure>
                              </li>
                            </ul>
                        </div>
                          <nav class="orbit-bullets">
                            <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                            <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                            <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                            <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
                            <button data-slide="4"><span class="show-for-sr">Fifth slide details.</span></button>
                          </nav>
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 medium-12 large-12 columns text-center">
                            <div class="cs-contact-container text-center">
                                <h2 class="secondary">Contact Us to Learn More</h2>
                                <div class="cs-contact-info text-center">
                                    <h3><a href="tel:15123004686" class="telephone">512-300-4686</a></h3>
                                    <h4><a href="mailto:inquiries@everythingpastramid.com ">inquiries@everythingpastramid.com</a></h4>
                                </div>
                            </div>
                            <div class="coming-soon-logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_url'); ?>/site/images/everything-pastramid-logo-2019.svg" alt="<?php bloginfo('name'); ?>" /></a>
                            </div>
                            <p class="established">Est. 2017 • Austin • Texas</p>
                            <p class="copyright">© 2018 Everything Pastramid.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer('comingsoon'); ?>
