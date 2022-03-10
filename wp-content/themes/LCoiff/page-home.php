<?php
/*
Template Name: Accueil
*/
$accueil_titre = get_field('accueil_titre');
$accueil_banniere = get_field('accueil_banniere');
$accueil_galerie = get_field('accueil_galerie')['galerie'];
echo '<pre>';
var_dump($accueil_titre);
echo '</pre>';
?>

<?php get_header();?>

<main class="main">
  <?php if ($accueil_titre): ?>
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
</main>

<?php get_footer(); ?>
