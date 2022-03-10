<?php
/*
Template Name: About
*/
$about_titre = get_field('about_titre');
$about_accordeon = get_field('about_accordeon');
// echo '<pre>';
// var_dump($about_accordeon);
// echo '</pre>';
?>

<?php get_header(); ?>

<main class="main">
  <?php if ($about_titre) : ?>
    <?php
    get_template_part(
      'template-parts/top',
      'banner',
      array(
        'image' => $about_titre['image']['url'],
        'texte' => $about_titre['titre'],
        'is_button' => false
      )
    );
    ?>
  <?php endif; ?>

  <ul class="info-blocks">
    <?php
    $infos = $about_accordeon["info"];
    foreach ($infos as $info) : ?>
      <li class="info-blocks__info-block">

        <h2 class="info-blocks__info-block__title">
          <span class="info-blocks__info-block__plus">
            +
          </span>
          <?php echo $info["titre"] ?>
        </h2>

        <p class="info-blocks__info-block__paragraph">
          <?php echo $info["texte"] ?>
        </p>
      </li>
    <?php endforeach; ?>
  </ul>
</main>

<?php get_footer(); ?>