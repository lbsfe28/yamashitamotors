
<?php get_header();?>
    
    <div id="main">
        <?php while(have_posts()): the_post(); ?>

        <h2 class="sec-title"><?php the_title(); ?></h2>
        <p class="date"><?php the_date(); ?></p>
        <div><?php the_content(); ?></div>

        <?php endwhile; ?>
        <?php
  $h = $_SERVER['HTTP_HOST'];
  if (!empty($_SERVER['HTTP_REFERER']) && (strpos($_SERVER['HTTP_REFERER'],$h) !== false)) {
    echo '<a class="more-btn" href="' . $_SERVER['HTTP_REFERER'] . '">一覧に戻る</a>';
  }

?>
	

    </div>

    <p class="top_page"><a href="<?php echo esc_url(home_url('/'));?>">←TOP PAGE</a></p>

    <?php get_footer();?>