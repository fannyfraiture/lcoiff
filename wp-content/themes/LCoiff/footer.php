<?php
//Query Data
$contact_info = get_field('contact_info', 'option');
$contact_logo = get_field('logo', 'option');
$contact_horaire = get_field('contact_horaire', 'option');
// echo '<pre>';
// var_dump($contact_logo);
// echo '</pre>';
?>

    <footer class="footer">
      <section class="footer__section">
        <h2 class="hidden">
          réseaux sociaux
        </h2>

        <div class="footer__section__content">
          <img class="footer__section__content__logo" src="<?php echo esc_url($contact_logo['url']); ?>" alt="logo LCoiff'">

          <a class="footer__section__content__link" target="_blank" href="<?php echo $contact_info["facebook"]; ?>">
          <i class="fa-brands fa-facebook-f"></i>
            suivez-nous
          </a>
        </div>
      </section>

      <section class="footer__section">
        <h2 class="hidden">
          contact
        </h2>

        <ul class="footer__section__listinfo">
          <li class="footer__section__listinfo__element">
          <i class="fa-solid fa-location-dot"></i>
            <p class="footer__section__listinfo__element__info">
              <?php echo $contact_info['adresse']['rue']; ?>
              <?php echo $contact_info['adresse']["code_postale_et_ville"]; ?>
            </p>
          </li>

          <li class="footer__section__listinfo__element">
          <i class="contact__info__liste__telphone fa-solid fa-phone"></i>

            <p class="footer__section__listinfo__element__info">
              <?php echo $contact_info["telephone"]; ?>
            </p>
          </li>

          <li class="footer__section__listinfo__element">
          <i class="fa-regular fa-envelope"></i>

            <p class="footer__section__listinfo__element__info">
              <?php echo $contact_info["email"]; ?>
            </p>
          </li>
        </ul>
      </section>

      <section class="footer__section">
        <h2 class="hidden">
          horaires
        </h2>

        <?php if (have_rows('contact_horaire', 'option')) : ?>

          <ul class="footer__section__list">

            <?php while (have_rows('contact_horaire', 'option')) : the_row(); ?>

              <li class="footer__section__list__element">
                <?php the_sub_field('jour_'); ?>
                <?php the_sub_field('am'); ?>
                <?php the_sub_field('pm'); ?>
              </li>

            <?php endwhile; ?>

          </ul>

        <?php endif; ?>

      </section>

      <p class="footer__attributions">
        Made with heart by
        <a href="https://www.linkedin.com/in/meulemans-philippe/" target="_blank" class="footer__attributions__link">
          P. Meulemans
        </a>,

        <a href="https://www.linkedin.com/in/thomas-backers-54197621b/" target="_blank" class="footer__attributions__link">
          T. Backers
        </a>,

        <a href="https://www.linkedin.com/in/fanny-fraiture/" target="_blank" class="footer__attributions__link">
          F. Fraiture
        </a>
      </p>
    </footer>
    <?php wp_footer(); // required to build this file as a custom footer ?>
  </body>
</html>
