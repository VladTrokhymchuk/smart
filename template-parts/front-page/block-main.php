<section class="front-head-section">
    <div class="front-head__bg">
        <?php if(isTablet() || !isMobile()): ?>
        <?php if ( get_field('head_bg', 'options') ) : $head_bg = get_field('head_bg', 'options'); ?>
        <img src='<?=esc_url($head_bg['sizes'][isMobile() ? 'medium_large' : 'full_hd'] ); ?>'
            alt='<?=esc_attr($head_bg['alt']); ?>'>
        <?php endif; endif;?>
    </div>

    <div class="container">
        <div class="front-head__info">
            <h1><?php the_field('title'); ?></h1>
            <p><?php the_field('subtitle'); ?></p>
        </div>
    </div>
</section>

<section class="front-advice-section">
    <div class="container">
        <div class="front-advice__box">
            <div class="front-advice__contact">
                <?php get_template_part('./template-parts/block/block-contact'); ?>
            </div>

            <div class="front-advice__info">
                <div class="front-advice__info__top">
                    <ul>
                        <?php if( have_rows('info') ): while( have_rows('info') ): the_row(); ?>
                        <li>
                            <div class="icon">
                                <?php
                                $img_icon = get_sub_field('info_icon');
                                $svg_icon = file_get_contents( get_attached_file( $img_icon['ID'] ) );
                                echo $svg_icon;
                            ?>
                            </div>
                            <span><?php the_sub_field('info_span'); ?></span>
                        </li>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
                <div class="front-advice__info__cont">
                    <?php the_field('advice_info'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="front-program-section">
    <div class="container">
        <div class="front-program__title">
            <h3><?php the_field('program_title'); ?></h3>
        </div>

        <div class="front-program__info">
            <ul>
                <?php if( have_rows('programa') ): while( have_rows('programa') ): the_row(); ?>
                <li>
                    <div class="icon">
                        <?php
                            $programa_icon = get_sub_field('programa_icon');
                            $svg_icon_prog = file_get_contents( get_attached_file( $programa_icon['ID'] ) );
                            echo $svg_icon_prog;
                        ?>
                    </div>
                    <p><?php the_sub_field('programa_desc'); ?></p>
                </li>
                <?php endwhile; endif; ?>
            </ul>
        </div>
    </div>
</section>

<section class="front-speaker-section">
    <div class="container">

        <div class="front-speaker__box">
            <div class="front-speaker__title">
                <h3><?php the_field('speaker_title'); ?></h3>
            </div>

            <div class="front-speaker__info">
                <?php
                    $featured_posts = get_field('speakers');
                    if( $featured_posts ): ?>
                <ul>
                    <?php foreach( $featured_posts as $post ): 
                        setup_postdata($post); 
                    ?>
                    <li>
                        <div class="front-speaker__info__img">
                            <?php if ( get_field('img_speaker') ) : $img_speaker = get_field('img_speaker'); ?>
                            <img src='<?=esc_url($img_speaker['url']) ?>' alt='<?=esc_attr($img_speaker['alt']); ?>'>
                            <?php endif; ?>
                        </div>

                        <div class="front-speaker__info__cont">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p><?php the_field( 'desc_speaker' ); ?></p>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <?php 
                wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="front-events-section">
    <div class="container">
        <div class="front-events__box">
            <div class="front-events__title">
                <h3><?php the_field('events_title'); ?></h3>
                <?php if( get_field('events_more') ): $events_more = get_field('events_more');?>
                <a href='<?=esc_url( $events_more['url'] ); ?>'> <?=esc_html( $events_more['title'] ); ?> </a>
                <?php endif; ?>
            </div>

            <div class="front-events__info">
                <?php
                    $featured_posts_events = get_field('events');
                    if( $featured_posts_events ): ?>
                <ul>
                    <?php foreach( $featured_posts_events as $post ): 
                        setup_postdata($post); 
                    ?>
                    <li>
                        <div class="front-events__info__img">
                            <?php if ( get_field('img_events') ) : $img_events = get_field('img_events'); ?>
                            <img src='<?=esc_url($img_events['url']) ?>' alt='<?=esc_attr($img_events['alt']); ?>'>
                            <?php endif; ?>
                            <span><?php the_field('sticker_events'); ?></span>
                        </div>

                        <div class="front-events__info__cont">
                            <?php 
                                $date_string = get_field('data_events');
                                $date = DateTime::createFromFormat('Ymd', $date_string);
                            ?>
                            <p class="front-events__info__cont__date"><?php echo $date->format('j'); ?>
                                <span><?php echo $date->format('M'); ?></span>
                            </p>

                            <p class="front-events__info__cont__uptitle"><?php the_field('nadzagolovok'); ?></p>
                            <a class="front-events__info__cont__title"
                                href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p class="front-events__info__cont__desc"><?php the_field( 'desc_events' ); ?></p>

                            <ul class="front-events__info__cont__tag">
                                <?php 
                                    $terms = wp_get_post_terms($post->ID, 'events-types', array("fields" => "all"));
                                    $services_page_obj = get_page_by_path( 'events' );
                                    $services_link = get_permalink( $services_page_obj );
                                ?>
                                <?php foreach($terms as $term): ?>
                                <li>
                                    <a href="<?= $services_link . '#' . $term->slug ?>">
                                        <?= $term->name; ?>
                                    </a>
                                </li>
                                <?php endforeach;  ?>
                            </ul>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <?php 
                wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>