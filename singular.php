<?php
get_header(); ?>

    <section id="content-3-7" class="content-block content-3-7">
        <div class="container">
            <div class="col-sm-12">
                <div class="underlined-title">
                    <h1 data-animation-1 data-animation-trigger-1="load"
                        data-animation-type-1="bounce"><?php the_post();
                        the_title(); ?></h1>
                    <hr>
                    <h2><?php the_meta(); ?></h2>
                </div>
                <div class="well">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>