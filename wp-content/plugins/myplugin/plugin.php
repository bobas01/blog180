<?php

/*
Plugin Name: Hello Bobas
Plugin URI: http://localhost/php/promo180/
Description: my first plugin
Author: Alexandre Sequeira
Version: 1.0
Author URI:http://localhost/php/promo180/ 
*/
require_once (plugin_dir_path(__FILE__) . 'includes/mfp-function.php');

// Hook the 'wp_footer' action hook, add the function named 'mfp_Add_Text' to it
// FOR A MENU LINK //
function ajouter_menu_reseaux_sociaux() {
    add_menu_page(
        'Gérer les Réseaux Sociaux',
        'Choose socialMedia',
        'manage_options',
        'gestion-reseaux-sociaux',
        'page_gestion_reseaux_sociaux'
    );
}
add_action('admin_menu', 'ajouter_menu_reseaux_sociaux');

function afficher_icones_dans_footer() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'socialMedia';
  
    // Récupérer les icônes depuis la base de données
    $icones = $wpdb->get_results("SELECT icon_socialMedia, link_socialMedia FROM $table_name");
  
    if ($icones) {
        echo '<div class="footer-icons">';
        foreach ($icones as $icone) {
            // Afficher chaque icône dans une balise <i> avec la classe correspondante
            echo '<a href="'.esc_attr($icone->link_socialMedia).'"><i class="' . esc_attr($icone->icon_socialMedia) . '"></i></a>';
        }
        echo '</div>';
    }
  }
