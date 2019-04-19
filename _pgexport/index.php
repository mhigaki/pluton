<?php
get_header(); ?>

<div id="home">
    <!-- Start cSlider -->
    <div id="da-slider" class="da-slider" style="background-image:<?php echo 'url('.wp_get_attachment_image_url( get_theme_mod( 'bkg_img' ), 'normal' ).')' ?>;">
        <div class="triangle"></div>
        <!-- mask elemet use for masking background image -->
        <div class="mask" style="background-color:<?php echo get_theme_mod( 'bkg_color' ); ?>;"></div>
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
                            <a href="<?php echo get_theme_mod( '01_slider_url', '#' ); ?>" class="da-link button"><?php echo get_theme_mod( '01_btn_text', __( 'Service', 'pluton' ) ); ?></a>
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
                            <a href="<?php echo get_theme_mod( '02_slider_url', '#' ); ?>" class="da-link button"><?php echo get_theme_mod( '02_btn_text', __( 'Read more', 'pluton' ) ); ?></a>
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
                            <a href="<?php echo get_theme_mod( '03_slider_url', '#' ); ?>" class="da-link button"><?php echo get_theme_mod( '03_btn_text', __( 'Read more', 'pluton' ) ); ?></a>
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
<div class="primary-section section" id="service">
    <div class="container">
        <!-- Start title section -->
        <div class="title">
            <h1><?php echo get_theme_mod( 'sct_service_title', __( 'What We Do?', 'pluton' ) ); ?></h1>
            <!-- Section's title goes here -->
            <p><?php echo get_theme_mod( 'sct_service_sub', __( 'Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.', 'pluton' ) ); ?></p>
            <!--Simple description for section goes here. -->
        </div>
        <div class="row-fluid">
            <?php
                $ours_services_args = array(
                	'category_name' => 'services',
                	'post_type' => 'post',
                	'post_status' => 'publish',
                	'posts_per_page' => '3',
                	'order' => 'ASC',
                	'orderby' => 'rand'
                )
            ?>
            <?php $ours_services = new WP_Query( $ours_services_args ); ?>
            <?php if ( $ours_services->have_posts() ) : ?>
                <?php while ( $ours_services->have_posts() ) : $ours_services->the_post(); ?>
                    <div <?php post_class( 'span4' ); ?> id="post-<?php the_ID(); ?>">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'normal', array(
                                    	'class' => 'img-circle wp-post-image'
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
<div class="section secondary-section " id="portfolio">
    <div class="triangle"></div>
    <div class="container">
        <div class=" title">
            <h1><?php echo get_theme_mod( 'sct_portfolio_title', __( 'Have You Seen our Works?', 'pluton' ) ); ?></h1>
            <p><?php echo get_theme_mod( 'sct_portfolio_subtitle', __( 'Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.', 'pluton' ) ); ?></p>
        </div>
        <!-- Start details for portfolio project 1 -->
        <div id="single-project">
            <?php
                $my_single_prjct_args = array(
                	'category_name' => 'portfolio',
                	'post_type' => 'post',
                	'post_status' => 'publish'
                )
            ?>
            <?php $my_single_prjct = new WP_Query( $my_single_prjct_args ); ?>
            <?php if ( $my_single_prjct->have_posts() ) : ?>
                <?php $my_single_prjct_item_number = 0; ?>
                <?php while ( $my_single_prjct->have_posts() ) : $my_single_prjct->the_post(); ?>
                    <div id="<?php echo 'slidingDiv'.$my_single_prjct_item_number ?>" class="toggleDiv row-fluid single-project<?php if( $my_single_prjct_item_number == 0) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>">
                        <div class="span6">
                            <img src="<?php $image['url']; ?>"/>
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3><?php the_title(); ?></h3>
                                    <span class="show_hide close"> <i class="icon-cancel"></i> </span>
                                </div>
                                <div class="project-info">
                                    <?php the_content(); ?>
                                </div>
                                <p><?php _e( 'Believe in yourself! Have faith in your abilities! Without a humble but reasonable confidence in your own powers you cannot be successful or happy.', 'pluton' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $my_single_prjct_item_number++; ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
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
                <?php
                    $my_single_prjct_args = array(
                    	'category_name' => 'portfolio',
                    	'post_type' => 'post',
                    	'post_status' => 'publish',
                    	'posts_per_page' => '12'
                    )
                ?>
                <?php $my_single_prjct = new WP_Query( $my_single_prjct_args ); ?>
                <?php if ( $my_single_prjct->have_posts() ) : ?>
                    <?php $my_single_prjct_item_number = 0; ?>
                    <?php while ( $my_single_prjct->have_posts() ) : $my_single_prjct->the_post(); ?>
                        <li class="span4 mix web<?php if( $my_single_prjct_item_number == 0) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">
                        <div class="thumbnail">
                                <?php $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( '0' ), 'normal' );
if( $image_attributes ) : ?>
                                <img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>"/>
                            <?php endif; ?>
                            <a href="#single-project" rel="<?php echo '#slidingDiv'.$my_single_prjct_item_number ?>" class="more show_hide"> <i class="icon-plus"></i> </a>
                            <h3><?php the_title(); ?></h3>
                            <p><?php _e( 'macaco_alt', 'pluton' ); ?></p>
                            <div class="mask"></div>
                            </div>
                        </li>
                        <?php $my_single_prjct_item_number++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'pluton' ); ?></p>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
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
                        <h1><?php echo get_theme_mod( 'sct_team_main', __( 'Who We Are?', 'pluton' ) ); ?></h1>
                        <p><?php echo get_theme_mod( 'sct_team_sub', __( 'Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.', 'pluton' ) ); ?></p>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        <?php endif; ?>
        <div class="row-fluid team">
            <?php
                $my_team_args = array(
                	'category_name' => 'team,teams,member,members',
                	'post_type' => 'post',
                	'post_status' => 'publish',
                	'posts_per_page' => '3',
                	'order' => 'ASC',
                	'orderby' => 'rand'
                )
            ?>
            <?php $my_team = new WP_Query( $my_team_args ); ?>
            <?php if ( $my_team->have_posts() ) : ?>
                <?php while ( $my_team->have_posts() ) : $my_team->the_post(); ?>
                    <div id="first-person-<?php the_ID(); ?>" <?php post_class( 'span4' ); ?>>
                        <div class="thumbnail">
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'normal', array(
                                	'class' => 'attachment-normal size-normal wp-post-image'
                                ) );
                                }
                             ?>
                            <h3><?php the_title(); ?></h3>
                            <ul class="social">
                                <?php if ( get_field( 'facebook_url' ) ) : ?>
                                    <li href="<?php echo get_field( 'facebook_url' ); ?>">
                                        <a href="https://www.facebook.com/milton.higaki"><span class="icon-facebook-circled"></span></a>
                                    </li>
                                <?php endif; ?>
                                <li>
                                    <?php if ( get_field( 'twitter_url' ) ) : ?>
                                        <a href="<?php echo get_field( 'twitter_url' ); ?>"> <span class="icon-twitter-circled"></span> </a>
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <?php if ( get_field( 'linkedin_url' ) ) : ?>
                                        <a href="<?php echo get_field( 'linkedin_url' ); ?>"> <span class="icon-linkedin-circled"></span> </a>
                                    <?php endif; ?>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2><?php the_excerpt( ); ?></h2>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'pluton' ); ?></p>
            <?php endif; ?>
        </div>
        <div class="about-text centered">
            <h3><?php echo get_theme_mod( 'sct_about_main', __( 'About Us', 'pluton' ) ); ?></h3>
            <p><?php echo get_theme_mod( 'sct_about_sub', __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', 'pluton' ) ); ?></p>
        </div>
        <h3><?php _e( 'Skills', 'pluton' ); ?></h3>
        <div class="row-fluid">
            <div class="span6">
                <ul class="skills">
                    <?php if ( get_theme_mod( 'a_skill_bar' ) ) : ?>
                        <li>
                            <span class="bar" data-width="<?php echo get_theme_mod( 'a_skill_bar', '100%' ); ?>"></span>
                            <h3><?php echo get_theme_mod( 'a_skill_title', __( 'Graphic Design', 'pluton' ) ); ?></h3>
                        </li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'b_skill_bar' ) ) : ?>
                        <li>
                            <span class="bar" data-width="<?php echo get_theme_mod( 'b_skill_bar', '95%' ); ?>"></span>
                            <h3><?php echo get_theme_mod( 'b_skill_title', __( 'Html & Css', 'pluton' ) ); ?></h3>
                        </li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'c_skill_bar' ) ) : ?>
                        <li>
                            <span class="bar" data-width="68%"></span>
                            <h3><?php echo get_theme_mod( 'c_skill_title', __( 'jQuery', 'pluton' ) ); ?></h3>
                        </li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'd_skill_bar' ) ) : ?>
                        <li>
                            <span class="bar" data-width="<?php echo get_theme_mod( 'd_skill_bar', '70%' ); ?>"></span>
                            <h3><?php echo get_theme_mod( 'd_skill_title', __( 'Wordpress', 'pluton' ) ); ?></h3>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="span6">
                <div class="highlighted-box center" style="background-color:<?php echo get_theme_mod( 'sct_about_box_color' ); ?>;">
                    <h1><?php echo get_theme_mod( 'sct_about_box_main', __( 'We\'re Hiring', 'pluton' ) ); ?></h1>
                    <p><?php echo get_theme_mod( 'sct_about_box_content', __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, ullamcorper suscipit lobortis nisl ut aliquip consequat. I learned that we can do anything, but we can\'t do everything...', 'pluton' ) ); ?></p>
                    <button class="button button-sp" href="<?php echo get_theme_mod( 'sct_about_btn_lnk' ); ?>">
                        <?php echo get_theme_mod( 'sct_about_btn' ); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section secondary-section">
    <div class="triangle"></div>
    <div class="container centered">
        <p class="large-text"><?php echo get_theme_mod( 'sct_cta_main', __( 'Elegance is not the abundance of simplicity. It is the absence of complexity.', 'pluton' ) ); ?></p>
        <a href="<?php echo get_theme_mod( 'cta_btn_lnk', '#' ); ?>" class="button"><?php echo get_theme_mod( 'cta_btn', __( 'Purshase now', 'pluton' ) ); ?></a>
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
                            <?php
                                $ours_teteste_args = array(
                                	'post_type' => 'ours_testemonials',
                                	'nopaging' => true,
                                	'order' => 'ASC',
                                	'orderby' => 'rand'
                                )
                            ?>
                            <?php $ours_teteste = new WP_Query( $ours_teteste_args ); ?>
                            <?php if ( $ours_teteste->have_posts() ) : ?>
                                <?php $ours_teteste_item_number = 0; ?>
                                <?php while ( $ours_teteste->have_posts() && $ours_teteste_item_number++ < 3 ) : $ours_teteste->the_post(); ?>
                                    <div class="span4<?php if( $ours_teteste_item_number == 0) echo ' first'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">
                                        <div class="testimonial">
                                            <?php the_content(); ?>
                                            <div class="whopic">
                                                <div class="arrow"></div>
                                                <?php
                                                    if ( has_post_thumbnail() ) {
                                                        the_post_thumbnail( 'normal', array(
                                                    	'class' => 'centered wp-post-image'
                                                    ) );
                                                    }
                                                 ?>
                                                <strong><?php the_title(); ?></strong>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.', 'pluton' ); ?></p>
                            <?php endif; ?>
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
                    <h3><?php echo get_theme_mod( 'sct_client_main', __( 'Our Clients', 'pluton' ) ); ?></h3>
                </div>
                <ul class="client-nav pull-right">
                    <li id="client-prev"></li>
                    <li id="client-next"></li>
                </ul>
            </div>
            <ul class="row client-slider" id="clint-slider">
                <?php
                    $ours_clients_args = array(
                    	'category_name' => 'clients',
                    	'post_type' => 'post',
                    	'post_status' => 'publish',
                    	'nopaging' => true,
                    	'order' => 'ASC',
                    	'orderby' => 'date'
                    )
                ?>
                <?php $ours_clients = new WP_Query( $ours_clients_args ); ?>
                <?php if ( $ours_clients->have_posts() ) : ?>
                    <?php while ( $ours_clients->have_posts() ) : $ours_clients->the_post(); ?>
                        <li <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'normal', array(
                                	'class' => 'attachment-normal size-normal wp-post-image'
                                ) );
                                }
                             ?>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'pluton' ); ?></p>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php if ( get_theme_mod( 'sct_price_show' ) ) : ?>
    <div id="price" class="section secondary-section">
        <div class="container">
            <div class="title">
                <h1><?php echo get_theme_mod( 'sct_price_main', __( 'Price', 'pluton' ) ); ?></h1>
                <p><?php echo get_theme_mod( 'sct_price_subheading', __( 'Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.', 'pluton' ) ); ?></p>
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
                <form class="inline-form" id="subscribe">
                    <input type="email" name="email" id="nlmail" class="span8" placeholder="Enter your email" required/>
                    <button id="success-subscribe" class="button button-sp" type="submit">
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
            <div class="map-canvas" id="map_canvas">
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
                <p><?php echo get_theme_mod( 'footer_adress', __( '123 Fifth Avenue, 12th,Belgrade,SRB 11000', 'pluton' ) ); ?></p>
                <p class="info-mail"><?php echo get_theme_mod( 'footer_email', __( 'ourstudio@somemail.com', 'pluton' ) ); ?></p>
                <p><?php echo get_theme_mod( 'footer_cel', __( '+11 234 567 890', 'pluton' ) ); ?></p>
                <p><?php echo get_theme_mod( 'footer_tel', __( '+11 286 543 850', 'pluton' ) ); ?></p>
                <div class="title">
                    <h3><?php echo get_theme_mod( 'footer_m_sociais', __( 'We Are Social', 'pluton' ) ); ?></h3>
                </div>
            </div>
            <div class="row-fluid centered">
                <ul class="social">
                    <?php if ( get_theme_mod( 'footer_fcb_url' ) ) : ?>
                        <li>
                            <a href="<?php echo esc_url( get_theme_mod( 'footer_fcb_url' ) ); ?>"> <span class="icon-facebook-circled"></span></a>
                        </li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'footer_twitter_url' ) ) : ?>
                        <li>
                            <a href="<?php echo esc_url( get_theme_mod( 'footer_twitter_url' ) ); ?>"> <span class="icon-twitter-circled"></span> </a>
                        </li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'footer_linkedin_url' ) ) : ?>
                        <li>
                            <a href="<?php echo esc_url( get_theme_mod( 'footer_linkedin_url' ) ); ?>"> <span class="icon-linkedin-circled"></span> </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>            

<?php get_footer(); ?>