<?php
    // Inkludera sidhuvudet
    get_header();
?>
<section>
    <!--Nyheter-->
    <h1 class="h1-home">Nyheter</h1>
    <?php
        $count = 0;
        // The loop
        // Om det finns inlägg
        if (have_posts()) :
            // Loopa igenom inläggen
            while (have_posts()) :
                // Vartannat inlägg i varannan kolumn p.g.a. två kolumner på desktop
                if ($count % 2 == 0) {
                    // Hämta inlägget
                    the_post();
                    echo '<div class="row">';
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
                /* Stängningstagg om mindre än fem inlägg finns och det sista inlägget 
                hamnar till vänster */
                if (count_posts('Nyheter') < 5 && $count == (count_posts('Nyheter') - 1)) {
                    echo '</div>';
                // Stängningstagg efter det sista inlägget om fler än fem inlägg finns
                } else if (count_posts('Nyheter') >= 5 && $count == 4) {
                    echo '</div>';
                }
            } else if ($count % 2) {
                // Hämta inlägget
                the_post();
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
                    echo '</div>';
                }
            $count++;
        endwhile;
    endif;
    ?>
    <p id="more-news"><a href="">Fler nyheter</a></p>
</section>
<!-- Sidfot -->
<?php
    // Inkludera sidfoten       
    get_footer();
?>