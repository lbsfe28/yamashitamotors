<?php get_header();?>

<section id="product" class="wrapper">
        <h2 class="sec-title">Product</h2>
        <ul>
            <?php 
            $args = [
                'post_type' => ['post'],
                'posts_per_page' => -1
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
            <?php 
            endwhile;
            wp_reset_postdata();
            ?>
        </ul>
    </section>
    
    <p class="top_page"><a href="<?php echo esc_url(home_url('/'));?>">←TOP PAGE</a></p>

<?php get_footer();?>
