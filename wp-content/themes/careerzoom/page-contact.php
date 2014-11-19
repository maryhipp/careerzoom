<?php get_header(); ?>
<div class="contact-wrapper">
  <div class="contact-section">
    <div class="contact-img"><img src="<?php echo get_template_directory_uri(); ?>/images/pin.png"></div>
    <div class="address">
      <a target=_blank href="https://www.google.com/maps/place/<?php the_field('street_address', 'user_2'); ?> <?php the_field('city_state_zip', 'user_2'); ?>">
        <p><?php the_field('street_address', 'user_2'); ?></p>
        <p><?php the_field('city_state_zip', 'user_2'); ?></p>
      </a>
    </div>
  </div>
  <div class="contact-section">
    <div class="contact-img"><img src="<?php echo get_template_directory_uri(); ?>/images/email.png"></div>
    <a target=_blank href="mailto:<?php the_field('email_address', 'user_2'); ?>"><p><?php the_field('email_address', 'user_2'); ?></p></a>
  </div>

  <div class="contact-section">
    <div class="contact-img"><img src="<?php echo get_template_directory_uri(); ?>/images/skype.gif"></div>
    <a target=_blank href="skype:<?php the_field('skype_handle', 'user_2'); ?>?call"><p><?php the_field('skype_handle', 'user_2'); ?></p></a>
  </div>
  <div class="contact-section">
    <div class="contact-img"><img src="<?php echo get_template_directory_uri(); ?>/images/phone.png"></div>
    <a href="tel+1<?php the_field('phone_number', 'user_2'); ?>"><p><?php the_field('phone_number', 'user_2'); ?></p></a>
  </div>

</div>

<?php get_footer(); ?>
