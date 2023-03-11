<?php

/**
 * Template Name: Special Layout
 */

//header template
get_header();


// post template
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post page">

        <!--info box-->
        <div class="info-box">
            <h4>Disclaimer Title</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ipsum tenetur dolorem quisquam soluta ab dicta quos earum! Reprehenderit, itaque? Exercitationem aliquam esse molestiae maxime. Fugit vero nam commodi cum.</p>
        </div> <!--info box-->

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