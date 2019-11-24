<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body>

<header id="header">
    <div class="container">
        <div class="row justify-content-between">
            <a href="/" class="d-block col-1 header__logo animate-instanse">
                <img width="81" height="31" src="<?= get_stylesheet_directory_uri(); ?>/dist/img/logo.png" alt="Логотип norma-a3">
            </a>
            <div class="col d-xl-flex d-none justify-content-end align-items-center">
                <?php $args = array(
                    'theme_location' => 'top',
                    'container'=> 'nav',
                    'menu_id' => 'top-nav-ul',
                    'items_wrap' => '<ul id="%1$s" class="nav-row animate-instanse nav__header">%3$s</ul>',
                    'menu_class' => 'animate-instanse',
                    'walker' => new bootstrap_menu(true)
                );
                wp_nav_menu($args);
                ?>
                <button class="btn btn-primary header__btn animate-instanse">Попробовать бесплатно</button>
            </div>
            <div class="col-1 justify-content-end align-items-center d-flex d-xl-none position-relative">
                <div class="cake position-relative">
                    <div class="cake__line"></div>
                    <div class="cake__line"></div>
                    <div class="cake__line"></div>
                </div>
                <div class="background-menu d-block d-xl-none"></div>
            </div>
            <nav class="mobile-menu">
                <div class="container">
                    <div class="d-flex flex-column align-items-end">
                        <div class="btn btn-white btn-mobile">Попробовать бесплатно</div>

                        <?php $args = array(
                            'theme_location' => 'top',
                            'container'=> false,
                            'menu_id' => false,
                            'items_wrap' => '<ul id="%1$s" class="menu-list">%3$s</ul>',
                            'menu_class' => 'menu-list',
                            'walker' => new bootstrap_menu(true)
                        );
                        wp_nav_menu($args);
                        ?>

                        <a href="tel:79991890987" class="mobile-menu__tel">7 999 189 09 87</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
