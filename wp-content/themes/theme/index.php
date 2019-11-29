<?php get_header(); ?>

<main class="homepage">

    <section class="homepage__screen full-screen">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="homepage__title animate-instanse darken-color">Устали от медленного и скучного анализа банков?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="homepage__description animate-instanse">
                        Норма - cервис который проводит независимую оценку финансового положения банка
                        <span class="primary-color">в два клика</span>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-4 offset-xl-4 offset-0 d-flex justify-content-center" id="try-free">
                    <div class="form__get-request">
                        <div class="form-control">
                            <input type="text" autocomplete="off" name="name" class="form__input fade-down animate-instanse" placeholder="Введите имя">
                        </div>
                        <div class="form-control">
                            <input type="email" autocomplete="off" name="email" class="form__input fade-down animate-instanse" placeholder="E-mail адрес">
                        </div>
                        <div class="form-control">
                            <input type="tel" autocomplete="off" name="tel" class="form__input fade-down animate-instanse" placeholder="+7 999 189 09 87">
                        </div>
                        <div class="form-control">
                            <button type="text" class="form__button font-regular fade-down animate-instanse">Начать бесплатно</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-us-screen full-screen darken-screen">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-8 col-lg-9 offset-xl-2 offset-lg-1 offset-0 transformation-screen">
                    <div class="mock-up position-relative animate-instanse">
                        <?php

                        $args = array(
                            'post_type' => 'mockup',
                            'numberposts' => 1,
                            'orderby' => 'date'
                        );

                        $query = new WP_Query( $args );

                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();

                                $src = get_the_post_thumbnail_url( $post->ID, 'full' ); ?>

                                <img class="full-width" src="<?= $src; ?>" alt="Мокап статистики">
                            <? }
                            wp_reset_postdata();
                        }

                        ?>
                    </div>
                    <a href="#why-us" class="pen__scroller lazy-scroll fade-down animate-instanse">
                        <img class="scroll-down__arrow" src="<?= get_stylesheet_directory_uri(); ?>/dist/img/down-screen.png" alt="Вниз">
                        <img class="pen-animate" src="<?= get_stylesheet_directory_uri(); ?>/dist/img/pen.png" alt="Скролл на один экран">
                    </a>
                </div>
            </div>
            <div class="row why-us__title" id="why-us">
                <div class="col-12 text-center">
                    <h3 class="homepage__title animate lighten-color">Почему мы?</h3>
                </div>
            </div>
            <div class="row">

                <?php $args = array(
                    'numberposts' => 4,
                    'post_type'   => 'why-us'
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();

                        get_template_part( '/templates/loop', 'why-us' );
                    }

                    wp_reset_postdata();
                }

                ?>

            </div>
        </div>
    </section>
    <section class="try-product full-screen">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 col-12 col-md-10 offset-md-1 offset-xl-0 offset-lg-0">
                    <div class="container__timer text-center">
                        <p class="homepage__title animate" style="max-width: 463px;">Хотите проверить, как это работает?</p>
                        <div class="timer__description animate text-center">
                            Оставьте заявку сейчас и оцените свой банк бесплатно
                        </div>
                        <div class="timer animate d-flex align-items-center justify-content-between">
                            <div class="timer__block">
                                <time class="timer__count flex justify-center align-center" id="hours" data-max-time="00">
                                    <div class="number-row"></div>
                                </time>
                            </div>
                            <div class="timer__block">
                                <time class="timer__count">3</time>
                            </div>
                            <p class="timer__label">минуты</p>
                            <div class="timer__block">
                                <time class="timer__count">0</time>
                            </div>
                            <div class="timer__block">
                                <time class="timer__count">3</time>
                            </div>
                            <p class="timer__label">секунды</p>
                        </div>
                    </div>
                    <div class="form-get-request try-form">
                        <div class="form-control">
                            <input type="text" autocomplete="off" name="Имя" class="input__form-try inherit-bg fade-down animate" placeholder="Введите имя">
                        </div>
                        <div class="form-control">
                            <input type="email" autocomplete="off" name="Email адрес" class="input__form-try inherit-bg fade-down animate" placeholder="E-mail адрес">
                        </div>
                        <div class="form-control">
                            <input type="tel" autocomplete="off" name="Телефон" class="input__form-try inherit-bg fade-down animate" placeholder="+7 999 189 09 87">
                        </div>
                        <div class="form-control">
                            <button type="text" class="input__form-try font-regular fade-down animate" id="do-validate">Оценить свой банк бесплатно</button>
                        </div>
                    </div>
                </div>
                <div class="fade-right animate col-xl-6 col-lg-5 d-none d-xl-block d-lg-block" data-duration="1s">
                    <img class="full-width" src="<?= get_stylesheet_directory_uri(); ?>/dist/img/mac-mock-up.png" alt="Статистика продукта">
                </div>
            </div>
        </div>
    </section>

    <section class="additional-info position-relative lighten-block" id="plus">
        <div class="left-thumbnail-associated animate" style="background: url('<?= get_stylesheet_directory_uri(); ?>/dist/img/default.png') no-repeat;"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6">
                    <p class="homepage__title fade-right animate">Боитесь дефолта банка?</p>
                    <div class="info__description fade-right animate" data-delay="300">
                        От дефолта не застрахована ни одна финансовая организация.
                        Экономическая нестабильность государства влияет на платежеспособность банков –
                        незастрахованные вклады могут превратиться в пустые цифры, купленные облигации – в
                        бесполезную бумагу. Для клиента, полагающегося на стабильность организации, дефолт
                        обернется полной потерей капиталовложений,
                        обвалом бизнеса, привязанного к счетам в банке, потерей работы.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="additional-info info-odd darken-block darken-screen overflow-y-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <p class="homepage__title fade-left lighten-color animate">Как уберечься от рисков?</p>
                    <div class="info__description fade-left animate" data-delay="300">
                        Неплатежеспособность предотвратить сложно, но можно просчитать вероятные риски,
                        найти выход из положения до дефолта. НОРМА – сервис, при помощи которого р
                        ассчитывается вероятность дефолта для любой финансовой организации на территории страны.
                        На основании данных, полученных от Центрального Банка России, проводится глубокий анализ,
                        выдается развернутый результат с подробным графическим заключением.
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <img class="parallax full-width" data-direction="top" src="<?= get_stylesheet_directory_uri(); ?>/dist/img/mobile.png" alt="Как уберечься от рисков? Иллюстрация">
                </div>
            </div>
        </div>
    </section>
    <section class="additional-info position-relative lighten-block">
        <div class="left-thumbnail-associated animate" style="background: url('<?= get_stylesheet_directory_uri(); ?>/dist/img/default-3.png') no-repeat;"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6">
                    <p class="homepage__title fade-right animate">Что дает анализ?</p>
                    <div class="info__description fade-right animate" data-delay="300">
                        При помощи анализа можно сравнить рыночные показатели, рейтинги компаний,
                        данные по регионам, просчитать вероятность наступления неплатежеспособности банка,
                        отзыва лицензии в ближайшие шесть месяцев. По полученным результатам, клиент ориентируется
                        на наиболее стабильные банки, без страха делает крупные вклады, приобретает акции, развивает
                        бизнес, полагаясь на проверенного контрагента. Последующие расчеты при помощи НОРМА дают возможность
                        отслеживать
                        волатильность в положении банков, заранее просчитывать вероятность дефолта, избегать убытков.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="prognoses-firms">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h3 class="homepage__title animate">Как  оценивала Норма дефолтные банки</h3>
                </div>
                <div class="col-12">
                    <div class="prognoses__homepage-subtitle fade-down animate">Вероятность дефолта до отзыва лицензии</div>
                </div>
            </div>
            <div class="row bank__row">

                <?php $args = array(
                   'numberposts' => 3,
                   'post_type'   => 'risks',
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();

                        get_template_part( '/templates/loop', 'risk' );
                    }

                    wp_reset_postdata();
                }

                ?>

            </div>
        </div>
    </section>

    <section class="relation-questions" id="questions">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h3 class="homepage__title animate">Часто задаваемые вопросы</h3>
                </div>
            </div>
            <div class="row questions__container">
                <?php $args = array(
                    'post_type'    => 'questions',
                    'numbersposts' => -1
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();

                        get_template_part('/templates/loop', 'questions');
                    }

                    wp_reset_postdata();
                }

                ?>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="show-more-questions fade-down animate">Показать все вопросы</div>
                </div>
            </div>
        </div>
    </section>
    <section class="if-have-questions">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <p class="homepage__title animate">У вас остались вопросы?</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <p class="homepage__subtitle animate">Напишите его и мы вам ответим</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-10 col-12 offset-0 offset-xl-3 offset-lg-2 offset-md-1 offset-0">
                    <div class="have-questions__form">
                        <div class="form-control d-flex justify-content-center">
                            <input type="text" autocomplete="off" name="Имя" class="questions__input fade-down animate" placeholder="Введите имя">
                        </div>
                        <div class="form-control d-flex justify-content-center">
                            <input type="email" autocomplete="off" name="Email адрес" class="questions__input fade-down animate" placeholder="Введите email">
                        </div>
                        <div class="form-control d-flex justify-content-center">
                            <input type="tel" autocomplete="off" name="Телефон" class="questions__input fade-down animate" placeholder="Введите телефон">
                        </div>
                        <div class="form-control d-flex justify-content-center">
                            <textarea type="text" autocomplete="off" name="Вопрос" class="questions__textarea fade-down animate" onresize="" placeholder="Введите ваш вопрос"></textarea>
                        </div>
                        <div class="form-control d-flex justify-content-center">
                            <button type="text" class="questions__button font-regular fade-down animate">Узнать ответ на мой вопрос</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h3 class="homepage__title animate">Кто мы?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about-us__subtitle fade-down animate">
                        Наша команда – создатели сервиса НОРМА, который просчитывает вероятность неплатежеспособности,
                        помогает клиентам уберечься от убытков и сохранить капитал. Каждый из участников совершенствует
                        определенную часть программы – модели секторов, оценки и рейтинги, дорабатывает заключения,
                        улучшает обработку 20 миллионов показателей, корректирует пользовательский интерфейс для удобства
                        клиентов. Благодаря десятилетнему опыту в аналитике, нам удалось создать эффективный сервис
                        по оценке банков с высоким уровнем вероятности, не имеющий аналогов, дающий наиболее
                        развернутый и понятный результат по расчетам.
                    </div>
                </div>
            </div>
            <div class="row row__team">
                <?php

                $args = array(
                    'post_type'   => 'team',
                    'numberposts' => 3
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();

                        get_template_part( '/templates/loop', 'team' );
                    }

                    wp_reset_postdata();
                } ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>