<?php get_header();
    while(have_posts()) {
        the_post(); ?>
        <div class="main">
        <div class="featured_img" style="background-image: url('<?=the_post_thumbnail_url();?>');" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"></div>        
        <?php 
        the_content(); 
        ?>
        </div>
<?php }
get_footer();
?>