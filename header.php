<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

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

    <header class="header-section">
        <div class="container">

            <div class="header__top">
                <div class='navbar'>
                    <?php wp_nav_menu(array(
                        'menu' => 'Fullpage menu',
                        'container'       => 'div',
                        'container_class' => 'menu',
                        'theme_location' => 'primary',
                        'menu_class' => 'menu-list'));
                    ?>
                </div>

                <div class="header__toggler">
                    <label class="toggler-wrapper style-1">
                        <input type="checkbox">
                        <div class="toggler-slider">
                            <div class="toggler-knob"></div>
                        </div>
                    </label>
                    <span>dark</span>
                </div>

                <?php get_template_part('./template-parts/block/block-social'); ?>
            </div>

            <div class="header__bott">
                <?php
                    $img_logo = get_field('img_logo', 'options');
                    if ($img_logo):
                    $link = get_field('logo_link', 'options');
                ?>

                <a class="header__logo" href='<?= esc_url($link['url']); ?>' title="<?=esc_html( $link['title'] ); ?>">
                    <?php
                        $svg_markup = file_get_contents( get_attached_file( $img_logo['ID'] ) );
                        echo $svg_markup;
                    ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <main class="main-wrap">