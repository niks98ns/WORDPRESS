<?php get_header(); ?>
    <div class="container-fluid">
    <div class="jumbotron">
    <h1><?php the_title();?></h1><hr><br>
    <div class="container-fluid">
    
    
    

    <!-- <?php //if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php //the_content(); ?>
    <?php //endwhile; endif;?> -->

    
        
   
<div class="blog-posts-left economic-post-left">
            <div class="blog-post-articles economic-post-articles">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'posts_per_page' => '10',
                    'post_status' => 'publish'  
                    
                );
                $posts = get_posts($args);
                foreach ($posts as $post) {
                    $postID = $post->ID;
                    $postTitle = $post->post_title;

                    $newDate = date_format(date_create($post->post_date), "F d, Y ");

                    $trimmed_content = wp_trim_words( $post->post_content, 52, '...');
                    $url = $post->guid;
                    $image = wp_get_attachment_url(get_post_thumbnail_id($postID), 'thumbnail');
                    ?>
                    <div class="blog-inner-content economy-inner-content">
                        <div class="blog-posts-info">
                            <?php if (!empty($image)) { ?> 
                                <div class="blog-image"> 
                                    <a href="<?php echo $post->guid; ?>" target="_blank">
                                        <span><img src="<?php echo $image; ?>" alt="image"   /></span> 
                                    </a>
                                </div>
                            <?php } else { ?>
                                <div class="blog-image">
                                    <a href="<?php echo $post->guid; ?>" target="_blank">
                                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/09/pexels-photo-941693-1.jpeg" alt="img" /> 
                                    </a>
                                </div> 
                            <?php } ?>
                            <div class="blog-title-div">
                                <a href="<?php echo $post->guid; ?>" target="_blank"><h4><?php echo $postTitle; ?></h4></a>
                                <span><?php echo $newDate; ?></span>
                                <p><?php echo $trimmed_content; ?></p>
                                <a href="<?php echo $post->guid; ?>" traget="_blank" class="blog-read-text">Read More</a> 
                            </div>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>
</div>
        
        
        
    
    

</div>

<?php get_footer(); ?>