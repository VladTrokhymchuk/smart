<div class="social-icon">
    <ul>
        <?php if( have_rows('social', 'options') ): while( have_rows('social', 'options') ): the_row(); ?>
        <li>
            <?php $icon_link = get_sub_field('icon_link');?>
            <a href='<?=esc_url( $icon_link['url'] ); ?>' title="<?=esc_html( $icon_link['title'] ); ?> ">
                <?php $icon_img = get_sub_field('icon_img');?>
                <?php
                    $svg_markup = file_get_contents( get_attached_file( $icon_img['ID'] ) );
                    echo $svg_markup;
                ?>
            </a>
        </li>
        <?php endwhile; endif; ?>
    </ul>
</div>