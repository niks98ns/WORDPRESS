
<?php get_header();?>

<div class="container-fluid">
<div class="nikhil bg-5">
            
        </div><br><br><br><br><br>
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
        
        <div class="container-fluid bg-2">
          <h2><b><center>HERE'S WHAT WE CAN SERVE YOU</center><b></h2><br><br>
            <div class="col-sm-1">
            </div>
            <div class="col-sm-5">
                <?php $id= get_the_ID(); ?>
                <?php ; ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/post1.jpg" class="img-responsive"  alt="Bird">
            </div>
            <div class="col-sm-5">
                <p class="design">DESIGN<p>
                  
                    <p class="design1">Design can have different connotations in different fields of application. Design is the intentional creation of a plan or specification for the construction of an object or system or for the implementation of an activity or process.</p>
                    <div class="button">
                        <button type="button" class="btn btn-lg button2">FIND OUT MORE</button>
                    </div>
            </div>
            <div class="col-sm-1">
            </div>
        </div><br><br><br>
        

        <div class="container-fluid bg-2">
              <div class="col-sm-1">
              </div>
              <div class="col-sm-5">
                  <p class="design">PRINT<p>
                    
                      <p class="design1">Digital printing refers to methods of printing from a digital-based image directly to a variety of media. It usually refers to professional printing where small-run jobs from desktop publishing and other digital sources are printed using large-format and/or high-volume laser or inkjet printers.</p>
                      <div class="button">
                          <button type="button" class="btn btn-lg button2">FIND OUT MORE</button>
                      </div>
              </div>
              <div class="col-sm-5">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/post2.jpg" class="img-responsive"  alt="Bird">
              </div>
              
              <div class="col-sm-1">
              </div>
          </div><br><br><br>


          <div class="container-fluid bg-2">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-5">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/post3.jpg" class="img-responsive"  alt="Bird">
                </div>
                <div class="col-sm-5">
                    <p class="design">MARKETING<p>
                      
                        <p class="design1"> Marketing is the study and management of exchange relationships. Marketing is the business process of creating relationships with and satisfying customers. With its focus on the customer, marketing is one of the premier components of business management.</p>
                        <div class="button">
                            <button type="button" class="btn btn-lg button2">FIND OUT MORE</button>
                        </div>
                </div>
                <div class="col-sm-1">
                </div>
            </div><br><br><br>

            <div class="container-fluid bg-3 text-center">    
                <h3 class="margin"><b>OUR CLIENTS</b></h3><br>
                <div class="row">
                    <div class="col-sm-1">
                    </div>
                  <div class="col-sm-3 client">
              
                  <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-5') ) ?>
                  </div>
                  <div class="col-sm-4 client2"> 
                
                  <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-5') ) ?>
                  </div>
                  <div class="col-sm-3 client3"> 
                 
                  <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-5') ) ?>
                  </div>
                  <div class="col-sm-1">
                  </div>
                </div>
              </div><br>
              
              <div class="container-fluid bg-3 text-center">    
                  <div class="row">
                      <div class="col-sm-1">
                      </div>
                    <div class="col-sm-3 client4">
                
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/widgets4.jpg" class="img-responsive"  alt="Bird">
                    </div>
                    <div class="col-sm-4 client5"> 
                  
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/widgets5.jpg" class="img-responsive"  alt="Bird">
                    </div>
                    <div class="col-sm-3 client6"> 
                   
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/widgets6.jpg" class="img-responsive"  alt="Bird">
                    </div>
                    <div class="col-sm-1">
                    </div>
                  </div>
                </div><br>

                <div class="container-fluid bg-3 text-center">    
                    <div class="row">
                        <div class="col-sm-1">
                        </div>
                      <div class="col-sm-3 client7">
                        
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/widgets7.jpg" class="img-responsive"  alt="Bird">
                      </div>
                      <div class="col-sm-4 client8"> 
                    
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/widgets8.jpg" class="img-responsive"  alt="Bird">
                      </div>
                      <div class="col-sm-3 client9"> 
                     
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/widgets9.jpg" class="img-responsive"  alt="Bird">
                      </div>
                      <div class="col-sm-1">
                      </div>
                    </div>
                  </div><br><br><br>

                  <div class="container-fluid">
                    <div class="text-center">
                      <h3 class="contact"><b>CONTACT US</b></h3>
                    <div>
                      <h3 class=" text-center contact1">MOMENTS MEDIA</h3>
                    
                    <div class="container-fluid bg-2 text-center">
                      <p class="margin contact2">Sector 41, Chandigarh, India</p>

                      <h4 class="margin">+91-73555-83929</h4>
                      
                      <div class="button1">
                        <button type="button" class="btn btn-lg button2">FIND OUT MORE</button><br><br><br>
                          <div class="map map1">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.1689126054944!2d76.68790165019894!3d30.713651481553697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fefb4b72a1a7d%3A0xce117755097ca4c4!2sVijay%20tower!5e0!3m2!1sen!2sus!4v1567667126492!5m2!1sen!2sus" width="1220" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                          </div>
                        
                      </div>
                  </div><br><br><br><br>
                


    
                  

</div>


<?php get_footer();?>