
<?php
get_header();
?>
        
        <section id="exempleArticle" class="row-limit-size">
            <?php 
            if (have_posts()) {
                while (have_posts()) : the_post();
        
            ?>
            <h1><?php the_title() ?></h1>
            <article class="article">
                <figure><?php the_post_thumbnail('full'); ?></figure>
            <figcaption><span class="categorySpan"><?php the_category( ', ' ); ?></span>&nbsp;<span class="date"><?php the_date(); ?></span>
                    </figcaption>
                    <div class="postContent">
                        <?php the_content(); ?>
                        <p>Publié par <?php the_author(); ?> le <?php echo get_the_date(); ?></p>
                    </div>
            </article>
            
            <?php
            endwhile;
        } else {
            echo "<p>Pas d'article trouvé.</p>";
        }
        ?>
           <div id="buton">
                <button>Partager l'article</button>
                <button>Publier un commentaire</button>
                
            </div>
        </section>

        <?php
get_footer();
?>
  