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

  <div class="banniere">
    <h2><?php echo $accueil_banniere["slogan"]; ?></h2>
    <p><?php echo $accueil_banniere["titre"]; ?></p>
    <p><?php echo $accueil_banniere["texte"]; ?></p>
    <img src="<?php echo esc_url($accueil_banniere["image"]['url']); ?>" alt="<?php echo esc_attr($hero['image']['alt']); ?>" />
  </div>


  <ul>
    <?php
    // echo '<pre>';
    // var_dump($accueil_galerie);
    // echo '</pre>';
    foreach ($accueil_galerie as $photo) : ?>
      <li>
        <img src="<?php echo esc_url($photo["image"]['url']); ?>" alt="<?php echo esc_attr($photo['image']['alt']); ?>" />
      </li>
    <?php endforeach; ?>
  </ul>





</main>

<?php get_footer(); ?>