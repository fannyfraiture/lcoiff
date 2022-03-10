<?php
/*
Template Name: Accueillllllllll
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/styles.css" />
  <!-- Script  -->

  <script defer src="<?php echo get_template_directory_uri(); ?>/dist/all.js"></script>

  <title>Document</title>
</head>

<body>



  <?php
  //Query data
  $accueil_titre = get_field('accueil_titre');
  $accueil_banniere = get_field('accueil_banniere');
  $accueil_galerie = get_field('accueil_galerie')['galerie'];
  // echo '<pre>';
  // var_dump($accueil_titre);
  // echo '</pre>';

  if ($accueil_titre) : ?>

    <div class="titre">
      <h2><?php echo $accueil_titre["titre"]; ?></h2>
      <img src="<?php echo esc_url($accueil_titre["image"]['url']); ?>" alt="<?php echo esc_attr($hero['image']['alt']); ?>" />
    </div>
  <?php endif; ?>

  <div class="banniere">
    <h2><?php echo $accueil_banniere["slogan"]; ?></h2>
    <p><?php echo $accueil_banniere["titre"]; ?></p>
    <p><?php echo $accueil_banniere["texte"]; ?></p>
    <img src="<?php echo esc_url($accueil_banniere["image"]['url']); ?>" alt="<?php echo esc_attr($hero['image']['alt']); ?>" />
  </div>

  <div class="galerie">
    <img src="<?php echo esc_url($accueil_galerie[0]["image"]['url']); ?>" alt="<?php echo esc_attr($hero['image']['alt']); ?>" />
    <img src="<?php echo esc_url($accueil_galerie[1]["image"]['url']); ?>" alt="<?php echo esc_attr($hero['image']['alt']); ?>" />
    <img src="<?php echo esc_url($accueil_galerie[2]["image"]['url']); ?>" alt="<?php echo esc_attr($hero['image']['alt']); ?>" />
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


</body>

</html>