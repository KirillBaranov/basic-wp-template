<?php get_header(); ?>

<main class="archive page-container">
    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();

                    get_template_part( 'templates/loop' );
                }
            }

            wp_reset_postdata(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>