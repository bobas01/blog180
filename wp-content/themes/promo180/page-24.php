<?php
get_header();
?>
<section id="categoryList" class="row-limit-size">
<h1>Catégories</h1>
            <div id="categoryListContainer">
    <?php
   $excluded_category_id = 1;
  
    $categories = get_terms(array(
        'taxonomy' => 'category',
        'hide_empty' => false,
        'exclude' => array($excluded_category_id)
    ));

    foreach ($categories as $category) {
        
        $category_link = get_category_link($category->term_id);
        $category_name = $category->name;
        $category_description = $category->description;
        $category_thumbnail_id = get_field('thumbnailcategory', 'category_' . $category->term_id); 
        $size='thumbnail';

  
    ?>
        <div class="oneCategory">
            <a href=" <?= $category_link ?> ">
                <figure>
                 <img src="<?php echo $category_thumbnail_id; ?>" alt="">
                </figure>
                <article class="article">
                    <h2><?= $category_name ?></h2>
                    <p> <?= $category_description ?></p>
                </article>
            </a>
        </div>
    <?php
    }
    ?>
            </div>
</section>
<?php
get_footer();
