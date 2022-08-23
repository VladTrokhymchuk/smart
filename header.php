
<!DOCTYPE html>
<html lang="<?php echo ICL_LANGUAGE_CODE; ?>">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
    <script type="text/javascript">
      var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
    </script>
	</head>

  <body <?php body_class( $class ) ?>>

    <header class="header">
        <div class="wrap">
            <div class="main__nav">

            
                <?php 
                  $img_logo = get_field('img_logo', 'options');
                  if ($img_logo):
                    $link = get_field('logo_link', 'options');
                ?>
                  <a class="header__logo" href='<?=esc_url( $link['url'] ); ?>'>       
                    <img src="<?= esc_url($img_logo['sizes']['medium']); ?>" alt="<?= esc_attr($img_logo['alt']); ?>" />
                </a>
                <?php endif; ?>

                <nav class="header__nav">
                    <div class='navbar'>
                    <div class="navbar--circle"></div>

                    <?php if (get_field('search_title_btn', 'options')) : ?>
                        <button class="btn_search">
                            <span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M16.3703 9.45238C16.3703 13.2737 13.2725 16.3715 9.45115 16.3715C5.62983 16.3715 2.53203 13.2737 2.53203 9.45238C2.53203 5.63105 5.62983 2.53325 9.45115 2.53325C13.2725 2.53325 16.3703 5.63105 16.3703 9.45238Z" stroke="#153049" stroke-width="1.4"/>
                                 <line y1="-0.7" x2="8.68714" y2="-0.7" transform="matrix(0.70711 0.707104 -0.70711 0.707104 13.75 14.6667)" stroke="#153049" stroke-width="1.4"/>
                                </svg>
                            </span>
                            <span class="subtitle"><?= get_field('search_title_btn', 'options'); ?></span>
                        </button>
                    <?php endif; ?>

                    <?php wp_nav_menu(array( 'theme_location' => 'header-top', 'menu_class' => 'menu' )); ?>

                    <?php if (get_field('btn_text', 'options')) : ?>
                        <button class="btn btn__white cd-popup-trigger" anim="ripple">
                            <span><?= get_field('btn_text', 'options'); ?></span>
                        </button>
                    <?php endif; ?>
                    

                        <div class="wpml-ls-statics-shortcode_actions wpml-ls wpml-ls-legacy-list-horizontal">
                            <ul>
                                <li
                                    class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-uk wpml-ls-current-language wpml-ls-first-item wpml-ls-item-legacy-list-horizontal">
                                    <a href="#" class="wpml-ls-link">
                                        <span class="wpml-ls-native" lang="ru">Ru</span></a>
                                </li>
                                <li
                                    class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-en wpml-ls-last-item wpml-ls-item-legacy-list-horizontal">
                                    <a href="#" class="wpml-ls-link">
                                        <span class="wpml-ls-native" >Ua</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>


                  <!-- <div class="header__lang"> -->
                
                    <div class="hamburger__box">
                        <div id="hamburger-button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                  <!-- </div> -->
                  <!--  -->
            </div>
        </div>
    </header>
    <main>