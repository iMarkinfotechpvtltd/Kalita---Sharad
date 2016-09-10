<?php
/*
 Template Name: Un peu d’histoire
 */
?>
<?php get_header(); 
global $post;
// echo '<pre>';

// print_r($post);

// echo '</pre>';

// die;
?>
  <section class="section3-acc"> <i class="fa fa-fw fa-twitter"></i>
        <p>kalita <a href="<?php echo get_option_tree('twitter');?>"><?php echo get_option_tree('twitter');?></a> - 
		<?php echo get_option_tree('twitter_news_text');?></p>
    </section>
  <section class="standard-section3">
<div class="container">
<div class="row">
<div class="col-md-8">
    <div class="standard-section3-column1">
        <h2><?php echo $post->post_title;?></h2>
        
      <div class="templet">
	  
	  <?php 
		global $q;
		global $g;
		
		$q=1;
		$i=0;
		$args=array
		(
				'post_type'      =>'un_peu_d_histoire',
				'posts_per_page' => -1,
				'order'          => 'DESC',
		);
		$un_peu_d_histoire = new WP_Query($args);
					
		while( $un_peu_d_histoire -> have_posts() ) : $un_peu_d_histoire -> the_post();
					
		$show=get_field('show_on_front',$post->ID);
	     
		switch ($show) 
		{  
			case "Image":
					?>
					<article>
					<?php 
					 if ( has_post_thumbnail() ) 
					 {
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'actualitie_image_size' );
						?>
						 <div class="templet-img">
							<img src="<?php echo $image[0]; ?>"/>
						 </div>
						<?php
					} 
					else 
					{
					?>
					<div class="templet-img">
						<img src="http://placehold.it/342x192&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive" />
					</div>
					<?php
					}						
				   ?>      
						<div class="templet-text">
							<h3><small><?php //echo date('d M');?></small> <?php the_title();?></h3>
							<p><?php the_content();?></p>
						   <!--<a href="<?php //the_permalink();?>" class="read-more-btn">read more</a>-->
						</div>
				   </article>		
		     <?php break;
			 
			 
			 case "Gallery":
					
						?>
						
						<article>
							<div class="templet-img">
								<div class="actualities-slider">
									<div id="myCarousel<?php echo $post->ID;?>" class="carousel slide" data-ride="carousel1">
										<div class="carousel-inner" role="listbox">
										<?php
										  $one1 = get_post_meta($post->ID,'gallery',true); 	
										  $arr1=get_numerics($one1);
											$j=0;
											foreach($arr1 as $val1)
											{
												$small_image_url1 = wp_get_attachment_image_src($val1, 'actualitie_image_size');
										
												if($j==0)
												{
										?>	
												<div class="item active"><img src="<?php echo $small_image_url1[0]; ?>"> 
												</div>
										<?php		
												}
												else
												{
										?>
													<div class="item"><img src="<?php echo $small_image_url1[0]; ?>"> 
												</div>
										<?php		
												}
												$j++;
											}
										?>
											</div>
											<a class="left carousel-control" href="#myCarousel<?php echo $post->ID;?>" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
											<a class="right carousel-control" href="#myCarousel<?php echo $post->ID;?>" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
										</div>
										
								</div>
							</div>
							<div class="templet-text">
								<h3><small><?php //echo date('d M')?></small> <?php the_title();?></h3> 
								<?php 
									$content=get_the_content();
									$trimmed_content = wp_trim_words( $content, 100);?>
									<p><?php echo $trimmed_content;?></p>
									 <!--<a href="<?php //the_permalink();?>" class="read-more-btn">read more</a>-->
							</div>	
                   </article>
					
				<?php break;
				
				case "Audio":
						
						$audio_url=get_field('audio',$act_post->ID);
						
						?>
						
						<article>
							<div class="templet-img">
								<div class="actualities-audio">
									<audio controls >
										  <source src="<?php echo $audio_url;?>" type="audio/mpeg">
									</audio>
								</div>
							</div>
							<div class="templet-text">
									<h3><small><?php //echo date('d M')?></small> <?php the_title();?></h3> 
							
									<p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 100);?></p>
						
									 <!--<a href="<?php //the_permalink();?>" class="read-more-btn">read more</a>-->
							</div>
						</article>	
				<?php break;
				
				case "Video":
			    ?>
						<article>
							<div class="templet-img">
								<div class="actualities-video"> 
									<?php the_field('video',$act_post->ID);?> 
								</div>
							</div>
							<div class="templet-text">
									<h3><small><?php //echo date('d M')?></small> <?php the_title();?></h3> 
									<p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 100);?></p>
									 <!--<a href="<?php //the_permalink();?>" class="read-more-btn">read more</a>-->
						    </div>
					   </article>
				<?php break;
			    
				case "Quote":
								
								if($q%2==0)
								{
							?>		
									<div class="actualities-quote">
										<div class="actualities-inner"> <small><?php the_title();?></small> 
											<div class="quotes">
												<?php the_content();?>
											</div>
										</div>
									</div>
									
							<?php	
								}
								else
								{
							?>
									
									<div class="actualities-quote">
										<div class="actualities-inner"> <small><?php the_title();?></small>
											<div class="quotes">
												<?php the_content();?>
											</div>
										</div>
									</div>
									
							<?php	
							}
							$q++;
							?>
									
							<?php break;
					
					default:
						echo "NO RECORD FOUND";
		 
		} //end switch case
		 $i++;  
		 endwhile;
		 wp_reset_query();
		?>

    </div><!--main templet div close--->

    </div><!--standard-section3-column1--->
 </div><!--col-md-8-->  
	
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
					
					
							
					 <div class="standard-column-list3">
						<h4>TAGS</h4>
						<ul class="standard-column-list3-inline">
						
						<?php 
							$args = array( 'taxonomy' => 'post_tag','hide_empty'=>0 );
							$posttags = get_terms('post_tag', $args);

							foreach ($posttags as $tags) 
							{
						?>
								<li><a href="<?php echo get_category_link( $tags->term_id ); ?>"><?php echo $tags->name;?></a></li>,
						<?php 
							}
						?>
						</ul>
					</div>
				  
					</div><!--standard-section3-column2-->
				</div><!--col-md-4-->
    
 </div><!--row--->   
    
 </div><!--container--> 
</section>
      
 
 
<?php get_footer(); ?>