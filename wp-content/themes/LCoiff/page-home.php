<?php
/*
Template Name: Accueil
*/
?>

<?php



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
  $accueil = get_field('accueil');
  // echo '<pre>';
  // var_dump($accueil);
  // echo '</pre>';

  if ($accueil) : ?>

    <div class="titre">
      <h1><?php echo $accueil["accueil_titre"]["titre"]; ?></h1>
      <img src="<?php echo esc_url($accueil["accueil_titre"]["image"]['url']); ?>" alt="<?php echo esc_attr($hero['image']['alt']); ?>" />
    </div>

    <div class="banniere">
      <h1><?php echo $accueil["accueil_banniere"]["titre"]; ?></h1>
      <p><?php echo $accueil["accueil_banniere"]["texte"]; ?></p>
      <img src="<?php echo esc_url($accueil["accueil_banniere"]["image"]['url']); ?>" alt="<?php echo esc_attr($hero['image']['alt']); ?>" />
    </div>

    <div class="galerie">
      <img src="<?php echo esc_url($accueil["accueil_galerie"]["galerie"][0]["image"]['url']); ?>" alt="<?php echo esc_attr($hero['image']['alt']); ?>" />
      <img src="<?php echo esc_url($accueil["accueil_galerie"]["galerie"][1]["image"]['url']); ?>" alt="<?php echo esc_attr($hero['image']['alt']); ?>" />
      <img src="<?php echo esc_url($accueil["accueil_galerie"]["galerie"][2]["image"]['url']); ?>" alt="<?php echo esc_attr($hero['image']['alt']); ?>" />
    </div>
<ul>
  
  <?php
    $galerie = $accueil["accueil_galerie"]["galerie"];
    echo '<pre>';
    var_dump($galerie);
    echo '</pre>';
  
   foreach ($galerie as $photo): ?>
   <li>
     <img src="<?php echo esc_url($photo["image"]['url']); ?>" alt="<?php echo esc_attr($photo['image']['alt']); ?>" />

   </li>
   
   <?php endforeach; ?>
</ul>

  <?php endif; ?>


</body>

</html>