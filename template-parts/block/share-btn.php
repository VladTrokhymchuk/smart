<div class="share-btn">
    <div class="share__img">
        <?php $share_img = get_field('share_img', 'options');?>
        <?php
            $svg_markup_share = file_get_contents( get_attached_file( $share_img['ID'] ) );
            echo $svg_markup_share;
        ?>
    </div>
</div>