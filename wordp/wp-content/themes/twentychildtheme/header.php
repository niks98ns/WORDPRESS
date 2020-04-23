<!DOCTYPE html>
<html>
    <head> 
         <?php wp_head();?>
    </head>
<body <?php body_class();?>>
<header class="navbr nav-navbar">

  <div class="container navbar">
      <div class="collapse navbar-collapse header111">
          <ul class="nav navbar-nav navbar-right header11"> 
                  <?php wp_nav_menu (
                      array(
                              'theme_location' => 'top-menu',
                              'menu_class' => 'navigation'
                      )
                      );?>
          </ul>
      </div>
  </div>

<!-- <?php dynamic_sidebar( 'top-header-left' ); ?>  
<?php dynamic_sidebar( 'top-header-right' ); ?>             -->

</div>  
</header><hr>