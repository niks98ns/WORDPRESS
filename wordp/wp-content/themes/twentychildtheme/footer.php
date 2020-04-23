<?php get_footer();?>




                        


<footer class="navbr nav-navbar">
    <div class="container-fluid">
        <div class="jumbotron text-center">
        
            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-4') ) ?>
    
        </div>
    </div>
        
    <div class="container-fluid text-center">
            <div class="container navbar">
                
                <?php wp_nav_menu (
                        array(
                                'theme_location' => 'footer-menu',
                                'menu_class' => 'navigation'
                        )
                        );?>
            </div>
    </div>                
          
</footer>

</body> 
</html>

