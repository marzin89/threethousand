<?php 
    // Inkludera sidhuvudet
    get_header(); 
?>
<!-- Kontakformulär -->
<section id="form">
    <?php 
        //  The loop
        // Om det finns inlägg
        if (have_posts()) :
            // Loopa igenom inläggen
            while (have_posts()) :
                // Hämta inlägget
                the_post();
    ?>
    <!-- Rubrik -->
    <h1 id="h1-form">
        <?php 
            // Skriv ut rubriken
            the_title(); 
        ?>
    </h1>
    <!-- Innehåll -->
    <?php 
        // Skriv ut innehållet
        the_content(); 
    ?>
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