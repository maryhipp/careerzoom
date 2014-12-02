<?php get_header(); ?>
<div class="contact-wrapper">
  <div class="contact-section">
    <a target=_blank href="https://www.google.com/maps/place/<?php the_field('street_address', 'user_1'); ?> <?php the_field('city_state_zip', 'user_1'); ?>">
      <div class="contact-img"><img src="<?php echo get_template_directory_uri(); ?>/images/pin.png"></div>
      <div class="address">
        <p><?php the_field('street_address', 'user_1'); ?></p>
        <p><?php the_field('city_state_zip', 'user_1'); ?></p>
      </div>
    </a>
  </div>
  <div class="contact-section">
    <a target=_blank href="mailto:<?php the_field('email_address', 'user_1'); ?>">
      <div class="contact-img"><img src="<?php echo get_template_directory_uri(); ?>/images/email.png"></div>
      <p><?php the_field('email_address', 'user_1'); ?></p>
    </a>
  </div>

  <div class="contact-section">
    <a target=_blank href="skype:<?php the_field('skype_handle', 'user_1'); ?>?call">
      <div class="contact-img"><img src="<?php echo get_template_directory_uri(); ?>/images/skype.gif"></div>
      <p><?php the_field('skype_handle', 'user_1'); ?></p>
    </a>
  </div>
  <div class="contact-section">
    <div class="contact-img"><img src="<?php echo get_template_directory_uri(); ?>/images/phone.png"></div>
    <p><?php the_field('phone_number', 'user_1'); ?></p>
  </div>

</div>

<?php get_footer(); ?>
