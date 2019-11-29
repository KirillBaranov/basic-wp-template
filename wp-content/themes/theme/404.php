<?php get_header(); ?>
<main class="page-404">
    <section class="section-404">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 offset-xl-4 offset-lg-4 d-flex flex-column align-items-center">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/dist/img/404.png" alt="Ошибка 404!">
                    <a href="/" class="btn btn-primary btn__404">Перейти на главную</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>