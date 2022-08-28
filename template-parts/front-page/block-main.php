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