<?php
/*
Template Name: Accueil
*/
$accueil_titre = get_field('accueil_titre');
$accueil_banniere = get_field('accueil_banniere');
$accueil_galerie = get_field('accueil_galerie')['galerie'];
// echo '<pre>';
// var_dump($accueil_titre);
// echo '</pre>';
?>

<?php get_header(); ?>

<main class="main">
  <?php if ($accueil_titre) : ?>
    <?php
    get_template_part(
      'template-parts/top',
      'banner',
      array(
        'image' => $accueil_titre['image']['url'],
        'texte' => $accueil_titre['titre'],
        'is_button' => true
      )
    );
    ?>
  <?php endif; ?>

  <section class="slogan-section">
    <h2 class="slogan-section__slogan">
      <?php echo $accueil_banniere['slogan']; ?>
    </h2>
  </section>
  
  <section class="presentation">
    <img
      class="presentation__image"
      src="<?php echo esc_url($accueil_banniere['image']['url']); ?>"
      alt="<?php echo esc_attr($hero['image']['alt']); ?>"
    >

    <div class="presentation__text-content">
      <h2 class="presentation__text-content__heading">
        <?php echo $accueil_banniere['titre']; ?>
      </h2>

      <p class="presentation__text-content__paragraph">
        <?php echo $accueil_banniere['texte']; ?>
      </p>
    </div>
  </section>

  <ul class="gallery">
    <?php foreach ($accueil_galerie as $image): ?>
      <li class="gallery__element">
        <img
          class="gallery__element__image"
          src="<?php echo esc_url($photo['image']['url']); ?>"
          alt="<?php echo esc_attr($photo['image']['alt']); ?>"
        >
      </li>
    <?php endforeach; ?>
  </ul>
</main>

<?php get_footer(); ?>
