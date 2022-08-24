    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__wrap">
                <?php wp_nav_menu(array(
                    'menu' => 'Footer',
                    'container'       => 'div',
                    'container_class' => 'footer__nav',
                    'theme_location' => 'primary',
                    'menu_class' => 'menu-list'));
                ?>
                <div class="footer__subscribe">
                    <div class="qq"></div>
                </div>
            </div>
        </div>

        <div class="footer__bott">
            <div class="container">

                <a class="footer__bott__logo" href='<?= get_home_url() ?>'>
                    <?php
                    $img_logo = get_field('img_logo', 'options');
                    $svg_markup = file_get_contents( get_attached_file( $img_logo['ID'] ) );
                    echo $svg_markup;
                ?>
                </a>

                <?php wp_nav_menu(array(
                    'menu' => 'Footer bottom',
                    'container'       => 'div',
                    'container_class' => 'footer__bott__navbar',
                    'theme_location' => 'primary',
                    'menu_class' => 'menu-list'));
                ?>

                <?php get_template_part('./template-parts/block/block-social'); ?>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>