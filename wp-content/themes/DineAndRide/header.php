<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400i|Noto+Sans+KR:500|Roboto:100,300" rel="stylesheet">
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    <?php wp_head();
    ?>
</head>

<body <?php body_class(); ?>>

<nav id="my-navbar" class="navbar navbar-expand-lg navbar-light sticky-top">
    <a class="navbar-brand" href="/DineAndRide"><img src="/DineAndRide/wp-content/themes/DineAndRide/images/dine-and-ride-logov3.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <?php
            if(is_front_page() || is_home()){
                strip_tags(wp_nav_menu(array('theme_location' => 'header-menu',
                    'container' => false,
                    'depth' => 0,
                    'items_wrap'=>'%3$s')), '<a>');
            }else{
                strip_tags(wp_nav_menu(array('theme_location' => 'booking-menu',
                    'container' => false,
                    'depth' => 0,
                    'items_wrap'=>'%3$s')), '<a>');
            }
            ?>
        </ul>
    </div>
</nav>