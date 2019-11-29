<?php $src = get_the_post_thumbnail_url( $post->ID, 'full' ); ?>

<div class="col-xl-4 fade-down animate">
    <div class="membership__block d-flex flex-column align-items-center">
        <div class="membership__thumbnail full-width"
             style="background: url('<?= $src; ?>')
                 no-repeat center;
                 background-size: cover;">
        </div>
        <p class="membership__title"><?php the_title(); ?></p>
        <div class="membership__role"><?php echo get_post_meta( $post->ID, 'role', true ); ?></div>
        <div class="membership__content">
            <?php the_content(); ?>
        </div>
    </div>
</div>