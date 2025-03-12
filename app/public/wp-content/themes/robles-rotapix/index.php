<?php

get_header(); ?>

<div class="content-body">

    <div id="react-component"></div>

    <?php if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
            <div>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_content(); ?>
            </div>
        </div>
    <?php }
    }

    get_footer(); ?>