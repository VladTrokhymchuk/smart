<?php

function load_more_news() {
    $paged = ! empty( $_POST[ 'paged' ] ) ? $_POST[ 'paged' ] : 1;
    $posts_per_page = $_POST['post_per_page'];
  
    $args = array(
      'post_type' => 'news',
      'paged' => $paged,
      'posts_per_page' => $posts_per_page,
      'post_status'=> 'publish',
    );
  
    $query = new WP_Query( $args );
    $max_pages = $query->max_num_pages;
  
    ob_start();
    if( $query->found_posts != 0 ) {
      while ($query->have_posts()):$query->the_post(); ?>
        <a class="item_news <?php if(get_field('card_news_img_circle') == 'yes'): ?>circle--news<?php endif; ?>"
            href="<?php the_permalink(); ?>">

            <?php if (get_field('card_news_img')): $img = get_field('card_news_img');

                if (isMobile()) {
                    $size = 'medium';
                } else {
                    $size = 'large';
                } ?>

                <div class="news--img">
                    <img src="<?= esc_url($img['sizes'][$size]); ?>" alt="<?= esc_attr($img['alt']); ?>" />
                </div>
            <?php endif; ?>

            <div class="news--desc">
                <h3><?php the_title(); ?></h3>

                <?php if ( get_field('card_news_subtitle') ) : ?>
                    <p><?=get_field('card_news_subtitle'); ?></p>
                <?php endif; ?>
            </div>
        </a>
      <?php endwhile; wp_reset_postdata();
  
      $result = ['posts' => ob_get_contents(), 'max_pages' => $max_pages];
      ob_end_clean();
  
      print_r(json_encode($result));
    }
    die(); 
  }

  add_action('wp_ajax_load_more_news', 'load_more_news');
  add_action('wp_ajax_nopriv_load_more_news', 'load_more_news');