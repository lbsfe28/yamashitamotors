

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Destination" content="山下モータース">
    <link rel="stylesheet" href="<?= get_theme_file_uri('style.css'); ?>?0005">
    <!-- reset.css ress -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>YAMASHITA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <header id="header">
        <div class="flex">
            <h1 class="site-tittle">
                <a href="<?php echo esc_url(home_url('/'));?>">YAMASHITA MOTORS</a>
            </h1>
            <p class="logo">
                <a href="<?php echo esc_url(home_url('/'));?>">
                <img src="<?= get_theme_file_uri('img/logo.png'); ?>" alt="logo">
                </a>
            </p>
        </div>
        <nav>
            <ul>
                <li><a href="<?php echo esc_url(home_url('about'));?>">About</a></li>
                <li><a href="<?php echo esc_url(home_url('product'));?>">Product</a></li>
                <li><a href="<?php echo esc_url(home_url('news'));?>">News</a></li>
                <li><a href="<?php echo esc_url(home_url('contact'));?>">Contact</a></li>
                <li><a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram" style="color: #000000;"></i></a></li>
            </ul>
        </nav>
    </header>