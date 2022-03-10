<?php
/*
Template Name: Accueil
*/
$accueil_titre = get_field('accueil_titre');
$accueil_banniere = get_field('accueil_banniere');
$accueil_galerie = get_field('accueil_galerie')['galerie'];
?>

<?php get_header();?>

<main class="main">
  <?php if ($accueil): ?>
      <?php
        get_template_part(
          'template-parts/top',
          'banner',
          array(
            'image' => $accueil['accueil_titre']['image']['url'],
            'texte' => $accueil['accueil_titre']['titre'],
            'is_button' => true
          )
        );
      ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
