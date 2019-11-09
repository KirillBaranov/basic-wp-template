<?php get_header(); ?>

    <main class="archive page-container">
        <div class="container">
            <div class="row">
                <?php if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>

                        <h1 class="page__title"><?php the_title(); ?></h1>
                        <div class="page__content"><?php the_content(); ?></div>
                    <? }
                }

                wp_reset_postdata(); ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>