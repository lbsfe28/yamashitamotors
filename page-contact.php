<?php get_header();?>


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
<p class="top_page"><a href="<?php echo esc_url(home_url('/'));?>">←TOP PAGE</a></p>

<?php get_footer();?>