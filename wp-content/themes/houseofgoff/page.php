<?php get_header();
    while(have_posts()) {
        the_post(); ?>
        <h1><?= the_title(); ?></h1>
        
        <?php 
        the_post_thumbnail();
        the_content(); 
        ?>
<?php }
get_footer();
?>