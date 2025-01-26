<?php get_header();
    while(have_posts()) {
        the_post(); ?>
        <h1><?= the_title(); ?></h1>
        <div class="featured_img" style="background-image: url('<?=the_post_thumbnail();?>');"></div>        
        <?php 
        the_content(); 
        ?>
<?php }
get_footer();
?>