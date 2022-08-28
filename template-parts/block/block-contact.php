<div class="default">
    <?php $contact_form = get_field('contact_form');
    if ($contact_form): ?>
        <div class="form">
            <?php echo do_shortcode( $contact_form ) ?>
        </div>
    <?php endif; ?>
</div>