
<?php get_header();?>

    <div id="main">
        <picture>
            <img src="<?= get_theme_file_uri('img/picture.jpg'); ?>" alt="">
        </picture>
    </div>

    <section id="about" class="wrapper">
        <h2 class="sec-title">About</h2>
        <ul>
            <li>山下モータース株式会社</li>
            <li>宮崎市にて中古車販売を致しております。</li>
        </ul>
        <p>自社認証工場完備。<br>
            宮崎陸運支局認証工場6-1300。 <br>
            お買得中古車を多数取り揃えております。<br>
            車検・整備・板金塗装・メンテナンス等お任せ下さい。<br>
            また提携ロードサービス完備で、電話１本でもしもの時も安心です。<br>
            お買得中古車を多数取り揃えております。<br>
            是非ご来店下さい。
        </p>
        <div class="more"><a href="<?php echo esc_url(home_url('about'));?>">もっと見る</a></div>
    </section>

    <section id="product" class="wrapper">
        <h2 class="sec-title">Product</h2>
        <!-- <ul class="">
            <li><img src="<?= get_theme_file_uri('img/car1.jpg'); ?>" alt="car1"></li>
            <li><img src="<?= get_theme_file_uri('img/car2.jpg'); ?>" alt="car2"></li>
            <li><img src="<?= get_theme_file_uri('img/car3.jpg'); ?>" alt="car3"></li>
            <li><img src="<?= get_theme_file_uri('img/car4.jpg'); ?>" alt="product1"></li>
            <li><img src="<?= get_theme_file_uri('img/car5.jpg'); ?>" alt="product1"></li>
            <li><img src="<?= get_theme_file_uri('img/car6.jpg'); ?>" alt="product1"></li>
            <li><img src="<?= get_theme_file_uri('img/car7.jpg'); ?>" alt="product1"></li>
            <li><img src="<?= get_theme_file_uri('img/product4.jpg'); ?>" alt="product1"></li>
            <li><img src="<?= get_theme_file_uri('img/product1.jpg'); ?>" alt="product1"></li>
        </ul> -->
        <ul>
            <?php 
            $args = [
                'post_type' => ['post'],
                'posts_per_page' => 3
                ];
            $the_query = new WP_Query($args);
                while($the_query->have_posts()): 
                $the_query->the_post();
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <p><?php the_post_thumbnail('thumbnails'); ?></p>
                        <p class="product_title"><?php the_title(); ?></p>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
        <div class="more"><a href="<?php echo esc_url(home_url('product'));?>">もっと見る</a></div>
    </section>

    <!-- news -->
    <!-- <section id="news" class="wrapper">
        <h2 class="sec-title">News</h2>
        <dl>
            <dt>2023/8/18</dt>
            <dd>本サイトをリリースしました</dd>
            <dt>2023/8/18</dt>
            <dd>本サイトをリリースしました</dd>
            <dt>2023/8/18</dt>
            <dd>本サイトをリリースしました</dd>
            <dt>2023/8/18</dt>
            <dd>本サイトをリリースしました</dd>

        </dl>
    </section> -->
    <!-- news -->
    <section id="news" class="wrapper">
        <h2 class="sec-title">News</h2>
        <dl>
            <?php
	        $args = array(
	        'post_type' => 'news',
	        'showposts' => 5,
            ); ?>
            <?php $wp_query = new WP_Query( $args ); ?>
            <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>">
                <dt><?php echo get_the_date('y/m/d'); ?></dt>
                <dd><?php the_title(); ?></dd>
            </a>

             <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </dl>
        <p class="more"><a href="<?php echo esc_url(home_url('news'));?>">もっと見る</a></p>
    </section>
    
    <!-- Contact -->
    <section id="contact" class="wrapper">
        <h2 class="sec-title">Contact</h2>
        <p>お問い合わせは以下のフォームから</p>
        <!-- <form action="#" method="post">
            <dl>
                <dt><label for="name">お名前</label></dt>
                <dd><input type="text" id="name"></dd>
                <dt><label for="email">メールアドレス</label></dt>
                <dd><input type="email" id="email"></dd>
                <dt><label for="content">内容</label></dt>
                <dd><textarea id="content" cols="30" rows="10"></textarea></dd>
            </dl>
            <div class="button"><input type="submit" value="送信"></div>
        </form> -->
        <?php echo do_shortcode('[contact-form-7 id="f6bcf7e" title="コンタクトフォーム 1"]') ?>
    </section>
    <?php get_footer();?>