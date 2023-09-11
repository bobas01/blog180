<?php
get_header();
?>

<main>
    <section id="about" class="row-limit-size">
        <article class="article">
            <h1>Promotion 180</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dicta dignissimos ad at quaerat,
                quod non! Nesciunt, culpa ut assumenda ad quidem rem praesentium recusandae esse, est labore,
                adipisci laudantium! Quidem sint atque quia porro esse hic nostrum, consequatur animi veritatis cum
                obcaecati doloremque suscipit fuga fugit corrupti consectetur. Et ipsam voluptatum non odio
                voluptate aspernatur. Laudantium tempora deleniti ipsa!</p>
        </article>
        <article class="article">
            <h1>Titre pro développeur web</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dicta dignissimos ad at quaerat,
                quod non! Nesciunt, culpa ut assumenda ad quidem rem praesentium recusandae esse, est labore,
                adipisci laudantium! Quidem sint atque quia porro esse hic nostrum, consequatur animi veritatis cum
                obcaecati doloremque suscipit fuga fugit corrupti consectetur. Et ipsam voluptatum non odio
                voluptate aspernatur. Laudantium tempora deleniti ipsa!</p>
        </article>

    </section>
    <section id="stagiaireHomepage" class="row-limit-size">
        <h1>Stagiaires</h1>
        <?php

        $the_query = new WP_Query(array(
            'post_type' => 'student',
           
        ));

        if ($the_query->have_posts()) {

            while ($the_query->have_posts()) : $the_query->the_post();

        ?>

                <div id="roster">
                    <a class="picStagiaire" href="<?php the_permalink(); ?>">
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

        ?>
    </section>
    <section id=actualityHomepage class="allArticle row-limit-size">
        <h1>Actualités</h1>
        <?php

        if (have_posts()) {
            $args = array(
                'posts_per_page' => 3
            );
            query_posts($args);
            while (have_posts()) : the_post();

        ?>
                <article class="articleActuality">
                    <figure><?php the_post_thumbnail('thumbnail'); ?>
                        <figcaption><span class="categorySpan"><?php the_category(', '); ?></span>&nbsp;<span class="date"><?php the_date(); ?></span>
                        </figcaption>
                    </figure>
                    <div class="txtArticleActuality">
                        <a class="linkArticle" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                        <p class="resumeArticle"><?php the_excerpt(); ?></p>
                        <p>Publié par <?php the_author(); ?></p>
                    </div>
                </article>

        <?php
            endwhile;
        } else {
            echo "<p>pas d'article</p>";
        }

        ?>

    </section>



    <?php
    get_footer();
