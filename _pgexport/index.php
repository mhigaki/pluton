<?php
get_header(); ?>

<div id="home">
    <!-- Start cSlider -->
    <div id="da-slider" class="da-slider">
        <div class="triangle"></div>
        <!-- mask elemet use for masking background image -->
        <div class="mask"></div>
        <!-- All slides centred in container element -->
        <div class="container">
            <!-- Start first slide -->
            <?php if ( get_theme_mod( 'page_slider_01' ) ) : ?>
                <?php
                    $page_slider_01_query_args = array(
                      'page_id' => get_theme_mod('page_slider_01'),
                      'posts_per_page' => '1'
                    )
                ?>
                <?php $page_slider_01_query = new WP_Query( $page_slider_01_query_args ); ?>
                <?php if ( $page_slider_01_query->have_posts() ) : ?>
                    <?php while ( $page_slider_01_query->have_posts() ) : $page_slider_01_query->the_post(); ?>
                        <div class="da-slide">
                            <h2 class="fittext2"><?php the_title(); ?></h2>
                            <h4><?php _e( 'Clean & responsive', 'pluton' ); ?></h4>
                            <?php the_content(); ?>
                            <a href="<?php echo get_theme_mod( '01_slide_link', '#' ); ?>" class="da-link button"><?php echo get_theme_mod( '01_slide_text', __( 'Read more', 'pluton' ) ); ?></a>
                            <div class="da-img">
                                <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'normal' );
                                    }
                                 ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            <?php endif; ?>
            <!-- End first slide -->
            <!-- Start second slide -->
            <?php if ( get_theme_mod( 'page_slider_02' ) ) : ?>
                <?php
                    $page_slider_02_query_args = array(
                      'page_id' => get_theme_mod('page_slider_02'),
                      'posts_per_page' => '1'
                    )
                ?>
                <?php $page_slider_02_query = new WP_Query( $page_slider_02_query_args ); ?>
                <?php if ( $page_slider_02_query->have_posts() ) : ?>
                    <?php while ( $page_slider_02_query->have_posts() ) : $page_slider_02_query->the_post(); ?>
                        <div class="da-slide">
                            <h2><?php the_title(); ?></h2>
                            <h4><?php _e( 'Easy to use', 'pluton' ); ?></h4>
                            <?php the_content(); ?>
                            <a href="<?php echo get_theme_mod( '02_slide_link', '#' ); ?>" class="da-link button"><?php echo get_theme_mod( '02_slide_text', __( 'Read more', 'pluton' ) ); ?></a>
                            <div class="da-img">
                                <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'normal' );
                                    }
                                 ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            <?php endif; ?>
            <!-- End second slide -->
            <!-- Start third slide -->
            <?php if ( get_theme_mod( 'page_slider_03' ) ) : ?>
                <?php
                    $page_slider_03_query_args = array(
                      'page_id' => get_theme_mod('page_slider_03'),
                      'posts_per_page' => '1'
                    )
                ?>
                <?php $page_slider_03_query = new WP_Query( $page_slider_03_query_args ); ?>
                <?php if ( $page_slider_03_query->have_posts() ) : ?>
                    <?php while ( $page_slider_03_query->have_posts() ) : $page_slider_03_query->the_post(); ?>
                        <div class="da-slide">
                            <h2><?php _e( 'Revolution', 'pluton' ); ?></h2>
                            <h4><?php _e( 'Customizable', 'pluton' ); ?></h4>
                            <p><?php _e( 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.', 'pluton' ); ?></p>
                            <a href="#" class="da-link button"><?php _e( 'Read more', 'pluton' ); ?></a>
                            <div class="da-img">
                                <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'normal' );
                                    }
                                 ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            <?php endif; ?>
            <!-- Start third slide -->
            <!-- Start cSlide navigation arrows -->
            <div class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>
            </div>
            <!-- End cSlide navigation arrows -->
        </div>
    </div>
</div>
<?php if ( get_theme_mod( 'sct_service_p' ) ) : ?>
    <?php
        $sct_service_p_query_args = array(
          'page_id' => get_theme_mod('sct_service_p'),
          'posts_per_page' => '1'
        )
    ?>
    <?php $sct_service_p_query = new WP_Query( $sct_service_p_query_args ); ?>
    <?php if ( $sct_service_p_query->have_posts() ) : ?>
        <?php while ( $sct_service_p_query->have_posts() ) : $sct_service_p_query->the_post(); ?>
            <div class="primary-section section" id="service">
                <div class="container">
                    <!-- Start title section -->
                    <div class="title">
                        <h1><?php the_title(); ?></h1>
                        <!-- Section's title goes here -->
                        <p><?php the_content(); ?></p>
                        <!--Simple description for section goes here. -->
                    </div>
                    <div class="row-fluid">
                        <?php
                            $service_args = array(
                              'post_type' => 'service',
                              'posts_per_page' => '3',
                              'order' => 'ASC',
                              'orderby' => 'rand'
                            )
                        ?>
                        <?php $service = new WP_Query( $service_args ); ?>
                        <?php if ( $service->have_posts() ) : ?>
                            <?php while ( $service->have_posts() ) : $service->the_post(); ?>
                                <div <?php post_class( 'span4' ); ?> id="post-<?php the_ID(); ?>">
                                    <div class="centered service">
                                        <div class="circle-border zoom-in">
                                            <?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( 'normal', array(
                                                  'class' => 'img-circle'
                                                ) );
                                                }
                                             ?>
                                        </div>
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'pluton' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
<?php endif; ?>
<?php if ( get_theme_mod( 'sct_portfolio_p' ) ) : ?>
    <?php
        $sct_portfolio_p_query_args = array(
          'page_id' => get_theme_mod('sct_portfolio_p'),
          'posts_per_page' => '1'
        )
    ?>
    <?php $sct_portfolio_p_query = new WP_Query( $sct_portfolio_p_query_args ); ?>
    <?php if ( $sct_portfolio_p_query->have_posts() ) : ?>
        <?php while ( $sct_portfolio_p_query->have_posts() ) : $sct_portfolio_p_query->the_post(); ?>
            <div class="section secondary-section " id="portfolio">
                <div class="triangle"></div>
                <div class="container">
                    <div class=" title">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                    </div>
                    <!-- Start details for portfolio project 1 -->
                    <ul class="nav nav-pills">
                        <li class="filter" data-filter="all">
                            <a href="#noAction"><?php _e( 'All', 'pluton' ); ?></a>
                        </li>
                        <li class="filter" data-filter="web">
                            <a href="#noAction"><?php _e( 'Web', 'pluton' ); ?></a>
                        </li>
                    </ul>
                    <div id="single-project">
                        <?php if ( have_posts() ) : ?>
                            <?php $item_number = 0; ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div id="<?php echo 'slidingDiv'.$item_number ?>" class="toggleDiv row-fluid single-project<?php if( $item_number == 0) echo ' first'; ?>">
                                    <div class="span6">
                                        <?php
                                            if ( has_post_thumbnail() ) {
                                                the_post_thumbnail( 'normal' );
                                            }
                                         ?>
                                    </div>
                                    <div class="span6">
                                        <div class="project-description">
                                            <div class="project-title clearfix">
                                                <h3><?php the_title(); ?></h3>
                                                <span class="show_hide close"> <i class="icon-cancel"></i> </span>
                                            </div>
                                            <div class="project-info">
                                                <div>
                                                    <span><?php _e( 'Client', 'pluton' ); ?></span>
                                                    <?php _e( 'Some Client Name', 'pluton' ); ?>
                                                </div>
                                                <div>
                                                    <span><?php _e( 'Date', 'pluton' ); ?></span>
                                                    <?php _e( 'July 2013', 'pluton' ); ?>
                                                </div>
                                                <div>
                                                    <span><?php _e( 'Skills', 'pluton' ); ?></span>
                                                    <?php _e( 'HTML5, CSS3, JavaScript', 'pluton' ); ?>
                                                </div>
                                                <div>
                                                    <span><?php _e( 'Link', 'pluton' ); ?></span>
                                                    <?php _e( 'http://examplecomp.com', 'pluton' ); ?>
                                                </div>
                                            </div>
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php $item_number++; ?>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'pluton' ); ?></p>
                        <?php endif; ?>
                        <!-- End details for portfolio project 1 -->
                        <!-- Start details for portfolio project 2 -->
                        <!-- End details for portfolio project 2 -->
                        <!-- Start details for portfolio project 3 -->
                        <!-- End details for portfolio project 3 -->
                        <!-- Start details for portfolio project 4 -->
                        <!-- End details for portfolio project 4 -->
                        <!-- Start details for portfolio project 5 -->
                        <!-- End details for portfolio project 5 -->
                        <!-- Start details for portfolio project 6 -->
                        <!-- End details for portfolio project 6 -->
                        <!-- Start details for portfolio project 7 -->
                        <!-- End details for portfolio project 7 -->
                        <!-- Start details for portfolio project 8 -->
                        <!-- End details for portfolio project 8 -->
                        <!-- Start details for portfolio project 9 -->
                        <!-- End details for portfolio project 9 -->
                        <ul id="portfolio-grid" class="thumbnails row">
                            <?php if ( have_posts() ) : ?>
                                <?php $item_number = 0; ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <li class="span4 mix web<?php if( $item_number == 0) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">
                                        <div class="thumbnail">
                                            <?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( 'normal' );
                                                }
                                             ?>
                                            <a href="#single-project" class="more show_hide" rel="<?php echo '#slidingDiv'.$item_number ?>"> <i class="icon-plus"></i> </a>
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php _e( 'Thumbnail caption...', 'pluton' ); ?></p>
                                            <div class="mask"></div>
                                        </div>
                                    </li>
                                    <?php $item_number++; ?>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.', 'pluton' ); ?></p>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
<?php endif; ?>
<div class="section primary-section" id="about">
    <div class="triangle"></div>
    <div class="container">
        <?php if ( get_theme_mod( 'sct_team_p' ) ) : ?>
            <?php
                $sct_team_p_query_args = array(
                  'page_id' => get_theme_mod('sct_team_p'),
                  'posts_per_page' => '1'
                )
            ?>
            <?php $sct_team_p_query = new WP_Query( $sct_team_p_query_args ); ?>
            <?php if ( $sct_team_p_query->have_posts() ) : ?>
                <?php while ( $sct_team_p_query->have_posts() ) : $sct_team_p_query->the_post(); ?>
                    <div class="title">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        <?php endif; ?>
        <div class="row-fluid team">
            <?php
                $my_team_args = array(
                  'post_type' => 'my_team',
                  'post_status' => 'publish',
                  'posts_per_page' => '3',
                  'order' => 'ASC',
                  'orderby' => 'name'
                )
            ?>
            <?php $my_team = new WP_Query( $my_team_args ); ?>
            <?php if ( $my_team->have_posts() ) : ?>
                <?php $my_team_item_number = 0; ?>
                <?php while ( $my_team->have_posts() ) : $my_team->the_post(); ?>
                    <div class="span4<?php if( $my_team_item_number == 0) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">
                        <div class="thumbnail">
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'normal' );
                                }
                             ?>
                            <h3><?php the_title(); ?></h3>
                            <ul class="social">
                                <li>
                                    <a href="<?php echo esc_url( get_field( 'facebook' ) ); ?>"> <span class="icon-facebook-circled"></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( get_field( 'twitter' ) ); ?>"> <span class="icon-twitter-circled"></span> </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( get_field( 'linkedin' ) ); ?>"> <span class="icon-linkedin-circled"></span> </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2><?php echo get_field( 'job_title' ); ?></h2>
                                <p><?php echo get_field( 'professional_summary' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $my_team_item_number++; ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'pluton' ); ?></p>
            <?php endif; ?>
        </div>
        <?php if ( get_theme_mod( 'sct_about_p' ) ) : ?>
            <?php
                $sct_about_p_query_args = array(
                  'page_id' => get_theme_mod('sct_about_p'),
                  'posts_per_page' => '1'
                )
            ?>
            <?php $sct_about_p_query = new WP_Query( $sct_about_p_query_args ); ?>
            <?php if ( $sct_about_p_query->have_posts() ) : ?>
                <?php while ( $sct_about_p_query->have_posts() ) : $sct_about_p_query->the_post(); ?>
                    <div class="about-text centered">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        <?php endif; ?>
        <h3><?php _e( 'Skills', 'pluton' ); ?></h3>
        <div class="row-fluid">
            <div class="span6">
                <ul class="skills">
                    <li>
                        <span class="bar" data-width="80%"></span>
                        <h3><?php _e( 'Graphic Design', 'pluton' ); ?></h3>
                    </li>
                    <li>
                        <span class="bar" data-width="95%"></span>
                        <h3><?php _e( 'Html & Css', 'pluton' ); ?></h3>
                    </li>
                    <li>
                        <span class="bar" data-width="68%"></span>
                        <h3><?php _e( 'jQuery', 'pluton' ); ?></h3>
                    </li>
                    <li>
                        <span class="bar" data-width="70%"></span>
                        <h3><?php _e( 'Wordpress', 'pluton' ); ?></h3>
                    </li>
                </ul>
            </div>
            <div class="span6">
                <div class="highlighted-box center">
                    <h1><?php _e( 'We\'re Hiring', 'pluton' ); ?></h1>
                    <p><?php _e( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, ullamcorper suscipit lobortis nisl ut aliquip consequat. I learned that we can do anything, but we can\'t do everything...', 'pluton' ); ?></p>
                    <button class="button button-sp">
                        <?php _e( 'Join Us', 'pluton' ); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section secondary-section">
    <div class="triangle"></div>
    <div class="container centered">
        <p class="large-text"><?php _e( 'Elegance is not the abundance of simplicity. It is the absence of complexity.', 'pluton' ); ?></p>
        <a href="#" class="button"><?php _e( 'Purshase now', 'pluton' ); ?></a>
    </div>
</div>
<?php if ( get_theme_mod( 'sct_testemonial_p' ) ) : ?>
    <?php
        $sct_testemonial_p_query_args = array(
          'page_id' => get_theme_mod('sct_testemonial_p'),
          'posts_per_page' => '1'
        )
    ?>
    <?php $sct_testemonial_p_query = new WP_Query( $sct_testemonial_p_query_args ); ?>
    <?php if ( $sct_testemonial_p_query->have_posts() ) : ?>
        <?php while ( $sct_testemonial_p_query->have_posts() ) : $sct_testemonial_p_query->the_post(); ?>
            <div id="clients">
                <div class="section primary-section">
                    <div class="triangle"></div>
                    <div class="container">
                        <div class="title">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
                        </div>
                        <div class="row">
                            <div class="span4">
                                <div class="testimonial">
                                    <p><?php _e( '"I\'ve worked too hard and too long to let anything stand in the way of my goals. I will not let my teammates down and I will not let myself down."', 'pluton' ); ?></p>
                                    <div class="whopic">
                                        <div class="arrow"></div>
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Client1.png" class="centered" alt="client 1">
                                        <strong><?php _e( 'John Doe', 'pluton' ); ?> <small><?php _e( 'Client', 'pluton' ); ?></small> </strong>
                                    </div>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="testimonial">
                                    <p><?php _e( '"In motivating people, you\'ve got to engage their minds and their hearts. I motivate people, I hope, by example - and perhaps by excitement, by having productive ideas to make others feel involved."', 'pluton' ); ?></p>
                                    <div class="whopic">
                                        <div class="arrow"></div>
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Client2.png" class="centered" alt="client 2">
                                        <strong><?php _e( 'John Doe', 'pluton' ); ?> <small><?php _e( 'Client', 'pluton' ); ?></small> </strong>
                                    </div>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="testimonial">
                                    <p><?php _e( '"Determine never to be idle. No person will have occasion to complain of the want of time who never loses any. It is wonderful how much may be done if we are always doing."', 'pluton' ); ?></p>
                                    <div class="whopic">
                                        <div class="arrow"></div>
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Client3.png" class="centered" alt="client 3">
                                        <strong><?php _e( 'John Doe', 'pluton' ); ?> <small><?php _e( 'Client', 'pluton' ); ?></small> </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="testimonial-text"><?php the_excerpt( ); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
<?php endif; ?>
<div class="section third-section">
    <div class="container centered">
        <div class="sub-section">
            <div class="title clearfix">
                <div class="pull-left">
                    <h3><?php _e( 'Our Clients', 'pluton' ); ?></h3>
                </div>
                <ul class="client-nav pull-right">
                    <li id="client-prev"></li>
                    <li id="client-next"></li>
                </ul>
            </div>
            <ul class="row client-slider" id="clint-slider">
                <li>
                    <a href="">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/clients/ClientLogo01.png" alt="client logo 1">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/clients/ClientLogo02.png" alt="client logo 2">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/clients/ClientLogo03.png" alt="client logo 3">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/clients/ClientLogo04.png" alt="client logo 4">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/clients/ClientLogo05.png" alt="client logo 5">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/clients/ClientLogo02.png" alt="client logo 6">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/clients/ClientLogo04.png" alt="client logo 7">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php if ( get_theme_mod( 'sct_price_p' ) ) : ?>
    <?php
        $sct_price_p_query_args = array(
          'page_id' => get_theme_mod('sct_price_p'),
          'posts_per_page' => '1'
        )
    ?>
    <?php $sct_price_p_query = new WP_Query( $sct_price_p_query_args ); ?>
    <?php if ( $sct_price_p_query->have_posts() ) : ?>
        <?php while ( $sct_price_p_query->have_posts() ) : $sct_price_p_query->the_post(); ?>
            <div id="price" class="section secondary-section">
                <div class="container">
                    <div class="title">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                    </div>
                    <div class="price-table row-fluid">
                        <div class="span4 price-column">
                            <h3><?php _e( 'Basic', 'pluton' ); ?></h3>
                            <ul class="list">
                                <li class="price">
                                    <?php _e( '$19,99', 'pluton' ); ?>
                                </li>
                                <li>
                                    <strong><?php _e( 'Free', 'pluton' ); ?></strong> 
                                    <?php _e( 'Setup', 'pluton' ); ?>
                                </li>
                                <li>
                                    <strong><?php _e( '24/7', 'pluton' ); ?></strong> 
                                    <?php _e( 'Support', 'pluton' ); ?>
                                </li>
                                <li>
                                    <strong><?php _e( '5 GB', 'pluton' ); ?></strong> 
                                    <?php _e( 'File Storage', 'pluton' ); ?>
                                </li>
                            </ul>
                            <a href="#" class="button button-ps"><?php _e( 'BUY', 'pluton' ); ?></a>
                        </div>
                        <div class="span4 price-column">
                            <h3><?php _e( 'Pro', 'pluton' ); ?></h3>
                            <ul class="list">
                                <li class="price">
                                    <?php _e( '$39,99', 'pluton' ); ?>
                                </li>
                                <li>
                                    <strong><?php _e( 'Free', 'pluton' ); ?></strong> 
                                    <?php _e( 'Setup', 'pluton' ); ?>
                                </li>
                                <li>
                                    <strong><?php _e( '24/7', 'pluton' ); ?></strong> 
                                    <?php _e( 'Support', 'pluton' ); ?>
                                </li>
                                <li>
                                    <strong><?php _e( '25 GB', 'pluton' ); ?></strong> 
                                    <?php _e( 'File Storage', 'pluton' ); ?>
                                </li>
                            </ul>
                            <a href="#" class="button button-ps"><?php _e( 'BUY', 'pluton' ); ?></a>
                        </div>
                        <div class="span4 price-column">
                            <h3><?php _e( 'Premium', 'pluton' ); ?></h3>
                            <ul class="list">
                                <li class="price">
                                    <?php _e( '$79,99', 'pluton' ); ?>
                                </li>
                                <li>
                                    <strong><?php _e( 'Free', 'pluton' ); ?></strong> 
                                    <?php _e( 'Setup', 'pluton' ); ?>
                                </li>
                                <li>
                                    <strong><?php _e( '24/7', 'pluton' ); ?></strong> 
                                    <?php _e( 'Support', 'pluton' ); ?>
                                </li>
                                <li>
                                    <strong><?php _e( '50 GB', 'pluton' ); ?></strong> 
                                    <?php _e( 'File Storage', 'pluton' ); ?>
                                </li>
                            </ul>
                            <a href="#" class="button button-ps"><?php _e( 'BUY', 'pluton' ); ?></a>
                        </div>
                    </div>
                    <div class="centered">
                        <p class="price-text"><?php _e( 'We Offer Custom Plans. Contact Us For More Info.', 'pluton' ); ?></p>
                        <a href="#contact" class="button"><?php _e( 'Contact Us', 'pluton' ); ?></a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
<?php endif; ?>
<div class="section third-section">
    <div class="container newsletter">
        <div class="sub-section">
            <div class="title clearfix">
                <div class="pull-left">
                    <h3><?php _e( 'Newsletter', 'pluton' ); ?></h3>
                </div>
            </div>
        </div>
        <div id="success-subscribe" class="alert alert-success invisible">
            <strong><?php _e( 'Well done!', 'pluton' ); ?></strong>
            <?php _e( 'You successfully subscribet to our newsletter.', 'pluton' ); ?>
        </div>
        <div class="row-fluid">
            <div class="span5">
                <p><?php _e( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'pluton' ); ?></p>
            </div>
            <div class="span7">
                <form class="inline-form" method="post" action="<?php echo esc_url( get_template_directory_uri() ); ?>/php/newsletter.php">
                    <input type="email" name="email" id="nlmail" class="span8" placeholder="Enter your email" required/>
                    <button id="" class="button button-sp" type="submit">
                        <?php _e( 'Subscribe', 'pluton' ); ?>
                    </button>
                </form>
                <div id="err-subscribe" class="error centered">
                    <?php _e( 'Please provide valid email address.', 'pluton' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact" class="contact">
    <div class="section secondary-section">
        <div class="container">
            <div class="title">
                <h1><?php _e( 'Contact Us', 'pluton' ); ?></h1>
                <p><?php _e( 'Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.', 'pluton' ); ?></p>
            </div>
        </div>
        <div class="map-wrapper">
            <div class="map-canvas" id="map-canvas">
                <?php _e( 'Loading map...', 'pluton' ); ?>
            </div>
            <div class="container">
                <div class="row-fluid">
                    <div class="span5 contact-form centered">
                        <h3><?php _e( 'Say Hello', 'pluton' ); ?></h3>
                        <div id="successSend" class="alert alert-success invisible">
                            <strong><?php _e( 'Well done!', 'pluton' ); ?></strong>
                            <?php _e( 'Your message has been sent.', 'pluton' ); ?>
                        </div>
                        <div id="errorSend" class="alert alert-error invisible">
                            <?php _e( 'There was an error.', 'pluton' ); ?>
                        </div>
                        <form id="contact-form" action="<?php echo esc_url( get_template_directory_uri() ); ?>/php/mail.php">
                            <div class="control-group">
                                <div class="controls">
                                    <input class="span12" type="text" id="name" name="name" placeholder="* Your name..."/>
                                    <div class="error left-align" id="err-name">
                                        <?php _e( 'Please enter name.', 'pluton' ); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input class="span12" type="email" name="email" id="email" placeholder="* Your email..."/>
                                    <div class="error left-align" id="err-email">
                                        <?php _e( 'Please enter valid email adress.', 'pluton' ); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <textarea class="span12" name="comment" id="comment" placeholder="* Comments..."></textarea>
                                    <div class="error left-align" id="err-comment">
                                        <?php _e( 'Please enter your comment.', 'pluton' ); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button id="send-mail" class="message-btn">
                                        <?php _e( 'Send message', 'pluton' ); ?>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="span9 center contact-info">
                <p><?php _e( '123 Fifth Avenue, 12th,Belgrade,SRB 11000', 'pluton' ); ?></p>
                <p class="info-mail"><?php _e( 'ourstudio@somemail.com', 'pluton' ); ?></p>
                <p><?php _e( '+11 234 567 890', 'pluton' ); ?></p>
                <p><?php _e( '+11 286 543 850', 'pluton' ); ?></p>
                <div class="title">
                    <h3><?php _e( 'We Are Social', 'pluton' ); ?></h3>
                </div>
            </div>
            <div class="row-fluid centered">
                <ul class="social">
                    <li>
                        <a href=""> <span class="icon-facebook-circled"></span> </a>
                    </li>
                    <li>
                        <a href=""> <span class="icon-twitter-circled"></span> </a>
                    </li>
                    <li>
                        <a href=""> <span class="icon-linkedin-circled"></span> </a>
                    </li>
                    <li>
                        <a href=""> <span class="icon-pinterest-circled"></span> </a>
                    </li>
                    <li>
                        <a href=""> <span class="icon-dribbble-circled"></span> </a>
                    </li>
                    <li>
                        <a href=""> <span class="icon-gplus-circled"></span> </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>            

<?php get_footer(); ?>