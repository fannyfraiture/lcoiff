<?php
/*
Template Name: Cliente
*/

$cliente_titre = get_field('cliente_titre');
$cliente_banniere = get_field('cliente_banniere');
?>

<?php get_header(); ?>

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
    <?php for ($i = 0; $i < count($cliente_banniere); $i++) : ?>
      <li class="cliente-blocks__clients-block">
        <img
          class="cliente-blocks__clients-block__image"
          src="<?php echo esc_url($cliente_banniere[$i]["bandeau"]["image"]['url']); ?>"
          alt="<?php echo esc_attr($cliente_banniere[$i]["bandeau"]['image']['alt']); ?>"
        >
        <h2 class="cliente-blocks__clients-block__title">
          <?php echo $cliente_banniere[$i]["bandeau"]["titre"] ?>
        </h2>
        
        <p class="cliente-blocks__clients-block__paragraph">
          <?php echo $cliente_banniere[$i]["bandeau"]["texte"] ?>
        </p>
      </li>
    <?php endfor; ?>
  </ul>

</main>

<?php get_footer(); ?>
