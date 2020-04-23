<?php get_header();?>

<div class="container-fluid">
    <div class="jumbotron text-center">
    <span class="dashicons dashicons-heart"></span>
    <h1><?php single_cat_title();?></h1>

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="card mb-4">
                <div class="card-body">
                    <h2><?php the_title();?></h2>
                        <?php the_excerpt(); ?>   
                        <a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>
                </div>
            </div>
        <?php endwhile; endif;?>
    </div>
   
</div>

<?php get_footer();?>       