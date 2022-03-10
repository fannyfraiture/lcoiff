<?php
/*
Template Name: Soutien
*/
?>

<?php
//Query data
$soutien_titre = get_field('soutien_titre');
$soutien_info = get_field('soutien_info');

// echo '<pre>';
// var_dump($soutien_info);
// echo '</pre>';

get_header();
?>

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
  <div class="slogan">
    <h2 class="slogan"><?php echo $soutien_info["slogan"] ?> </h2>
  </div>

  <ul class="infos">
    <?php
    // echo '<pre>';
    // var_dump($accueil_galerie);
    // echo '</pre>';
    $infos = $soutien_info["infos"];
    foreach ($infos as $info) : ?>
      <li>
        <h2> <?php echo $info["titre"] ?></h2>
        <p> <?php echo $info["texte"] ?></p>
      </li>
    <?php endforeach; ?>
  </ul>

</main>

<?php get_footer(); ?>