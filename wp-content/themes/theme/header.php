<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>
<body>

<header>
    <div class="container">
        <div class="row justify-content-between">
            <a href="/" class="d-block col-2 header__logo">Логотип</a>
            <div class="col d-flex justify-content-end">
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
                <div class="btn btn-primary ml-4">Обратный звонок</div>
            </div>
        </div>
    </div>
</header>
