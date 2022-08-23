    </main>
    <?php get_template_part('./template-parts/block-popup'); ?>
    <footer class="footer">
      <div class="wrap">

      
      <div class="footer--top">
          <div class="top__left">

            <?php 
              $img_logo = get_field('img_logo', 'options');
              $img_logo_footer = get_field('img_logo_footer', 'options');
                if ($img_logo || $img_logo_footer):
                  $link = get_field('logo_link', 'options');
                  $logo_link_footer = get_field('logo_link_footer', 'options');
                ?>

                  <a class="footer__logo" href='<?=esc_url( $link['url'] ); ?>'>       
                    <?php
                      $svg_markup = file_get_contents( get_attached_file( $img_logo['ID'] ) );
                      echo $svg_markup;
                    ?>
                  </a>

                  <a class="footer__logo" href='<?=esc_url( $logo_link_footer['url'] ); ?>'>       
                    <img src="<?= esc_url($img_logo_footer['sizes']['medium']); ?>" alt="<?= esc_attr($img_logo_footer['alt']); ?>" />
                  </a>
            <?php endif; ?>


          </div>
          <div class="top__middle">
            <h3><?= get_field('desc_btn_footer', 'options'); ?></h3>

            <?php if (get_field('title_btn_footer', 'options')) : ?>
                <button class="btn btn__white" anim="ripple">
                    <span><?= get_field('title_btn_footer', 'options'); ?></span>
                </button>
            <?php endif; ?>
          </div>

          <div class="top__right">
            <h3><?= get_field('title_contact_footer', 'options'); ?></h3>

            <div class="box__contact">
              <?php if( have_rows('foot_contact', 'options') ): ?>

              
              <?php while( have_rows('foot_contact', 'options') ): the_row(); 
                // переменные
                $linkContact = get_sub_field('link_contact');
                $linkTitle = get_sub_field('link_title');
              ?>

                  <span class=""> 

                    <?php if( $linkContact ): ?>
                     
                      <?=esc_html( $linkTitle ); ?>
                      <a href='<?=esc_url( $linkContact['url'] ); ?>'> <?=esc_html( $linkContact['title'] ); ?> 
                    <?php endif; ?>

                    <?php if( $linkContact ): ?>
                        </a>
                    <?php endif; ?>

                  </span>

                <?php endwhile; ?>

              <?php endif; ?>
            </div>

          </div>
      </div>

        <div class="footer--bottom">

          <div class="bottom__left">
            <p><?= get_field('copyright_footer', 'options'); ?></p>

          </div>

          <div class="bottom__right">
          <p><?= get_field('desc_footer_warning', 'options'); ?></p>
          </div>

          <p class="DL">Зроблено з <span class="heart"></span>в<a href="#">DL Agency</a></p>

        </div>
      </div>



        <?php 
          $icon_arrow_up = get_field('icon_arrow_up', 'options');
            if ($icon_arrow_up):
              $icon_arrow_up = get_field('icon_arrow_up', 'options');
        ?>

          <button class="btn_up"> 
            <img src="<?= esc_url($icon_arrow_up['sizes']['medium']); ?>" alt="<?= esc_attr($icon_arrow_up['alt']); ?>" />
          </button>
        <?php endif; ?>

      
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>