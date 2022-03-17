<?php
$image = $args['image'];
$texte = $args['texte'];
$is_button = $args['is_button'];
?>

<figure class="top-banner">
  <img
    class="top-banner__image"
    src="<?php echo esc_url($image); ?>"
    alt="femme en train d'être coiffée"
  >

  <h2 class="top-banner__heading">
    <?php echo $texte; ?>
  </h2>

  <?php if ($is_button): ?>
    <a class="top-banner__link" href="/LCoiff/contact">
      contact
    </a>
  <?php endif; ?>
</figure>
