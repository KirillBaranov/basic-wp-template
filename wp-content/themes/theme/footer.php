<footer>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-3 col-12 order-2 order-xl-1">
                <p class="footer__title">Контактная информация</p>
                <ul class="footer__menu">
                    <li class="footer__icon"><a href="mailto:norma-a3@mail.ru">norma-a3@mail.ru</a></li>
                    <li class="footer__icon"><a href="tel:89991878712">+7 999 187 87 12</a></li>
                    <li class="footer__icon">Казань, Адоратского, 72</li>
                </ul>
            </div>

            <div class="col-xl-3 col-12 order-3 order-xl-2">
                <p class="footer__title">Навигация на сайте</p>

                <?php $args = array(
                    'theme_location' => 'bottom',
                    'container'=> 'nav',
                    'menu_id' => 'top-nav-ul',
                    'items_wrap' => '<ul id="%1$s" class="footer__menu">%3$s</ul>',
                    'menu_class' => ' -menu',
                    'walker' => new bootstrap_menu(true)
                );
                wp_nav_menu($args);
                ?>
            </div>
            <div class="col-xl-3 col-12 offset-xl-3 offset-0 order-1 order-xl-3">
                <div class="text-xl-center">
                    <p class="footer-form__title">Попробовать бесплатно</p>
                </div>
                <div class="form__get-request">
                    <div class="form-control">
                        <input type="text" class="form__input darken-input" placeholder="Введите имя">
                    </div>
                    <div class="form-control">
                        <input type="text" class="form__input darken-input" placeholder="E-mail адрес">
                    </div>
                    <div class="form-control">
                        <input type="text" class="form__input darken-input" placeholder="+7 999 189 09 87">
                    </div>
                    <div class="form-control">
                        <button type="text" class="form__button font-regular">30 дней бесплатно</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 footer__separator"></div>
        </div>
        <div class="row justify-content-between">
            <div class="col-xl-3">
                <p class="copyright"><?= date('Y'); ?>, все права защищены</p>
                <p class="copyright"><a href="/">Политика обработки персональных данных</a></p>
            </div>
            <div class="col-xl-2 text-right">
                <p class="copyright__author">Создание сайта</p>
                <a href="https://inverse-studio.ru" target="_blank" rel="nofollow noopener">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/dist/img/copyright.png" title="Веб-студия Inverse-studio.ru" alt="Веб-студия Inverse-studio.ru">
                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
