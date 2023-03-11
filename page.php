<?php 
//header template
get_header();


// post template
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post page">

        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>

    </article>

    <?php endwhile;

    else :
        echo '<p>No content found!</p>';
        endif;

        
// footer template
get_footer();

?>