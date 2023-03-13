<?php 
//header template
get_header(); ?>

<!--Site column-->
<div class="site-content clearfix">


    <!--Main column-->
    <div class="main-column">

        <?php 
// post template
if (have_posts()) :
    while (have_posts()) : the_post();

    get_template_part('content', get_post_format());
   
    endwhile;

    else :
        echo '<p>No content found!</p>';
        endif; ?>

    </div>
    <!--Main column-->

    <?php get_sidebar(); ?>

</div>
<!--Site column-->

<?php     
// footer template
get_footer();

?>