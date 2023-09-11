<?php
get_header();
?>

<section id=actualityHomepage class="allArticle row-limit-size">
        
        <?php

        if (have_posts()) {
            
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
