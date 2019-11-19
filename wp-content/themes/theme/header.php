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

<header>
    <div class="container">
        <div class="row justify-content-between">
            <a href="/" class="d-block col-2 header__logo">
                <img width="81" height="31" src="<?= get_stylesheet_directory_uri(); ?>/dist/img/logo.png" alt="Логотип norma-a3">
            </a>
            <div class="col d-xl-flex d-lg-flex d-none justify-content-end align-items-center">
                <?php $args = array(
                    'theme_location' => 'top',
                    'container'=> 'nav',
                    'menu_id' => 'top-nav-ul',
                    'items_wrap' => '<ul id="%1$s" class="nav-row nav__header">%3$s</ul>',
                    'menu_class' => 'top-menu',
                    'walker' => new bootstrap_menu(true)
                );
                wp_nav_menu($args);
                ?>
                <a href="tel:79991890987" class="btn btn-primary header__tel">7 999 189 09 87</a>
            </div>
            <div class="col-1 justify-content-end align-items-center d-flex d-xl-none d-lg-none">
                <div class="cake">
                    <div class="cake__line"></div>
                    <div class="cake__line"></div>
                    <div class="cake__line"></div>
                </div>
            </div>
        </div>
    </div>
</header>
