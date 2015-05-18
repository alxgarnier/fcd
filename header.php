<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,700,300' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/dist/assets/css/style.css">
    <script src="<?php bloginfo('template_url')?>/dist/assets/js/modernizr.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
<div id="page">
    <header id="header" class="fixed">
        <div class="top-bar">
            <section class="top-bar-section">
                <ul class="inline-list right">
                    <li class="not-click"><a href="tel:<?php the_field('telephone'); ?>" class="tel"><?php the_field('telephone'); ?></a></li>
                    <li class="not-click"><a href="mailto:<?php the_field('email'); ?>" class="mail"><?php the_field('email'); ?></a></li>
                </ul>
            </section>
        </div>
    </header><!-- /header -->