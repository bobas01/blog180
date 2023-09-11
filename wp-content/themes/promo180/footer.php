</main>
<footer>
    <div id="footerHead">

        <h2>Recevoir les actualités du développement web</h2>
        <form action="" method="POST">
            <input type="email" name="email" id="email" placeholder="Votre mail">
            <input type="submit" name="submit" value="S'inscrire">
        </form>
    </div>
    <div class="footerWidget">
        <h2>Mes réseaux sociaux</h2>

        <?php afficher_icones_dans_footer(); ?>
        <?php dynamic_sidebar('footer1'); ?>
    </div>
</footer>

<?php wp_enqueue_script('main', get_template_directory_uri() . '/asset/js/main.js');
wp_enqueue_script('lineicons', 'https://cdn.lineicons.com/2.0/LineIcons.js', array(), null, true);
wp_footer(); ?>
</body>

</html>