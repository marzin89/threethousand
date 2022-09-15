<?php 
    // Template Name: Undersida en kolumn med undernavigering till vänster
    // Inkludera sidhuvudet
    get_header(); 
?>
<section>
<?php
    // The loop
    // Om det finns inlägg
    if (have_posts()) :
        // Loopa igenom inläggen
        while (have_posts()) :
                // Hämta inlägget
                the_post();
?>
    <h1 id="h1-right" class="h1-articles">
        <?php 
            // Skriv ut huvudrubriken
            the_title(); 
        ?>
    </h1>
    <div class="column">
        <!-- Undernavigering -->
        <div class="subnav" id="subnav-left">
            <?php
                // Visa undernavigeringen
                wp_nav_menu(array('theme_location' => 'subnav',
                    'container' => 'nav',
                    'container_id' => 'subnav'));
            ?>
        </div>
        <!-- Inlägg -->
        <article id="post-content-right" class="post-content">
            <!--Bilder med Lightbox-bildvisning-->
            <?php
                // Om inlägget har en utvald bild
                if (has_post_thumbnail()) {
                    // Hämta sökvägen till bilden
                    $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    // Länk till bilden i full storlek
                    echo '<a class="content-images-mobile" href="' . $full_image_url[0] . '" title="' . the_title_attribute('echo=0') . '">';
                    // Skriv ut bilden, lägg till klass
                    the_post_thumbnail('mobil', array('class' => 'content-images-mobile'));
                    echo '</a>';
                    // Länk till bilden i full storlek
                    echo '<a class="content-images-desktop thumbnail-desktop-one-column" href="' . $full_image_url[0] . 
                    '" title="' . the_title_attribute('echo=0') . '">';
                    // Skriv ut bilden, lägg till klass
                    the_post_thumbnail('desktop', array('class' => 'content-images-desktop'));
                    echo '</a>';
                }
            ?>
            <!-- Datum -->
            <p class="date">
                <?php
                    // Skriv ut datumet 
                    the_date(); 
                ?>
            </p>
            <!-- Innehåll -->
            <div class="content">
                <?php
                    // Skriv ut innehållet
                    the_content();
                ?>
            </div>
        </article>
    </div>
    <?php
        endwhile;
    endif;
    ?>
</section>
<!-- Sidfot -->
<?php
    // Inkludera sidfoten
    get_footer(); 
?>