<?php
get_header();
?>
<section id="stagiaireHomepage" class="row-limit-size">
    <?php
$the_query = new WP_Query(array('post_type' => 'student'));

    if ($the_query->have_posts()) {
       
        while ($the_query->have_posts()) : $the_query->the_post();
 
    ?>
            <div id="roster">
                    <a href="<?php the_permalink(); ?>">
                    <figure class="picStagiaire">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <figcaption> <?= get_field('name').' '. get_field('lastname').' '.get_field('age').' '?> ans</figcaption>
                    </figure>
                </a>
            </div>
            <?php
                endwhile;
            } else {
                echo "<p>pas d'article</p>";
            }
    
            



    get_footer();
?>