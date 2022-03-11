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
      <i class="contact__info__liste__adresse__emoticone"></i>
    <?php echo $contact_info["adresse"]["rue"]; ?>
    <?php echo $contact_info["adresse"]["code_postale_et_ville"]; ?>
    
    </li>
    <li class="contact__info__liste__telephone">
    <i class="contact__info__liste__telephone__emoticone"></i>
      <?php echo $contact_info["telephone"]; ?>
    </li>
    <li class="contact__info__liste__email">
    <i class="contact__info__liste__email__emoticone"></i>
    <?php echo $contact_info["email"]; ?>
    </li>
  </ul>

  <a class="contact__info__rs" href="<?php echo esc_url($contact_info["facebook"]); ?>">
            <i class="contact_info_rs_icon"></i>
            suivez-nous
          </a>
  </section>

  <section class="contact__horaire">
    <h2 class="hidden">Horaire</h2>
    <figure class="contact__horaire__horloge"></figure>
  <ul class="contact__horaire__liste">
    <?php
    foreach ($contact_horaire as $horaire) : ?>
      <li class="contact__horaire__liste__element">
        <?php echo $horaire["jour_"] ?>
      </li>
    <?php endforeach; ?>
  </ul>
  </section>

</main>

<?php get_footer(); ?>