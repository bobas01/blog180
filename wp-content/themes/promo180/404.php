<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_enqueue_style('style', get_stylesheet_uri());
     wp_enqueue_style('font', get_template_directory_uri().'/asset/font/font.css');
     
    wp_head(); ?>
    <title>404</title>
</head>
<body>
   <section id="error404">
    <div>
    <h1>404</h1>
    <p>Désolé, mais la page demandés n'a pas été trouvé</p>
    <button><a href="<?php  echo home_url();?>">Retour à l'accueuil</a></button>
</div>
   </section> 
</body>
</html>