<?php
function page_gestion_reseaux_sociaux() {
  if (isset($_POST['submit'])) {
      $name_socialMedia = sanitize_text_field($_POST['name_socialMedia']);
      $link_socialMedia = esc_url($_POST['link_socialMedia']);
      $icon_socialMedia = sanitize_text_field($_POST['icon_socialMedia']);

      global $wpdb;
      $table_name = $wpdb->prefix . 'socialMedia';

      $wpdb->insert(
          $table_name,
          array(
              'name_socialMedia' => $name_socialMedia,
              'link_socialMedia' => $link_socialMedia,
              'icon_socialMedia' => $icon_socialMedia,
          )
      );
  }
  ?>

  <div class="wrap">
      <h2>Ajouter un Réseau Social</h2>

      <form method="post" action="" enctype="multipart/form-data">
          <label for="name_socialMedia">Nom du réseau :</label>
          <input type="text" name="name_socialMedia" id="name_socialMedia" required><br>

          <label for="link_socialMedia">Lien du réseau :</label>
          <input type="text" name="link_socialMedia" id="link_socialMedia" required><br>

          <label for="icon_socialMedia">Icône du réseau :</label>
          <select name="icon_socialMedia" id="icon_socialMedia" required>
              <option value="">Sélectionnez une icône</option>
              <option value="lni lni-facebook">Facebook</option>
              <option value="lni lni-twitter">Twitter</option>
              <option value="lni lni-instagram">Instagram</option>
              <option value="lni lni-tiktok">TikTok</option>
              <option value="lni lni-youtube">Youtube</option>
              <option value="lni lni-twitch">Twitch</option>
              <option value="lni lni-linkedin-original">Linkedin</option>
              <option value="lni lni-github-origina">Github</option>
              
          </select><br>

          <input type="submit" name="submit" value="Enregistrer">
      </form>
  </div>

  <?php
}




add_action('admin_menu', 'ajouter_menu_reseaux_sociaux');
