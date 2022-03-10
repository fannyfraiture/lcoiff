<?php
/*
Template Name: About
*/
$cliente_titre = get_field('cliente_titre');
$cliente_banniere = get_field('cliente_banniere');
// echo '<pre>';
// var_dump($cliente_banniere);
// echo '</pre>';
?>

<?php get_header(); ?>

<main class="main">
  <?php if ($cliente_titre) : ?>
    <?php
    get_template_part(
      'template-parts/top',
      'banner',
      array(
        'image' => $cliente_titre['image']['url'],
        'texte' => $cliente_titre['titre'],
        'is_button' => false
      )
    );
    ?>
  <?php endif; ?>

  <ul class="info-blocks">
    <?php foreach($array as $element) ?>
      <li class="info-blocks__info-block">
      
        <h2 class="info-blocks__info-block__title">
          <span class="info-blocks__info-block__plus">
            +
          </span>

          {{$element->machin}}
        </h2>

        <p class="info-blocks__info-block__paragraph">
          {{$element->text}}
        </p>
      </li>
    <?php endforeach; ?>
  </ul>
</main>

<?php get_footer(); ?>
