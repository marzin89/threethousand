<?php
    // Inkludera sidhuvudet
    get_header(); 
?>
<section>
    <!--De två senaste nyheterna med Läs-mer-länkar-->
    <h1 class="h1-home">Senaste nytt</h1>
    <div id="post-wrapper">
        <?php
            $count = 0;
            // The loop
            // Eftersom startsidan är en statisk sida (Nyheter är inläggssida)
            $query = new WP_Query(array(
                'category_name' => 'Nyheter',
                'posts_per_page' => 2));
            // Om det finns inlägg
            if ($query->have_posts()) :
                // Loopa igenom inläggen
                while ($query->have_posts()) :
                    // Vartannat inlägg i varannan kolumn p.g.a. två kolumner på desktop
                    if ($count % 2 == 0) {
                        // Hämta inlägget
                        $query->the_post();
        ?>
        <div class="left-column">
            <!-- Inlägg -->
            <article>
                <!-- Rubrik -->
                <h2 class="article-headings">
                    <?php
                        // Skriv ut rubriken
                        the_title();
                    ?>
                </h2>
                <!-- Utvald bild -->
                <?php
                    // Om inlägget har en utvald bild
                    if (has_post_thumbnail()) {
                        // Skriv ut bilden, lägg till klass
                        the_post_thumbnail('mobile', array('class' => 'content-images-mobile'));
                        the_post_thumbnail('desktop', array('class' => 'content-images-desktop'));
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
                <?php
                    // Skriv ut innehållet i avkortad form
                    the_excerpt();                     
                ?>
                <!-- Länk till inlägget i helhet -->
                <a class="read-more" href="
                    <?php 
                        // Skriv ut länken till inlägget 
                        the_permalink();
                    ?>
                ">Läs mer</a>
            </article>
        </div>
        <?php
            } else if ($count % 2) {
                // Hämta inlägget
                $query->the_post();
        ?>
        <div class="right-column">
            <!-- Inlägg -->
            <article>
                <!-- Rubrik -->
                <h2 class="article-headings">
                    <?php
                        // Skriv ut rubriken
                        the_title();
                    ?>
                </h2>
                <!-- Utvald bild -->
                <?php
                    // Om inlägget har en utvald bild
                    if (has_post_thumbnail()) {
                        // Skriv ut bilden, lägg till klass
                        the_post_thumbnail('mobil', array('class' => 'content-images-mobile'));
                        the_post_thumbnail('desktop', array('class' => 'content-images-desktop'));
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
                <?php
                    // Skriv ut innehållet i avkortad form
                    the_excerpt();
                ?>
                <!-- Länk till inlägget i helhet -->
                <a class="read-more" href="
                    <?php 
                        // Skriv ut länken till inlägget 
                        the_permalink();
                    ?>
                ">Läs mer</a>
            </article>
        </div>
        <?php
                }
                $count++;
            endwhile;
        endif;
        ?>
    </div>
</section>
<!-- Widgetområde -->
<?php
    // Inkludera widgetområdet
    get_sidebar();
?>
<!-- Sidfot -->
<?php 
    // Inkludera sidfoten
    get_footer(); 
?>