<figure class="top-banner">
  <img
    class="top-banner__image"
    src="<?php echo $image; ?>"
    alt="femme en train d'être coiffée"
  >

  <h2 class="top-banner__heading">
    <?php echo $texte; ?>
  </h2>

  <?php if ($is_button): ?>
    <a class="top-banner__link" href="#">
      contact
    </a>
  <?php endif; ?>
</figure>
