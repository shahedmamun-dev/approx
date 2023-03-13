<?php 
//header template
get_header();


// post template
if (have_posts()) : ?>

    <h2>Search results for: <?php the_search_query(); ?></h2>

<?php
    while (have_posts()) : the_post();

    get_template_part('content', get_post_format());
   
    endwhile;

    else :
        echo '<p>No content found!</p>';
        endif;

        
// footer template
get_footer();

?>