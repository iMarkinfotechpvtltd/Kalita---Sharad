<?php
/*
 Template Name: Létat de votre réseau
 */
?>
<?php get_header(); 
global $post;	

// echo '<pre>';

// print_r($post);

// echo '</pre>';

// die;
 if ( has_post_thumbnail() ) 
 {
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'category_banner_image_size' );
     ?>
       <section class="standard-section2" style="background-image:url('<?php echo $url=$image[0]?>')">
	   
 <?php
 } 
else 
  { 
  ?>
     <img src="http://placehold.it/1274x692&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive" />
 <?php 
}
?>
        <div class="container">
            <div class="standard-section2-heading">
                <h2><?php //echo strtoupper($post->post_title);
				echo $post->post_title;
				?></h2>
            </div>
        </div>
    </section>
    <section class="section3-idex">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="idex-internal">
                        <h2><?php echo strtoupper($post->post_title);?></h2>
                        <div class="idex-internal-bottom">
				  <?php 
						$args=array
					    (
							'post_type'      =>'ltat_de_votre_rseaus',
							'posts_per_page' => -1,
							'order'          => 'DESC',
					   );
						$ltat_de = new WP_Query($args);
					
						if($ltat_de -> have_posts())
						{
						while( $ltat_de -> have_posts() ) : $ltat_de -> the_post();
					?>
						<div class="idex-internal-bottom-inner">
							<h3><?php echo date('d/m/Y');?> - <?php the_title();?></h3>
							<?php the_content(); ?>
						</div>
				    <?php 
						endwhile;
						}//end if condition
					    else
						{
							echo 'NO RECORD AVAILABLE';
						}
					
					?> 
                        </div>
                    </div>
                </div>
                
                
               	<div class="col-md-4">
					<div class="standard-section3-column2">
						<h2>Derni&#233;res actualit&#233;s</h2>
						<ul class="standard-column2-list">
						   <?php 
									$args=array
									(
											'post_type'      =>'post',
											'posts_per_page' => 5,
											'order'          => 'DESC',
									);
									$actualites = new WP_Query($args);
								
									while( $actualites -> have_posts() ) : $actualites -> the_post();
								?>
										<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
							  <?php  
									endwhile; 
									wp_reset_query();
							   ?>
						</ul>
					</div>
				</div>
            </div>
        </div>
 </section>
 
 
<?php get_footer(); ?>