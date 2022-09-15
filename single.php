<?php
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
            // Lagra innehållet i en variabel
            $content = get_the_content();
            // Dela upp i en array med "stycken"
            $content = explode('<p>', $content);
?>
    <!-- Rubrik -->
    <h1 class="h1-articles">
        <?php 
            // Skriv ut rubriken
            the_title(); 
        ?>
    </h1>
    <div class="column">
        <!-- Inlägg -->
        <article>
            <div class="row">
                <div class="right-column">
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
                            echo '<a class="content-images-desktop" href="' . $full_image_url[0] . '" title="' . the_title_attribute('echo=0') . '">';
                            // Skriv ut bilden, lägg till klass
                            the_post_thumbnail('desktop', array('class' => 'content-images-desktop'));
                            echo '</a>';
                        }
                    ?>
                </div>
                <div class="left-column">
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
                            // Skriv ut första stycket
                            echo '<p>' . $content[1];
                        ?>
                    </div>
                </div>
            </div>
            <?php
                // Skriv ut resten av innehållet med start vid andra "stycket" i varannan kolumn
                $i = 2;
                // Loopa igenom arrayen med "stycken"
                while ($i <= count($content) - 1) {
                    // Här lagras innehållet vid varje iteration
                    $return = '';
                    // Vänster kolumn
                    if ($i < count($content) - 1 && $i % 2 == 0) {
                        $return = '<div class="row"><div class="left-column content"><p>';
                        $return .= $content[$i];
                        $return .= '</div>';
                    // Höger kolumn med stängningstagg
                    } else if ($i < count($content) - 1 && $i % 2) {
                        $return = '<div class="right-column content"><p>';
                        $return .= $content[$i];
                        $return .= '</div></div>';
                    // Vänster kolumn med stängningstagg om detta är sista "stycket"
                    } else if ($i == count($content) - 1 && (count($content) - 1) % 2 == 0) {
                        $return = '<div class="row"><div class="left-column content"><p>';
                        $return .= $content[$i];
                        $return .= '</div></div>';
                    // Höger kolumn med stängningstagg (sista "stycket")
                    } else if ($i == count($content) - 1 && (count($content) - 1) % 2) {
                        $return = '<div class="right-column content"><p>';
                        $return .= $content[$i];
                        $return .= '</div></div>';
                    }
                    $i++;
                    echo $return;
                }
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