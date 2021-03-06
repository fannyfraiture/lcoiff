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
      <li class="info-blocks__info-block__tabs">
        <h2 class="info-blocks__info-block__title">
          <?php echo $info["titre"] ?>
          <div class="info-blocks__info-block__plus">
            <div class="info-blocks__info-block__plus__cross">
              <div class="info-blocks__info-block__plus__cross__hor">
                <div class="info-blocks__info-block__plus__cross__ver"></div>
              </div>
            </div>
          </div>
          <div class="info-blocks__info-block__title__underline"></div>
        </h2>

        <p class="info-blocks__info-block__paragraph">
          <?php echo $info["texte"] ?>
        </p>
      </li>
    <?php endforeach; ?>
  </ul>
</main>

<?php get_footer(); ?>