            </div>
        </main>
        <!--Sidfot-->
        <footer>
            <!--Kontakt-->
            <ul id="footer-content">
                <li class="address">Skogsföretaget AB</li>
                <li class="address">Adressvägen 1</li>
                <li class="address">234 56 Postkontoret</li>
                <li class="phone">012-345 678</li>
                <li><a class="email-link" href="mailto:info@skogsab.nu">Maila oss</a></li>
            </ul>
        </footer>
    </div>
    <!--Lightbox och jQuery-->
    <script
		src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
    <script src="
        <?php 
            // Sökväg till JS
            bloginfo('template_url'); 
        ?>/js/main.js">
    </script>
    <?php 
        // Stöd för plugins
        wp_footer(); 
    ?>
</body>
</html>