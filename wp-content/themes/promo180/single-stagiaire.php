<?php
get_header();

?>

<section id="detailsStagiaire" class="row-limit-size">
    <?php
    if (have_posts()) {
        $nom = get_post_meta(get_the_ID(), 'name', true);
        $prenom = get_post_meta(get_the_ID(), 'lastname', true);
        $age = get_post_meta(get_the_ID(), 'age', true);
        $portfolio = get_post_meta(get_the_ID(), 'portfolio', true);
        $linkedin = get_post_meta(get_the_ID(), 'linkedin', true);
        $github = get_post_meta(get_the_ID(), 'github', true);
        $prefer = get_post_meta(get_the_ID(), 'prefer', true);
        $difficulty = get_post_meta(get_the_ID(), 'difficulty', true);
        while (have_posts()) : the_post();

    ?>
            <h1>Fiche stagiaire</h1>
            <div class="detailsStagiaire">
                <figure class=picStagiaire><?php the_post_thumbnail('medium'); ?>
                    <figcaption>
                        <?php echo   $nom . ' ' . $prenom . ' ' . $age . ' ans'; ?>
                    </figcaption>
                </figure>
                <div class="txtStagiaire">
                    <article class="article">
                        <h2>Ses préférences</h2>
                        <p> <?php echo $prefer ?></p>
                    </article>
                    <article class="article">
                        <h2>Ses difficultés</h2>
                        <p><?php echo $difficulty ?></p>
                    </article>

                    <div class="linkStagiaire">
                        <article class="article">
                            <h2>Portfolio</h2>
                            <p>Aller voir ses projets sur   <a href="<?php echo $portfolio ?>" target="_blank"><strong><?php echo $portfolio ?></strong></a></p>
                                
                        </article>
                        <article class="article linkeGit">
                            <h2>Ses réseaux</h1>
                                <a href="<?php echo $github ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/asset/img/gitIcon.png" alt=""></a>
                                <a href="<?php echo $linkedin ?>" target="_blank" ><img src="<?php echo get_template_directory_uri() ?>/asset/img/linkedinIcon.png" alt=""></a>
                        </article>
                    </div>
                </div>

            </div>
    <?php
        endwhile;
    } else {
        echo "<p>Pas d'article trouvé.</p>";
    }
    ?>

</section>

<?php
get_footer();
?>