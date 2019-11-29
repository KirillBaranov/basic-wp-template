<?php $src = get_the_post_thumbnail_url( $post->ID, 'full' ); ?>

<div class="why-us__block--animated animate col-xl-3 col-lg-3 col-md-6 col-12">
    <div class="why-us__block">
        <div class="block__icon">
            <img src="<?= $src; ?>" alt="Вероятность дефолта">
        </div>
        <p class="block__title"><?php the_title(); ?></p>
        <div class="block__description">
            <?php the_content(); ?>
        </div>
    </div>
</div>