
        </main>
        <div class="footer" style="background-color: #2e2b2b;">
            <p><?php echo the_copyright() ?></p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#"> <i class="icon-up-open"></i> </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
        <![endif]-->
        <?php wp_footer(); ?>
    </body>
</html>
