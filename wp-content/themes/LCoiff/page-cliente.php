<?php
/*
Template Name: Cliente
*/
?>

<?php
//Query data
$cliente_titre = get_field('cliente_titre');
$cliente_banniere = get_field('cliente_banniere');

// echo '<pre>';
// var_dump($cliente_banniere);
// echo '</pre>';

get_header(); 
?>

<main class="cliente">

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

  <ul class="cliente-blocks">
    <?php foreach ($cliente_banniere as $bandeau) : ?>
      <li class="cliente-blocks__clients-block">
        <img class="cliente-blocks__clients-block__image" src="<?php echo esc_url($bandeau["bandeau"]["image"]['url']); ?>" alt="<?php echo esc_attr($bandeau["bandeau"]['image']['alt']); ?>" />
        <h2 class="cliente-blocks__clients-block__title"> <?php echo $bandeau["bandeau"]["titre"] ?></h2>
        <p class="cliente-blocks__clients-block__paragraph"> <?php echo $bandeau["bandeau"]["texte"] ?></p>
      </li>
    <?php endforeach; ?>
  </ul>

    </main>

    <?php get_footer(); ?>