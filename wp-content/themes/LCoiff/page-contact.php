<?php
  /*
Template Name: Contact
*/
?>

<?php
//Query data
$contact_titre = get_field('contact_titre');
$contact_info = get_field('contact_info');
$contact_horaire = get_field('contact_horaire');

//echo '<pre>';
//var_dump($contact_info);
//echo '</pre>';



get_header(); 
?>

<main class="contact">

  <?php if ($contact_titre) : ?>
    <?php
    get_template_part(
      'template-parts/top',
      'banner',
      array(
        'image' => $contact_titre['image']['url'],
        'texte' => $contact_titre['titre'],
        'is_button' => false
      )
    );
    ?>
  <?php endif; ?>
  <section class="contact__info">
    <h2 class="hidden">Contact Info</h2>
  <ul class="contact__info__liste">
    <li class="contact__info__liste__adresse">
      <i class="fa-solid fa-location-dot"></i>
    <div class="contact__info__liste__adresse__info">
    <p><?php echo $contact_info["adresse"]["rue"]; ?></p>
    <p><?php echo $contact_info["adresse"]["code_postale_et_ville"]; ?></p>
    </div>
    </li>
    <li class="contact__info__liste__telephone">
    <i class="contact__info__liste__telphone fa-solid fa-phone"></i>
      <?php echo $contact_info["telephone"]; ?>
    </li>
    <li class="contact__info__liste__email">
    <i class="fa-regular fa-envelope"></i>
    <?php echo $contact_info["email"]; ?>
    </li>
  </ul>

  <a class="contact__info__rs" target="_blank"href="<?php echo esc_url($contact_info["facebook"]); ?>">
  <i class="fa-brands fa-facebook-f"></i>
            Suivez-nous
          </a>
  </section>

  <section class="contact__horaire">
    <h2 class="hidden">Horaire</h2>
    <div class="contact__horaire__horloge">
    <figure class="contact__horaire__horloge__icone"> 
      <i class="fa-regular fa-clock"></i>
    </figure>
    </div>
  <ul class="contact__horaire__liste">
    <?php
    foreach ($contact_horaire as $horaire) : ?>
      <li class="contact__horaire__liste__element">
        <?php echo $horaire["jour_"] ?>
      </li>
    <?php endforeach; ?>
  </ul>
  </section>
  <div class="contact__maps">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.1374293076037!2d5.574089550988712!3d50.64313877940177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0fa0b962bcd41%3A0xe3a5fbc49879673f!2sL%20Coiff&#39;%20ASBL!5e0!3m2!1sfr!2sbe!4v1647019139414!5m2!1sfr!2sbe" width="1280" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  </main>

<?php get_footer(); ?>