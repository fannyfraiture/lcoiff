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

<main class="main">

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
  <div class="contact__info">
  <ul class="contact__info__liste">
    <li class="adresse">
    <?php echo $contact_info["adresse"]["rue"]; ?>
    <?php echo $contact_info["adresse"]["code_postale_et_ville"]; ?>
    
    </li>
    <li class="telephone">
      <?php echo $contact_info["telephone"]; ?>
    </li>
    <li class="email">
    <?php echo $contact_info["email"]; ?>
    </li>
  </ul>

  <a class="contact__info__rs" href="<?php echo esc_url($contact_info["facebook"]); ?>">
            <i class="contact_info_rs_icon"></i>
            suivez-nous
          </a>
  </div>

  <ul class="contact__horaire">
    <?php
    foreach ($contact_horaire as $horaire) : ?>
      <li>
        <p> <?php echo $horaire["jour_"] ?></p>
      </li>
    <?php endforeach; ?>
  </ul>

</main>

<?php get_footer(); ?>