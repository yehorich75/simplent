<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title>Index Page</title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#fff">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?>>
        <!--BEGIN out-->
        <div class="out">
        <!--BEGIN header-->
            <header class="header">
                <div class="container">
                    <div class="header__wrap">
                    <div class="header__logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                        <div class="logo__part1">JET</div>
                        <div class="logo__part2">RO</div>
                        </a>
                    </div>
                    <div class="header__nav">
                        <nav class="nav"><a href="page.html">HOME</a><a href="#">ABOUT US</a><a href="#">BLOG</a><a href="#">Portfolio</a><a href="contact.html">CONTACT US</a></nav>
                        <?php //wp_nav_menu( array('theme_location' => 'primary','menu_class'     => 'primary-menu','fallback_cb'    =>  false) );?>
                    </div>
                    </div>
                </div>
            </header>
            <!--END header-->
