<?php get_header(); ?>

<div class="wrapper">

    <div class="block">
        <div class="container">
            <!-- <div class="block__label"></div> -->
            <h2 class="block__title"><?php the_title(); ?></h2>

            <?php the_content(); ?>

        </div>
    </div>

</div>

<?php get_footer(); ?>