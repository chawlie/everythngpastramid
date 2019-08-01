<section class="hero page-section">
        <?php
            $headline = get_field('headline');
            $hero_image = get_field('hero_image');
        ?>
        <?php if($hero_image !=''): ?>
            <div class="hero-image" style="background-image: url(<?php the_field('hero_image'); ?>)">
                <div class="hero-overlay">
                    <div class="row">
                        <div class="columns small-12">
                            <h1><?= $headline ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
</section>
