<?php
/**
 * Template Name: The Process
 */
get_header(); ?>
	<?php while (have_posts()): the_post(); ?>
		<?php get_template_part('parts/hero'); ?>
			<section class="section">
				<div class="row">
					<div class="columns small-12 medium-8 medium-push-2">
						<?php the_content(); ?>
					</div>
				</div>
			</section>
			<!-- <section class="section">
		        <div class="row text-center">
		            <div class="columns small-12 medium-8 medium-push-2">
		                <img src="<?php bloginfo('template_url'); ?>/site/images/meats-slider.jpg" alt="">
		            </div>
		        </div>
		    </section> -->
			<section class="section">
				<div class="row">
					<div class="text-center">
						<h2>Products in Production</h2>
					</div>
					<div class="columns small-12 medium-4">
						<div class="meat-type-container">
							<h3>Pastrami’d</h3>
							<div class="meat-type">
								<h4>Beef</h4>
							</div>
							<div class="meat-cuts">
								<ul>
									<li>Plate Short Ribs</li>
									<li>Chuck Short Ribs</li>
									<li>Brisket</li>
									<li>Beef Shank</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="columns small-12 medium-4">
						<div class="meat-type-container">
							<h3>Pastrami’d</h3>
							<div class="meat-type">
								<h4>Pork</h4>
							</div>
							<div class="meat-cuts">
								<ul>
									<li>Ribs</li>
									<li>Butt</li>
									<li>Cushion</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="columns small-12 medium-4">
						<div class="meat-type-container">
							<h3>Pastrami’d</h3>
							<div class="meat-type">
								<h4>Poultry</h4>
							</div>
							<div class="meat-cuts">
								<ul>
									<li>Chicken Wings</li>
									<li>Chick Drumettes</li>
									<li>Turkey Legs</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section section-bottom">
				<div class="row">
					<div class="columns small-12 medium-10 medium-push-1 text-center">
						<h2> If you are on the hunt for great barbecue that is uniquely delicious, please give us a try!</h2>
						<a href="contact-us/" class="btn">CONTACT US</a>
					</div>
				</div>
			</section>
	<?php endwhile; ?>
<?php get_footer(); ?>
