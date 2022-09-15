<?php 
    // Inkludera sidhuvudet
    get_header(); 
?>
<section>
    <div class="left-column">
        <!-- Inlägg/sida -->
        <article>
            <?php
                // Oförändrad the loop
                // Om det finns inlägg
                if (have_posts()) :
                    // Loopa igenom inläggen
                    while (have_posts()) :
                        // Hämta inlägget
                        the_post();
            ?>
            <!-- Rubrik -->
            <h1 class="h1-articles">
                <?php 
                    // Skriv ut huvudrubriken
                    the_title(); 
                ?>
            </h1>
            <!-- Datum -->
            <p class="date">
                <?php 
                    // Skriv ut datumet
                    the_date(); 
                ?>
            </p>
            <!-- Innehåll -->
            <?php
                // Skriv ut innehållet
                the_content();
            ?>
        </article>
    </div>
    <?php 
        endwhile;
    endif;
    ?>
</section>
<!-- Sidfot -->
<?php
    // Inkludera sidhuvudet
    get_footer(); 
?>