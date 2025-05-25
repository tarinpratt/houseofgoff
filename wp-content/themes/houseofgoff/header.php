<!DOCTYPE html <?php language_attributes(); ?>>
<html>
    <head>
        <title>House of Goff | <?php the_title(); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Pinyon+Script&display=swap" rel="stylesheet">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://www.google.com/recaptcha/enterprise.js?render=6Lfy-EgrAAAAAAl19WcXQ3woyz913c_Zz43--sgc"></script>
        <?php wp_head(); ?>
        
    </head>
    <header>
        <div class="header_container">
        <div class="logo"><a href="/"><img src="/wp-content/uploads/2025/05/Hoppily-ever-After_circular-1.png" alt="hoppily ever after Tarin and Adam 11 14 25 logo" /></a></div>
        <nav class="desktop">
            <a href="/rsvp">RSVP</a>
            <a href="/in-the-area">In The Area</a>
            <a href="/our-story">Our Story</a>
        </nav>
        <div id="hamburger" class="mobile">
            <span></span>
            <span></span>
            <span></span>  
        </div>
        <nav class="mobile">
            <ul>
                <li><a href="/rsvp">RSVP</a></li>
                <li><a href="/in-the-area">In The Area</a></li>
                <li><a href="/our-story">Our Story</a></li>
            </ul>
        </nav>
        </div>
    </header>

    <?php $title = get_the_title(); 
          $title_cleaned = str_replace(' ', '_', $title);?>
    <body class="page_<?= strtolower($title_cleaned); ?>">

