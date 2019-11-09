<?php get_header(); ?>

<main class="homepage page-container">
    <div class="container">
        <div class="row">
            <?php $args = array(
                'numberposts' => -1,
                'post_type'   => 'post'
            );

            $query = new WP_Query( $args );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();

                    get_template_part( 'templates/loop' );
                }
            }

            wp_reset_postdata(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>