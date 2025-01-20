<!DOCTYPE html <?php language_attributes(); ?>>
<html>
    <head>
        <title>House of Goff | <?php the_title(); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
        
    </head>
    <?php $title = get_the_title(); 
          $title_cleaned = str_replace(' ', '_', $title);?>
    <body class="page_<?= strtolower($title_cleaned); ?>">

