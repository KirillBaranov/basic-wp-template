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
                            <input type="text" class="form__input" placeholder="Введите имя">
                        </div>
                        <div class="form-control">
                            <input type="text" class="form__input" placeholder="E-mail адрес">
                        </div>
                        <div class="form-control">
                            <input type="text" class="form__input" placeholder="+7 999 189 09 87">
                        </div>
                        <div class="form-control">
                            <button type="text" class="form__button font-regular">Начать бесплатно</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-us-screen full-screen">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-8 col-lg-9 offset-xl-2 offset-lg-1 offset-0 transformation-screen">
                    <div class="mock-up position-relative animate-instanse">
                        <img class="full-width" src="<?= get_stylesheet_directory_uri(); ?>/dist/img/mock-up.png" alt="Мокап статистики">
                        <a href="#why-us" class="pen__scroller lazy-scroll">
                            <img src="<?= get_stylesheet_directory_uri(); ?>/dist/img/pen.png" alt="Скролл на один экран">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row why-us__title" id="why-us">
                <div class="col-12 text-center">
                    <h3 class="homepage__title animate lighten-color">Почему мы?</h3>
                </div>
            </div>
            <div class="row">
                <div class="why-us__block--animated animate col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="why-us__block">
                        <div class="block__icon">
                            <img src="<?= get_stylesheet_directory_uri(); ?>/dist/img/icon1.png" alt="Вероятность дефолта">
                        </div>
                        <p class="block__title">Вероятность дефолта</p>
                        <div class="block__description">
                            Расчеты имеют вероятность выше 82%, так как
                            основываются на реальных показателях с использованием
                            20 миллионов значений.
                        </div>
                    </div>
                </div>

                <div class="why-us__block--animated animate col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="why-us__block">
                        <div class="block__icon">
                            <img src="<?= get_stylesheet_directory_uri(); ?>/dist/img/icon2.png" alt="Вероятность дефолта">
                        </div>
                        <p class="block__title">Скорость</p>
                        <div class="block__description">
                            Преимущество сервиса – быстрая оценка без длительных ожиданий.
                            Процесс расчета занимает меньше минуты
                        </div>
                    </div>
                </div>

                <div class="why-us__block--animated animate col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="why-us__block">
                        <div class="block__icon">
                            <img src="<?= get_stylesheet_directory_uri(); ?>/dist/img/icon3.png" alt="Вероятность дефолта">
                        </div>
                        <p class="block__title">Оценка в два клика</p>
                        <div class="block__description">
                            Клиенту нужно ввести название финансовой организации,
                            группы компаний и запустить анализ – далее программа
                            проводит расчеты автоматически.
                        </div>
                    </div>
                </div>

                <div class="why-us__block--animated animate col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="why-us__block">
                        <div class="block__icon">
                            <img src="<?= get_stylesheet_directory_uri(); ?>/dist/img/icon4.png" alt="Вероятность дефолта">
                        </div>
                        <p class="block__title">30 дней бесплатно</p>
                        <div class="block__description">
                            30 дней – бесплатный период, на протяжении которого клиент
                            может удостовериться в правильности,
                            объективности оценки вероятности дефолта банка.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="try-product">
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
                            <input type="text" class="input__form-try" placeholder="Введите имя">
                        </div>
                        <div class="form-control">
                            <input type="text" class="input__form-try" placeholder="E-mail адрес">
                        </div>
                        <div class="form-control">
                            <input type="text" class="input__form-try" placeholder="+7 999 189 09 87">
                        </div>
                        <div class="form-control">
                            <button type="text" class="input__form-try font-regular">Оценить свой банк бесплатно</button>
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
                <div class="col-xl-6 offset-xl-6">
                    <p class="homepage__title animate">Боитесь дефолта банка?</p>
                    <div class="info__description animate" data-duration="1.5s">
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
    <section class="additional-info info-odd darken-block overflow-y-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <p class="homepage__title lighten-color animate">Как уберечься от рисков?</p>
                    <div class="info__description animate">
                        Неплатежеспособность предотвратить сложно, но можно просчитать вероятные риски,
                        найти выход из положения до дефолта. НОРМА – сервис, при помощи которого р
                        ассчитывается вероятность дефолта для любой финансовой организации на территории страны.
                        На основании данных, полученных от Центрального Банка России, проводится глубокий анализ,
                        выдается развернутый результат с подробным графическим заключением.
                    </div>
                </div>
                <div class="col-xl-6">
                    <img class="parallax full-width" data-direction="top" src="<?= get_stylesheet_directory_uri(); ?>/dist/img/mobile.png" alt="Как уберечься от рисков? Иллюстрация">
                </div>
            </div>
        </div>
    </section>
    <section class="additional-info lighten-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 info__img" style="background: url('<?= get_stylesheet_directory_uri(); ?>/dist/img/stat.png') no-repeat 0 center;">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-6">
                            <p class="homepage__title animate">Что дает анализ?</p>
                            <div class="info__description animate">
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
                    'numbersposts' => 6
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();

                        get_template_part('/templates/loop', 'questions');
                    }
                }

                ?>
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
                    <p class="homepage__subtitle animate">Напишите вопрос и мы вам ответим</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-10 col-12 offset-0 offset-xl-3 offset-lg-2 offset-md-1 offset-0">
                    <div class="have-questions__form">
                        <div class="form-control d-flex justify-content-center">
                            <input type="text" class="questions__input" placeholder="Введите имя">
                        </div>
                        <div class="form-control d-flex justify-content-center">
                            <input type="text" class="questions__input" placeholder="Введите email">
                        </div>
                        <div class="form-control d-flex justify-content-center">
                            <input type="tel" class="questions__input" placeholder="Введите телефон">
                        </div>
                        <div class="form-control d-flex justify-content-center">
                            <textarea type="text" class="questions__textarea" onresize="" placeholder="Введите ваш вопрос"></textarea>
                        </div>
                        <div class="form-control d-flex justify-content-center">
                            <button type="text" class="questions__button font-regular">Узнать ответ на мой вопрос</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>