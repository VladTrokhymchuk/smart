<?php
 /*
  * Template name: Home page
  * */
  get_header(); ?>

<?php 

if (isMobile()) {
    $size = 'medium';
    $med_lg = 'thumbnail';
    $med_lg_news = 'news_img';
    $med = 'thumbnail';
    $lg =   'medium_large';
  } elseif (isTablet() || !isMobile()) {
    $size = 'large';
    $med_lg = 'medium_large';
    $med_lg_news = 'medium_large';
    $med = 'medium';
    $lg =   'large';
  }
  $small = 'thumbnail';
?>

<section class="first_section section_targer beige_menu">
    <div class="head_box">
        <div class="head_box--content">
            <?php if ( get_field('first_desc') ) : ?>
            <p class="subtitle"><?php echo get_field('first_desc'); ?></p>
            <?php endif; ?>

            <?php if ( get_field('first_title') ) : ?>
            <h2 class="h2"><?php echo get_field('first_title'); ?></h2>
            <?php endif; ?>

            <?php if ( get_field('first_subtitle') ) : ?>
            <p><?php echo get_field('first_subtitle'); ?></p>
            <?php endif; ?>

            <?php if(!isTablet() && !isMobile()): ?>
            <div class="head_box--btn">
                <?php if( get_field('btn_link_product', 'options') ): $btn_link_product = get_field('btn_link_product', 'options');?>
                <a class="btn btn__red" anim="ripple" href="<?=esc_url( $btn_link_product['url'] ); ?>">
                    <span><?=esc_html( $btn_link_product['title'] ); ?></span>
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>

        <div class="head_box--img">
            <div class="bg__circle"></div>

            <div class="bg__circle__one">
                <?php $bg_circle_one = get_field('bg_circle_one', 'options'); 
                    if ($bg_circle_one):
                ?>
                <img src="<?= esc_url($bg_circle_one['sizes']['medium']); ?>"
                    alt="<?= esc_attr($bg_circle_one['alt']); ?>" />
                <?php endif; ?>
            </div>

            <div class="bg__circle__two">
                <?php $bg_circle_two = get_field('bg_circle_two', 'options'); 
                        if ($bg_circle_two):
                ?>
                <img src="<?= esc_url($bg_circle_two['sizes']['medium']); ?>"
                    alt="<?= esc_attr($bg_circle_two['alt']); ?>" />
                <?php endif; ?>
            </div>

            <div class="bg__circle__three">
                <?php $bg_circle_three = get_field('bg_circle_three', 'options'); 
                    if ($bg_circle_three):
                ?>
                <img src="<?= esc_url($bg_circle_three['sizes']['medium']); ?>"
                    alt="<?= esc_attr($bg_circle_three['alt']); ?>" />
                <?php endif; ?>
            </div>


            <?php if( have_rows('first_main_img') ): ?>
            <div class="img__product__items">
                <?php while( have_rows('first_main_img') ): the_row(); 
                    $image = get_sub_field('product_main_img');
                    $product_main_img = get_sub_field('product_main_img');
                    ?>

                <div class="item--img">
                    <?php if( $product_main_img ): ?>
                    <img src="<?=esc_url($product_main_img['url']) ?>" alt="<?=esc_attr($product_main_img['alt']); ?>">
                    <?php endif; ?>
                </div>

                <?php endwhile; ?>
            </div>
            <?php endif; ?>

        </div>
        <?php if(isMobile()): ?>
        <div class="head_box--btn">
            <?php if( get_field('btn_link_product', 'options') ): $btn_link_product = get_field('btn_link_product', 'options');?>
            <a class="btn btn__red" anim="ripple" href="<?=esc_url( $btn_link_product['url'] ); ?>">
                <span><?=esc_html( $btn_link_product['title'] ); ?></span>
            </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>

</section>



<section class="two_section section_targer light_menu">
    <div class="box_content">
        <?php if ( get_field('two_disp_title') ) : ?>
        <h1><?php echo get_field('two_disp_title'); ?></h1>
        <?php endif; ?>

        <?php if(isMobile()): ?>
        <?php if ( get_field('two_disp_desc') ) : ?>
        <p><?php echo get_field('two_disp_desc'); ?></p>
        <?php endif;
         endif; ?>

        <?php if(!isTablet() && !isMobile()): ?>
        <div class="picture">
            <?php $two_disp_img_one = get_field('two_disp_img_one'); 
                    if ($two_disp_img_one):
                ?>
            <img src="<?= esc_url($two_disp_img_one['sizes'][$size]); ?>"
                alt="<?= esc_attr($two_disp_img_one['alt']); ?>" />
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>

    <div class="box_img">
        <div class="box_img--items">
            <?php if(isMobile()): ?>
            <div class="picture">
                <?php $two_disp_img_one = get_field('two_disp_img_one'); 
                    if ($two_disp_img_one):
                ?>
                <img src="<?= esc_url($two_disp_img_one['sizes'][$size]); ?>"
                    alt="<?= esc_attr($two_disp_img_one['alt']); ?>" />
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>

        <div class="box_img--items">
            <div class="picture">
                <?php $two_disp_img_two = get_field('two_disp_img_two'); 
                if ($two_disp_img_two):
            ?>
                <img src="<?= esc_url($two_disp_img_two['sizes'][$size]); ?>"
                    alt="<?= esc_attr($two_disp_img_two['alt']); ?>" />
                <?php endif; ?>
            </div>

            <div class="picture_circle">
                <?php $two_disp_img_three = get_field('two_disp_img_three'); 
                if ($two_disp_img_three):
            ?>
                <img src="<?= esc_url($two_disp_img_three['sizes'][$size]); ?>"
                    alt="<?= esc_attr($two_disp_img_three['alt']); ?>" />
                <?php endif; ?>
            </div>

            <?php if(!isTablet() && !isMobile()): 
             if ( get_field('two_disp_desc') ) : ?>
            <p><?php echo get_field('two_disp_desc'); ?></p>

            <?php endif; 
            endif; ?>

            <?php if(!isTablet() && !isMobile()): ?>
            <div class="box_btn">
                <?php if( get_field('btn_link_product', 'options') ): $btn_link_product = get_field('btn_link_product', 'options');?>
                <a class="btn btn__white" anim="ripple" href="<?=esc_url( $btn_link_product['url'] ); ?>">
                    <span><?=esc_html( $btn_link_product['title'] ); ?></span>
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>

        <div class="box_img--items">
            <div class="picture">
                <?php $two_disp_img_four = get_field('two_disp_img_four'); 
                    if ($two_disp_img_four):
                ?>
                <img src="<?= esc_url($two_disp_img_four['sizes'][$size]); ?>"
                    alt="<?= esc_attr($two_disp_img_four['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php if(isMobile()): ?>
    <div class="box_btn">
        <?php if( get_field('btn_link_product', 'options') ): $btn_link_product = get_field('btn_link_product', 'options');?>
        <a class="btn btn__white" anim="ripple" href="<?=esc_url( $btn_link_product['url'] ); ?>">
            <span><?=esc_html( $btn_link_product['title'] ); ?></span>
        </a>
        <?php endif; ?>
    </div>
    <?php endif; ?>

</section>



<section class="three_section section_targer light_menu">
    <div class="box_items">
        <div class="box--left">

            <?php if ( get_field('three_disp_title') ||  get_field('three_disp_subtitle')) : ?>
            <h2 class="h1"><?php echo get_field('three_disp_title'); ?></h2>
            <p><?php echo get_field('three_disp_subtitle'); ?></p>
            <?php endif; ?>

            <?php if(!isTablet() && !isMobile()): ?>
            <div class="three_section--btn">
                <?php if( get_field('btn_link_catalog', 'options') ): $btn_link_catalog = get_field('btn_link_catalog', 'options');?>
                <a class="btn btn__white" anim="ripple" href="<?=esc_url( $btn_link_catalog['url'] ); ?>">
                    <span><?=esc_html( $btn_link_catalog['title'] ); ?></span>
                </a>
                <?php endif; ?>
            </div>


            <div class="btn_box_swiper">
                <div class="swiper-button-prev">
                    <?php $icon_arrow_swip = get_field('icon_arrow_swip', 'options'); 
                                 if ($icon_arrow_swip):
                                ?>
                    <img src="<?= esc_url($icon_arrow_swip['sizes'][$med]); ?>"
                        alt="<?= esc_attr($icon_arrow_swip['alt']); ?>" />
                    <?php endif; ?>
                </div>

                <div class="swiper-button-next">
                    <?php $icon_arrow_swip = get_field('icon_arrow_swip', 'options'); 
                                 if ($icon_arrow_swip):
                                ?>
                    <img src="<?= esc_url($icon_arrow_swip['sizes'][$med]); ?>"
                        alt="<?= esc_attr($icon_arrow_swip['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <div class="box--right">
            <!-- Swiper -->
            <div class="swiper popular-product">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="item_product">
                            <div class="product--img">
                                <?php $img_test = get_field('img_test', 'options'); 
                                 if ($img_test):
                                ?>
                                <img src="<?= esc_url($img_test['sizes'][$size]); ?>"
                                    alt="<?= esc_attr($img_test['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="product--desc">
                                <p class="strong">Емульсія для тіла</p>
                                <p class="light">200 мл</p>
                            </div>

                            <a href="#" class="btn__arrow">Детальніше
                                <span>
                                    <?php $icon_arrow_next = get_field('icon_arrow_next', 'options'); 
                                 if ($icon_arrow_next):
                                ?>
                                    <img src="<?= esc_url($icon_arrow_next['sizes'][$size]); ?>"
                                        alt="<?= esc_attr($icon_arrow_next['alt']); ?>" />
                                    <?php endif; ?>
                                </span>
                            </a>

                            <div class="new_product_stick">
                                <span class="subtitle">Новинка</span>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                    <div class="swiper-slide">
                        <div class="item_product">
                            <div class="product--img">
                                <?php $img_test = get_field('img_test', 'options'); 
                                 if ($img_test):
                                ?>
                                <img src="<?= esc_url($img_test['sizes'][$size]); ?>"
                                    alt="<?= esc_attr($img_test['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="product--desc">
                                <p class="strong">Емульсія для тіла</p>
                                <p class="light">200 мл</p>
                            </div>


                            <a href="#" class="btn__arrow">Детальніше
                                <span>
                                    <?php $icon_arrow_next = get_field('icon_arrow_next', 'options'); 
                                 if ($icon_arrow_next):
                                ?>
                                    <img src="<?= esc_url($icon_arrow_next['sizes'][$size]); ?>"
                                        alt="<?= esc_attr($icon_arrow_next['alt']); ?>" />
                                    <?php endif; ?>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item_product">
                            <div class="product--img">
                                <?php $img_test = get_field('img_test', 'options'); 
                                 if ($img_test):
                                ?>
                                <img src="<?= esc_url($img_test['sizes'][$size]); ?>"
                                    alt="<?= esc_attr($img_test['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="product--desc">
                                <p class="strong">Емульсія для тіла</p>
                                <p class="light">200 мл</p>
                            </div>

                            <a href="#" class="btn__arrow">Детальніше
                                <span>
                                    <?php $icon_arrow_next = get_field('icon_arrow_next', 'options'); 
                                 if ($icon_arrow_next):
                                ?>
                                    <img src="<?= esc_url($icon_arrow_next['sizes'][$size]); ?>"
                                        alt="<?= esc_attr($icon_arrow_next['alt']); ?>" />
                                    <?php endif; ?>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item_product">
                            <div class="product--img">
                                <?php $img_test = get_field('img_test', 'options'); 
                                 if ($img_test):
                                ?>
                                <img src="<?= esc_url($img_test['sizes'][$size]); ?>"
                                    alt="<?= esc_attr($img_test['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="product--desc">
                                <p class="strong">Емульсія для тіла</p>
                                <p class="light">200 мл</p>
                            </div>

                            <a href="#" class="btn__arrow">Детальніше
                                <span>
                                    <?php $icon_arrow_next = get_field('icon_arrow_next', 'options'); 
                                 if ($icon_arrow_next):
                                ?>
                                    <img src="<?= esc_url($icon_arrow_next['sizes'][$size]); ?>"
                                        alt="<?= esc_attr($icon_arrow_next['alt']); ?>" />
                                    <?php endif; ?>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item_product"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item_product"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item_product"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item_product"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item_product"></div>
                    </div>
                </div>


                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->

            </div>
            <!-- Swiper end -->
            <div class="swiper-scrollbar"></div>
        </div>

        <?php if(isMobile()): ?>
        <div class="three_section--btn">
            <?php if( get_field('btn_link_catalog', 'options') ): $btn_link_catalog = get_field('btn_link_catalog', 'options');?>
            <a class="btn btn__white" anim="ripple" href="<?=esc_url( $btn_link_catalog['url'] ); ?>">
                <span><?=esc_html( $btn_link_catalog['title'] ); ?></span>
            </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php get_template_part('./template-parts/block-where-buy'); ?>

<section class="five_section section_targer light_menu">
    <div class="left_box">
        <?php if (get_field('five_disp_title') || get_field('five_disp_title') ||  get_field('five_disp_subtitle')) : ?>
        <p class="subtitle"><?php echo get_field('five_disp_sup_title'); ?></p>
        <h2 class="h1"><?php echo get_field('five_disp_title'); ?></h2>
        <div class="content">
            <?php echo get_field('five_disp_subtitle'); ?>
        </div>
        <?php endif; ?>

        <?php if(!isTablet() && !isMobile()): ?>
        <div class="five_section--btn">
            <?php if( get_field('five_disp_link_one') ): $five_disp_link_one = get_field('five_disp_link_one');?>
            <a class="btn btn__white" anim="ripple" href="<?=esc_url( $five_disp_link_one['url'] ); ?>">
                <span><?=esc_html( $five_disp_link_one['title'] ); ?></span>
            </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>

    <div class="right_box">
        <div class="items_img">
            <?php $five_disp_img_one = get_field('five_disp_img_one'); 
                    $five_disp_img_two = get_field('five_disp_img_two');
                    $five_disp_img_three = get_field('five_disp_img_three');
                    $five_disp_img_four = get_field('five_disp_img_four');

                if ($five_disp_img_one || $five_disp_img_two ||  $five_disp_img_three || $five_disp_img_four):
            ?>
            <div class="picture">
                <img src="<?= esc_url($five_disp_img_one['sizes'][$size]); ?>"
                    alt="<?= esc_attr($five_disp_img_one['alt']); ?>" />
            </div>

            <div class="picture">
                <img src="<?= esc_url($five_disp_img_two['sizes'][$size]); ?>"
                    alt="<?= esc_attr($five_disp_img_two['alt']); ?>" />
            </div>
            <div class="picture">
                <img src="<?= esc_url($five_disp_img_three['sizes'][$size]); ?>"
                    alt="<?= esc_attr($five_disp_img_three['alt']); ?>" />
            </div>
            <div class="picture">
                <img src="<?= esc_url($five_disp_img_four['sizes'][$size]); ?>"
                    alt="<?= esc_attr($five_disp_img_four['alt']); ?>" />
            </div>
            <?php endif; ?>
        </div>
    </div>

    <?php if(isMobile()): ?>
    <div class="five_section--btn">
        <?php if( get_field('five_disp_link_one') ): $five_disp_link_one = get_field('five_disp_link_one');?>
        <a class="btn btn__white" anim="ripple" href="<?=esc_url( $five_disp_link_one['url'] ); ?>">
            <span><?=esc_html( $five_disp_link_one['title'] ); ?></span>
        </a>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</section>

<section class="six_section section_targer light_menu">
    <div class="left_box">
        <?php if (get_field('six_disp_title') || get_field('six_disp_title') ||  get_field('six_disp_subtitle')) : ?>
        <p class="subtitle"><?php echo get_field('six_disp_sup_title'); ?></p>
        <h2 class="h1"><?php echo get_field('six_disp_title'); ?></h2>
        <div class="content">
            <?php echo get_field('six_disp_subtitle'); ?>
        </div>
        <?php endif; ?>

        <?php if(!isTablet() && !isMobile()): ?>
        <div class="six_section--btn">
            <?php if( get_field('six_disp_link_one') ): $six_disp_link_one = get_field('six_disp_link_one');?>
            <a class="btn btn__white" anim="ripple" href="<?=esc_url( $six_disp_link_one['url'] ); ?>">
                <span><?=esc_html( $six_disp_link_one['title'] ); ?></span>
            </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>

    <div class="right_box">
        <div class="items_img">
            <?php $six_disp_img_one = get_field('six_disp_img_one'); 
                    $six_disp_img_two = get_field('six_disp_img_two');
                    $six_disp_img_three = get_field('six_disp_img_three');
                    $six_disp_img_four = get_field('six_disp_img_four');

                if ($six_disp_img_one || $six_disp_img_two ||  $six_disp_img_three):
            ?>
            <div class="picture">
                <img src="<?= esc_url($six_disp_img_one['sizes'][$size]); ?>"
                    alt="<?= esc_attr($six_disp_img_one['alt']); ?>" />
            </div>

            <div class="picture">
                <img src="<?= esc_url($six_disp_img_two['sizes'][$size]); ?>"
                    alt="<?= esc_attr($six_disp_img_two['alt']); ?>" />
            </div>
            <div class="picture">
                <img src="<?= esc_url($six_disp_img_three['sizes'][$size]); ?>"
                    alt="<?= esc_attr($six_disp_img_three['alt']); ?>" />
            </div>
            <?php endif; ?>
        </div>
    </div>

    <?php if(isMobile()): ?>
    <div class="six_section--btn">
        <?php if( get_field('six_disp_link_two') ): $six_disp_link_two = get_field('six_disp_link_two');?>
        <a class="btn btn__white" anim="ripple" href="<?=esc_url( $six_disp_link_two['url'] ); ?>">
            <span><?=esc_html( $six_disp_link_two['title'] ); ?></span>
        </a>
        <?php endif; ?>
    </div>
    <?php endif; ?>

</section>


<section class="blog section_targer light_menu">
    <div class="wrap">
        <div class="blog--desc">
            <p class="subtitle">наш блог</p>
            <h2 class="h1">Корисні поради</h2>
        </div>
        <div class="blog--box">
            <!-- Swiper -->
            <div class="swiper blog-news">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="item_news">
                            <div class="news--img">
                                <?php $img_test_2 = get_field('img_test_2', 'options'); 
                                 if ($img_test_2):
                                ?>
                                <img src="<?= esc_url($img_test_2['sizes'][$size]); ?>"
                                    alt="<?= esc_attr($img_test_2['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="news--desc">
                                <h3>Що таке атопія шкіри та як з нею боротися</h3>
                                <p>Після очищення необхідне зволоження шкіри. Особливо потребує зволоження суха та
                                    чутлива
                                    шкіра. </p>
                            </div>



                            
                        </div>
                        <!--  -->
                    </div>
                    <div class="swiper-slide">
                        <div class="item_news item_news_circle">
                            <div class="news--img">
                                <?php $img_test_3 = get_field('img_test_3', 'options'); 
                                 if ($img_test_3):
                                ?>
                                <img src="<?= esc_url($img_test_3['sizes'][$size]); ?>"
                                    alt="<?= esc_attr($img_test_3['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="news--desc">
                                <h3>10 міфів про купання немовлят</h3>
                                <p>Після очищення необхідне зволоження шкіри. Особливо потребує зволоження суха та
                                    чутлива
                                    шкіра. </p>
                            </div>



                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item_news">
                            <div class="news--img">
                                <?php $img_test_2 = get_field('img_test_2', 'options'); 
                                 if ($img_test_2):
                                ?>
                                <img src="<?= esc_url($img_test_2['sizes'][$size]); ?>"
                                    alt="<?= esc_attr($img_test_2['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="news--desc">
                                <h3>10 міфів про купання немовлят</h3>
                                <p>Після очищення необхідне зволоження шкіри. Особливо потребує зволоження суха та
                                    чутлива
                                    шкіра. </p>
                            </div>


                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item_news">
                            <div class="news--img">
                                <?php $img_test_2 = get_field('img_test_2', 'options'); 
                                 if ($img_test_2):
                                ?>
                                <img src="<?= esc_url($img_test_2['sizes'][$size]); ?>"
                                    alt="<?= esc_attr($img_test_2['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="news--desc">
                                <h3>Що таке атопія шкіри та як з нею боротися</h3>
                                <p>Після очищення необхідне зволоження шкіри. Особливо потребує зволоження суха та
                                    чутлива
                                    шкіра. </p>
                            </div>


                        </div>
                    </div>

                </div>


                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->

            </div>
            <!-- Swiper end -->
            <?php if(isMobile()): ?>
            <div class="swiper-scrollbar"></div>
            <?php endif; ?>
        </div>
    </div>

    <div class="wrap blog--bottom">
    
        <div class="">
            <?php if( get_field('test_link_news', 'options') ): $test_link_news = get_field('test_link_news', 'options');?>
            <a class="btn btn__white" anim="ripple" href="<?=esc_url( $test_link_news['url'] ); ?>">
                <span><?=esc_html( $test_link_news['title'] ); ?></span>
            </a>
            <?php endif; ?>
        </div>
        <?php if(!isTablet() && !isMobile()): ?>
        <div class="btn_box_swiper">
            <div class="swiper-button-prev">
                <?php $icon_arrow_swip = get_field('icon_arrow_swip', 'options'); 
                                 if ($icon_arrow_swip):
                                ?>
                <img src="<?= esc_url($icon_arrow_swip['sizes'][$med]); ?>"
                    alt="<?= esc_attr($icon_arrow_swip['alt']); ?>" />
                <?php endif; ?>
            </div>

            <div class="swiper-button-next">
                <?php $icon_arrow_swip = get_field('icon_arrow_swip', 'options'); 
                                 if ($icon_arrow_swip):
                                ?>
                <img src="<?= esc_url($icon_arrow_swip['sizes'][$med]); ?>"
                    alt="<?= esc_attr($icon_arrow_swip['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>

</section>

<?php get_footer(); ?>