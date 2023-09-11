<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/font/font.css"> -->
    <title>Accueil</title>
    <?php wp_enqueue_style('style', get_stylesheet_uri());
      wp_enqueue_style('lineicons', 'https://cdn.lineicons.com/2.0/LineIcons.css');
     wp_enqueue_style('font', get_template_directory_uri().'/asset/font/font.css');
     
    wp_head(); ?>
</head>

<body>
    <header>
        <div id="logoBurger">
            <a id="logo" href="<?php  echo home_url();?>"><img src="<?php echo get_template_directory_uri()?>/asset/img/Logo180.png" alt="logo"></a>
            <img id="menuBurger" src="<?php echo get_template_directory_uri()?>/asset/img/iconBurger.png" alt="menu">
        </div>

        <nav>
            <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
            <!-- <ul id="menu">
                <li><a href="stagiaire.html">Stagiaires</a></li>
                <li><a href="actuality.html">Actualités</a></li>
                <li><a href="category.html">Catégories</a></li>

            </ul> -->
        </nav>
    </header>
    <figure id="hero">
        <img src="<?php echo get_template_directory_uri()?>./asset/img/baniereDesktop.png" alt="photo de promo">
    </figure>
    <main>