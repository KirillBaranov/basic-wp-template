<?php get_header(); ?>

<main class="category page-container">
    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) { ?>
                <h1 class="page__title"><?php echo get_queried_object()->cat_name ?></h1>
                <div class="page__content">
                    <?php while ( have_posts() ) {
                        the_post();

                        get_template_part( 'templates/loop' );
                    } ?>
                </div>
            <? }

            wp_reset_postdata(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>