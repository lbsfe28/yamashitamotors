<?php get_header();?>


<section id="about" class="wrapper">


    <div id="main">
        <?php while(have_posts()): the_post(); ?>
        <h2 class="sec-title"><?php the_title(); ?></h2>
        <!-- <p class="date"><?php the_date(); ?></p> -->

        <div>
            <?php the_content(); ?>
        </div>

        <?php endwhile; ?>
        
    </div>
    <div class="contact_here">
        <a href="<?php echo esc_url(home_url('contact'));?>">コンタクトページはこちら</a>
    </div>
    

        <!-- <h2 class="sec-title">About</h2>

        <ul>
            <li>山下モータース株式会社</li>
            <li>宮崎市にて中古車販売を致しております。</li>
            <li>メールアドレス:motorsyamashita@gmail.com</li>
        </ul>
        <p>自社認証工場完備。宮崎陸運支局認証工場6-1300。 <br>
            お買得中古車を多数取り揃えております。<br>
            車検・整備・板金塗装・メンテナンス等お任せ下さい。<br>
            また提携ロードサービス完備で、電話１本でもしもの時も安心です。<br>
            お買得中古車を多数取り揃えております。<br>
            是非ご来店下さい。
        </p> -->
</section>

<p class="top_page"><a href="<?php echo esc_url(home_url('/'));?>">←TOP PAGE</a></p>

<?php get_footer();?>
