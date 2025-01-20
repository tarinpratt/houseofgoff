<?php get_header();
    while(have_posts()) {
        the_post(); ?>
        <h1><?= the_title(); ?></h1>
        <!-- just testing changes -->
        <h2>Here are the changes</h2>
        <?php the_content(); ?>
<?php }
get_footer();
?>