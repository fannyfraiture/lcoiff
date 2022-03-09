
<header id="header">
    <div class="inside">


        <div class="banner top">
            <div class="banner_content">
                <div class="content">


                    <!-- LOGO -->
                    <a class="logo-container" href="./" aria-label="Logo">
                        <div class="logo">
                            <span>Counter-Currents</span>
                        </div>
                    </a>

                    


                    <!-- SOCIAL ICONS -->
                    <?php get_template_part('template-parts/social-icons') ?>

                    
                    
                </div>
            </div>
        </div>
    </div>
</header>






<div id="header_internet_explorer_space" class="banner hidden"></div>






<div id="banner_menu" class="banner menu">

    <div class="shadow_side"></div>

    <div class="image_container">
        <div class="image"></div>
        <div class="overlay"></div>
    </div>


    <div class="banner_content">
        <div class="content">


            <!-- SOCIAL ICONS -->
            <?php get_template_part('template-parts/social-icons') ?>

            <!-- MAIN MENU -->
            <nav id="nav_desktop">
                <?php wp_nav_menu(array('container' => false, 'theme_location' => 'menu-header-1'));
                ?>
            </nav>      
    

        </div>
    </div>
</div>


<!-- IE Alternative for position sticky -->
<script>
    if(navigator.userAgent.indexOf('MSIE')!==-1 || navigator.appVersion.indexOf('Trident/') > -1 ) {
        document.getElementById('banner_menu').classList.add('internet_explorer');
        document.getElementById('header_internet_explorer_space').classList.remove('hidden');
    }
</script>








<!-- HAMBURGER -->
<div id="hamburger_container">
    <button id="hamburger" type="button" aria-haspopup="true" aria-label="Navigation" aria-controls="nav_mobile">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
            <rect class="top" x="0" y="21" class="st0" width="100" height="10" rx="5" ry="5"/>
            <rect class="middle" x="0" y="46" class="st0" width="100" height="10" rx="5" ry="5"/>
            <rect class="bottom" x="0" y="72" class="st0" width="100" height="10" rx="5" ry="5"/>
        </svg>
    </button>
</div>







<!-- OVERLAY FOR MOBILE MENU -->
<div class="page_overlay"></div>

<!-- NAV MOBILE CONTAINER -->
<div id="nav_mobile_container">
    <nav id="nav_mobile">


        <!-- BAR TOP L1 -->
        <div class="bar-top l1"><p></p></div>


        
        <!-- BAR TOP L2 -->
        <div class="bar-top l2"><p>LEVEL2</p></div>

        <!-- MENU 1 -->
        <?php wp_nav_menu(array('container' => false,'theme_location' => 'menu-header-1'));?>

        <!-- MENU 2 -->
        <div id="menu_2">
            <?php wp_nav_menu(array('container' => false,'theme_location' => 'menu-header-2'));
            ?>
        </div>

        <!-- SOCIAL ICONS -->
        <?php get_template_part('template-parts/social-icons-footer') ?>
        
    </nav>
</div>