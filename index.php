<?php
get_header(); ?>

<section id="content-1-3" class="content-block content-1-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="underlined-title">
                    <h1><?php echo get_theme_mod( 'blocks_content_1_3_title', __( 'Services', 'ascontheme' ) ); ?></h1>
                    <hr>
                </div>
                <div class="services-wrapper">
                    <?php
                        $services_args = array(
                            'post_parent' => get_theme_mod('blocks_content_1_3_source'),
                            'post_type' => 'blocks_content',
                            'post_status' => 'publish',
                            'nopaging' => true,
                            'order' => 'ASC',
                            'orderby' => 'menu_order'
                        )
                    ?>
                    <?php $services = new WP_Query( $services_args ); ?>
                    <?php if ( $services->have_posts() ) : ?>
                        <?php while ( $services->have_posts() ) : $services->the_post(); ?>
                            <div class="col-md-4">
                                <div class="icon bg-crete">
                                    <span class="fa <?php echo get_post_meta( get_the_ID(), 'icon', true ); ?>" data-animation-1 data-animation-trigger-1="hover" data-animation-type-1="bounce"></span>
                                </div>
                                <h4><?php the_title(); ?></h4>
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'ascontheme' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<section class="content-block gallery-1 gallery-1-1">
    <?php
        $gallery = blocks_get_gallery( get_theme_mod( 'blocks_gallery_1_1_source' ) );
    ?>
    <div class="container">
        <div class="underlined-title">
            <h1 data-animation-1 data-animation-trigger-1="hover" data-animation-type-1="bounce"><?php echo get_theme_mod( 'blocks_gallery_1_1_title', __( 'Our work', 'ascontheme' ) ); ?></h1>
            <hr>
        </div>
        <ul class="filter">
            <li class="active">
                <a href="#" data-filter="*"><?php _e( 'All', 'ascontheme' ); ?></a>
            </li>
            <?php foreach($gallery['tags'] as $tag_slug => $tag_name) : ?>
            <li>
                <a href="#" data-filter="<?php echo '.'.$tag_slug ?>"><?php echo $tag_name ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <!-- /.gallery-filter -->
        <div class="row">
            <div class="isotope-gallery-container">
                <?php foreach($gallery['images'] as $image) : ?>
                <div class="col-md-3 col-sm-6 col-xs-12 gallery-item-wrapper <?php echo $image['tags_string'] ?>">
                    <div class="gallery-item">
                        <div class="gallery-thumb">
                            <img src="<?php echo $image['thumbnail'][0] ?>" class="img-responsive" alt="<?php echo $image['thumbnail']['alt'] ?>">
                            <div class="image-overlay"></div>
                            <a href="<?php echo $image['image'][0] ?>" class="gallery-zoom" alt="<?php echo $image['alt'] ?>"><i class="fa fa-eye" alt="This is the title"></i></a>
                            <a href="<?php echo $image['link'] ?>" class="gallery-link" target="_blank"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="gallery-details">
                            <h5><?php echo $image['title'] ?></h5>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- /.gallery-item-wrapper -->
                <!-- /.gallery-item-wrapper -->
                <!-- /.gallery-item-wrapper -->
                <!-- /.gallery-item-wrapper -->
                <!-- /.gallery-item-wrapper -->
                <!-- /.gallery-item-wrapper -->
                <!-- /.gallery-item-wrapper -->
            </div>
            <!-- /.isotope-gallery-container -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<section id="content-3-7" class="content-block content-3-7">
    <div class="container">
        <div class="col-sm-12">
            <div class="underlined-title">
                <h1><?php echo get_theme_mod( 'blocks_content_3_7_title', __( 'Partners', 'ascontheme' ) ); ?></h1>
                <hr>
                <section id="content-1-7" class="content-1-7 content-block">
                    <div class="container">
                        <div class="row">
                            <?php
                                $clients_args = array(
                                    'post_parent' => get_theme_mod('blocks_content_1_7_source'),
                                    'post_type' => 'blocks_content',
                                    'post_status' => 'publish',
                                    'nopaging' => true,
                                    'order' => 'ASC',
                                    'orderby' => 'menu_order'
                                )
                            ?>
                            <?php $clients = new WP_Query( $clients_args ); ?>
                            <?php if ( $clients->have_posts() ) : ?>
                                <?php while ( $clients->have_posts() ) : $clients->the_post(); ?>
                                    <div class="col-md-2 col-sm-4" data-animation-1 data-animation-trigger-1="hover" data-animation-type-1="bounce">
                                        <?php the_post_thumbnail( 'medium', array(
                                                'alt' => __( 'Client', 'ascontheme' )
                                        ) ); ?>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                        <!--end of row-->
                    </div>
                    <!-- /.container -->
                </section>
            </div>
        </div>
    </div>
</section>
<section class="content-block team-1 team-1-2">
    <div class="container">
        <div class="underlined-title">
            <h1><?php echo get_theme_mod( 'blocks_team_1_2_title', __( 'Our Team', 'ascontheme' ) ); ?></h1>
            <hr>
        </div>
        <div class="row">
            <?php
                $blocks_args = array(
                    'post_parent' => get_theme_mod('blocks_team_1_2_source'),
                    'post_type' => 'blocks_content',
                    'post_status' => 'publish',
                    'nopaging' => true,
                    'order' => 'ASC',
                    'orderby' => 'menu_order'
                )
            ?>
            <?php $blocks = new WP_Query( $blocks_args ); ?>
            <?php if ( $blocks->have_posts() ) : ?>
                <?php $blocks_item_number = 0; ?>
                <?php while ( $blocks->have_posts() ) : $blocks->the_post(); ?>
                    <div class="col-md-3 col-sm-6 team-member-wrap" data-animation-1 data-animation-trigger-1="hover" data-animation-type-1="pulse">
                        <div class="team-member">
                            <?php the_post_thumbnail( 'large', array(
                                    'class' => 'img-responsive'
                            ) ); ?>
                            <div class="team-details">
                                <h4 class="member-name"><?php the_title(); ?></h4>
                                <?php if ( get_post_meta( get_the_ID(), 'position', true ) ) : ?>
                                    <p class="position"><?php echo get_post_meta( get_the_ID(), 'position', true ); ?></p>
                                <?php endif; ?>
                                <?php the_content(); ?>
                                <ul class="social social-dark">
                                    <?php if ( get_post_meta( get_the_ID(), 'social_facebook', true ) ) : ?>
                                        <li>
                                            <a href="<?php echo get_post_meta( get_the_ID(), 'social_facebook', true ); ?>"><i class="fa fa-2x fa-facebook"></i></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_post_meta( get_the_ID(), 'social_twitter', true ) ) : ?>
                                        <li>
                                            <a href="<?php echo get_post_meta( get_the_ID(), 'social_twitter', true ); ?>"><i class="fa fa-2x fa-twitter"></i></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_post_meta( get_the_ID(), 'social_google', true ) ) : ?>
                                        <li>
                                            <a href="<?php echo get_post_meta( get_the_ID(), 'social_google', true ); ?>"><i class="fa fa-2x fa-google-plus"></i></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_post_meta( get_the_ID(), 'social_pinterest', true ) ) : ?>
                                        <li>
                                            <a href="<?php echo get_post_meta( get_the_ID(), 'social_pinterest', true ); ?>"><i class="fa fa-2x fa-pinterest"></i></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_post_meta( get_the_ID(), 'social_behance', true ) ) : ?>
                                        <li>
                                            <a href="<?php echo get_post_meta( get_the_ID(), 'social_behance', true ); ?>"><i class="fa fa-2x fa-behance"></i></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_post_meta( get_the_ID(), 'social_dribbble', true ) ) : ?>
                                        <li>
                                            <a href="<?php echo get_post_meta( get_the_ID(), 'social_dribbble', true ); ?>"><i class="fa fa-2x fa-dribbble"></i></a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                                <!-- /.social -->
                            </div>
                        </div>
                    </div>
                    <?php $blocks_item_number++; ?>
                    <?php if( $blocks_item_number % 4 == 0 ) echo '<div class="clearfix visible-md-block visible-lg-block"></div>'; ?>
                    <?php if( $blocks_item_number % 2 == 0 ) echo '<div class="clearfix visible-sm-block"></div>'; ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'ascontheme' ); ?></p>
            <?php endif; ?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<div class="map min-height-500px" data-map-lat="<?php echo get_theme_mod( 'blocks_map_lat' ); ?>" data-map-long="<?php echo get_theme_mod( 'blocks_map_long' ); ?>" data-map-zoom="<?php echo get_theme_mod( 'blocks_map_zoom' ); ?>" data-marker-image="<?php echo esc_url( get_template_directory_uri().'/images/map-pin.png' ) ?>"></div>
<section class="content-block contact-1" id="contactusform">
    <div class="container text-center">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="underlined-title">
                <h1><?php echo get_theme_mod( 'blocks_contact_1_title', __( 'Get in Touch', 'ascontheme' ) ); ?></h1>
                <hr>
                <ul class="contact-info">
                    <li>
                        <span class="fa fa-map-marker"></span>
                        <?php echo get_theme_mod( 'blocks_contact_1_address' ); ?>
                    </li>
                    <li>
                        <span class="fa fa-phone"></span>
                        <?php echo get_theme_mod( 'blocks_contact_1_phone' ); ?>
                    </li>
                    <li>
                        <span class="fa fa-envelope"></span>
                        <a href="<?php echo 'mailto:'.get_theme_mod('blocks_contact_1_email') ?>"><?php echo get_theme_mod( 'blocks_contact_1_email', __( 'buyme@example.com', 'ascontheme' ) ); ?></a> 
                    </li>
                </ul>
                <?php if ( is_active_sidebar( 'blocks_contact_1_form' ) ) : ?>
                    <div id="contact" class="form-container">
                        <?php dynamic_sidebar( 'blocks_contact_1_form' ); ?>
                    </div>
                <?php endif; ?>
            </div>
            <!-- /.form-container -->
        </div>
        <!-- /.col-sm-10 -->
    </div>
    <!-- /.container -->
</section>            

<?php get_footer(); ?>