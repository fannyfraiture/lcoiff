<?php
/*
Template Name: Accueil
*/

$accueil = get_field('accueil')
?>

<?php get_header();?>

<main class="main">
  <?php if ($accueil): ?>
      <?php
        get_template_part(
          'template-parts/top',
          'banner',
          array(
            'image' => esc_url($accueil['accueil_titre']['image']['url']),
            'texte' => $accueil['accueil_titre']['titre'],
            'is_button' => true
          )
        );
      ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
