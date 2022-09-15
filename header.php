<!DOCTYPE html>
<html 
    <?php 
        // Aktuellt språk
        language_attributes(); 
    ?>>
<head>
    <!-- Aktuell teckenuppsättning -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            // Sidans namn
            bloginfo('name'); 
        ?>
    </title>
    <link rel="stylesheet" href="
        <?php 
            // Sökväg till css
            bloginfo('stylesheet_url'); 
        ?>">
    <!--Favicon-->
    <link rel="icon" href="
        <?php 
            // Sökväg till temat
            bloginfo('template_url'); 
        ?>/bilder/favicon/favicon.png" type="img/png" sizes="16x16">
    <?php
        // Stöd för plugins
        wp_head(); 
    ?>
</head>
<body>
    <div id="page-wrapper">
        <!--Sidhuvud-->
        <header>
            <!--Logga-->
            <div id="logo-mobile">
                <a href="
                    <?php 
                        // Sökväg till startsidan
                        bloginfo('wpurl'); 
                    ?>">
                    <img src="
                        <?php
                            // Sökväg till loggan (mobil) 
                            bloginfo('template_url'); 
                        ?>/bilder/logo/logo-mobil.png" alt="Logotyp som består av grön text och två granar">
                </a>
            </div>
            <a id="logo-desktop" href="
                    <?php 
                        // Sökväg till startsidan
                        bloginfo('wpurl'); 
                    ?>">
                    <img src="
                        <?php 
                            // Sökväg till loggan (desktop)
                            bloginfo('template_url'); 
                        ?>/bilder/logo/logo-desktop.png" alt="Logotyp som består av grön text och två granar">
            </a>
            <!--Sökfunktion-->
            <div id="search">
                <input id="search-box" type="search" value="Sök">
                <svg id="search-icon" width="30" height="30">
                    <circle cx="16" cy="13" r="8" stroke="black" stroke-width="4" fill="none"/>
                    <line x1="5" x2="10" y1="26" y2="20" style="stroke: rgb(0, 0, 0); stroke-width: 4"/>
                </svg>
            </div>
            <!--Hamburgerikon-->
            <div id="mobile-nav">
                <svg id="hamburger-icon" width="50" height="35">
                    <line x1="5" x2="45" y1="7" y2="7" style="stroke: rgb(0, 0, 0); stroke-width: 5"/>
                    <line x1="5" x2="45" y1="17" y2="17" style="stroke: rgb(0, 0, 0); stroke-width: 5"/>
                    <line x1="5" x2="45" y1="27" y2="27" style="stroke: rgb(0, 0, 0); stroke-width: 5"/>
                </svg>
            </div>
            <!--Navigeringslänkar-->
            <?php
                // Visa meny
                wp_nav_menu(array('theme_location' => 'main-nav',
                'container' => 'nav',
                'container_id' => 'main-nav'));
            ?>
        </header>
        <!--Innehåll-->
        <main>
            <!--"Headerbild"-->
            <div id="header-image">
                <p id="welcome">Välkommen till Skog AB</p>
            </div>
            <div id="content-wrapper">