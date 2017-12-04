<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes() ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes() ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes() ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes() ?> class="no-js"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Andrés Sierra - <?php the_title() ?></title>

        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- 
        <meta name="msapplication-TileColor" content="#">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/library/images/icons/favicon.ico">
        <meta name="theme-color" content="#"> 
        -->

        <?php wp_head() ?>
    </head>
    <header>
        <div class="open-nav hidden-lg hidden-md">
            <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
        </div>
        <div class="close-nav hidden-lg hidden-md">
            <i class="fa fa-times fa-2x" aria-hidden="true"></i>
        </div>
        <ul>
            <li>
                <a href="<?php echo home_url('/') ?>">
                    <div class="logo">
                        <div class="title">ANDRÉS SIERRA</div>
                        <div class="subtitle">photographer</div>
                    </div>
                </a>
            </li>
            <li>
                <nav id="main-menu">
                    <?php wp_nav_menu([ 'container' => false, 'menu' => __( 'The Main Menu', 'bonestheme' ), 'theme_location' => 'main-nav' ]) ?>
                </nav>
            </li>
        </ul>
    </header>
    <body <?php body_class() ?>>