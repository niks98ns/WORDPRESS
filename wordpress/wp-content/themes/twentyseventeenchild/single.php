<?php get_header(); ?>
    <div class="container-fluid">
    <div class="jumbotron">
    <h1><?php the_title();?></h1><hr><br>
    <div class="container-fluid">
    
    
    

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
        <?php endwhile; endif;?>
    
    
    

</div>

<?php get_footer(); ?>
