<?php 
//header template
get_header();


// post template
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_content(); ?></p>

    <?php endwhile;

    else :
        echo '<p>No content found!</p>';
        endif;

        
// footer template
get_footer();

?>