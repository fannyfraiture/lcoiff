<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Bentham&family=Raleway:wght@100;200;300;500;700&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    >
    <title>L'Coiff</title>
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri()?>/src/img/favicon.ico">
    
    <?php wp_head(); // required to build the file as a custom header ?>
  </head>

  <body>
    <header class="header">
      <h1 class="hidden">LCoiff'</h1>

      <nav class="navbar">
        <ul class="navbar__list">
          <li class="navbar__list__element">
            <a class="navbar__list__element__link" href="/LCoiff/devenir-cliente">
              <p class="navbar__list__element__link__text">
                devenir cliente
              </p>
            </a>
          </li>

          <li class="navbar__list__element">
            <a class="navbar__list__element__link" href="/LCoiff/qui-sommes-nous">
              <p class="navbar__list__element__link__text">
                qui sommes-nous
              </p>
            </a>
          </li>

          <li class="navbar__list__element">
            <a class="navbar__list__element__link--center" href="/LCoiff">
              <img
                class="navbar__list__element__link--center__logo"
                src= "<?php echo get_template_directory_uri()?>/src/img/logo_lcoiff_beige.png" 
                alt="logo LCoiff'"
              >
            </a>
          </li>

          <li class="navbar__list__element">
            <a class="navbar__list__element__link" href="/LCoiff/nous-soutenir">
              <p class="navbar__list__element__link__text">
                nous soutenir
              </p>
            </a>
          </li>

          <li class="navbar__list__element">
            <a class="navbar__list__element__link" href="/LCoiff/contact">
              <p class="navbar__list__element__link__text">
                contact
              </p>
            </a>
          </li>

          <li class="navbar__list__element">
            <button type="button" class="navbar__list__element__button">
              <i class="fa-solid fa-bars"></i>
            </button>
          </li>
        </ul>
      </nav>
    </header>

    <nav class="responsive-menu">
      <ul class="responsive-menu__list">
        <li class="responsive-menu__list__element">
          <a href="/LCoiff/devenir-cliente" class="responsive-menu__list__element__link">
            devenir cliente
          </a>
        </li>

        <li class="responsive-menu__list__element">
          <a href="/LCoiff/qui-sommes-nous" class="responsive-menu__list__element__link">
            qui sommes-nous
          </a>
        </li>

        <li class="responsive-menu__list__element">
          <a href="/LCoiff/nous-soutenir" class="responsive-menu__list__element__link">
            nous soutenir
          </a>
        </li>

        <li class="responsive-menu__list__element">
          <a href="/LCoiff/contact" class="responsive-menu__list__element__link">
            contact
          </a>
        </li>

        <li class="responsive-menu__list__element">
          <button
            type="button"
            class="responsive-menu__list__element__up-button"
          >
            <i class="fa-solid fa-chevron-up"></i>
          </button>
        </li>
      </ul>
    </nav>
