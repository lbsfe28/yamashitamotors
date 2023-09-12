<footer id="footer">
    <div class="logo_nav">
        <div class="footer_logo">
            <a href="<?php echo esc_url(home_url('/'));?>">
                <img src="<?= get_theme_file_uri('img/logo_claer.png'); ?>" alt="logo">
            </a>
        </div>
        <nav class="footer_nav">
            <ul>
                <li><a href="<?php echo esc_url(home_url('about'));?>">About</a></li>
                <li><a href="<?php echo esc_url(home_url('product'));?>">Product</a></li>
                <li><a href="<?php echo esc_url(home_url('news'));?>">News</a></li>
                <li><a href="<?php echo esc_url(home_url('contact'));?>">Contact</a></li>
                <li><a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a></li>
            </ul>
        </nav>
    </div>
    <div class="name_address">
        <p>&copy; YAMASHITA MOTORS</p>
        <!-- <p>宮崎県宮崎市〇〇〇〇〇〇〇〇〇 電話 <a href="tel:0120000000">0120-000-XXX </a>営業時間 11:00～20:00(日曜日定休)</p> -->
    </div>
    </footer>

    <?php wp_footer(); ?>

</body>

</html>