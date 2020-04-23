<!DOCTYPE html>
<html>
    <head> 
         <?php wp_head();?>
    </head>
<body <?php body_class();?>>
<header class="navbr nav-navbar">

    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
            <div class="navbar-header logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/LOGO.png" class="navbar_logo" alt="image">
            </div>
                    <?php wp_nav_menu (
                        array(
                                'theme_location' => 'top-menu',
                                'menu_class' => 'navigation'
                        )
                    );?>
                
            </li>      
        </ul>
      
  </div>



 
</header>