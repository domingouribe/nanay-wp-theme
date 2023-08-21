<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="container">
        <div class="header-local">
            <?php get_template_part( 'template-parts/header/site-branding' ); ?>
            <?php get_template_part( 'template-parts/header/site-menu' ); ?>
            <div class="meta-header">
        <div class="container">
            <p><span>fundacionnanay@gmail.com</span><span>tel: +56 9 6706 2175</span></p>
        </div>
    </div>     
        </div>
    </div>   
        
</header>