<?php

$src = get_the_post_thumbnail_url( $post->ID, 'full' );
$risk = get_post_meta( $post->ID, 'risk', true );

if ( $risk == 'Высокий риск' ) {
    $risk_class = 'danger-risk';
}

else {
    $risk_class = 'warning-risk';
}

?>

<div class="col-xl-4 d-flex justify-content-center fade-down animate">
    <div class="bank__block <?= $risk_class ?>">
        <div class="bank__thumbnail">
            <img src="<?= $src; ?>" alt="Миниатюра банка">
        </div>
        <div class="bank__btn-risk"><?= $risk; ?></div>
    </div>
</div>