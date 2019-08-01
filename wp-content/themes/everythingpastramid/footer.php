        <div class="footer-background">
        <footer class="site-footer">
            <div class="row">
                <div class="columns small-12 large-8">
                    <div class="footer-text">
                        <span class="copyright">©Copyright <?php echo date('Y'); ?> Everything Pastrami'd.</span>
                    </div>
                </div>

                <div class="columns small-12 large-4">
                    <div class="footer-right">
                        <div class="copyright text-center">
                            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="button">Contact Us</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div><!-- Closing tag for page-wrapper -->

    <!-- Include analytics -->
    <?php get_template_part('analytics'); ?>

    <?php wp_footer(); ?>
    <script src="<?php bloginfo('template_directory'); ?>/site/js/app.js"></script>
</body>
</html>
