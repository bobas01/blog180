<?php
get_header();
?>
<section class="row-limit-size">
    <?php
    if (have_posts()) {
        while (have_posts()) : the_post();

    ?>
            <h1><?php the_title() ?></h1>
            <?php the_content(); ?>
</section>

<?php
        endwhile;
    }else {
        echo "<p>Pas de page trouvé.</p>";
    }



    get_footer();
?>