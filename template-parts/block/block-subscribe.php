<div class="subscribe">
    <?php $follow_form_shortcode = get_field('follow_form_shortcode', 'options');
        if ($follow_form_shortcode): ?>
        <div class="form">
            <?php echo do_shortcode( $follow_form_shortcode ) ?>
        </div>
    <?php endif; ?>
</div>