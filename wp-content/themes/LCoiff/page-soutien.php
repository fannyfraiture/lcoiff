<?php
/*
Template Name: Soutien
*/
$soutien_titre = get_field('soutien_titre');
$soutien_info = get_field('soutien_info');
?>

<?php get_header(); ?>

<main class="main">
  <?php if ($csoutien_titre) : ?>
    <?php
    get_template_part(
      'template-parts/top',
      'banner',
      array(
        'image' => $soutien_titre['image']['url'],
        'texte' => $soutien_titre['titre'],
        'is_button' => false
      )
    );
    ?>
  <?php endif; ?>

  <section class="slogan-section">
    <h2 class="slogan-section__slogan">
      <?php echo $soutien_info["slogan"] ?>
    </h2>
  </section>

  <section class="ways-to-support">
    <?php
      $infos = $soutien_info["infos"];
      foreach ($infos as $info) :
    ?>
      <div class="ways-to-support__way-to">
        <h2 class="ways-to-support__way-to__title">
          <?php echo $info["titre"] ?>
        </h2>

        <p class="ways-to-support__way-to__paragraph">
          <?php echo $info["texte"] ?>
        </p>
      </div>
    <?php endforeach; ?>
  </section>
</main>

<?php get_footer(); ?>
