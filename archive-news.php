<?php get_header();?>

<section id="news" class="wrapper">
        <h2 class="sec-title">News</h2>
        <dl>
            <?php
	        $args = array(
	        'post_type' => 'news',
	        'showposts' => -1,
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
    </section>
    <p class="top_page"><a href="<?php echo esc_url(home_url('/'));?>">←TOP PAGE</a></p>

<?php get_footer();?>