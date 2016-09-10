<?php
/*
 Template Name: Lien utile
 */
?>
<?php get_header(); 
global $post;

		// function get_numerics ($str)
		// {
		// preg_match_all('/\d+/', $str, $matches);
		// return $matches[0];
		//}
?>
  <section class="section3-acc"> <i class="fa fa-fw fa-twitter"></i>
        <p>kalita <a href="<?php echo get_option_tree('twitter');?>"><?php echo get_option_tree('twitter');?></a> - 
		<?php echo get_option_tree('twitter_news_text');?></p>
    </section>
  <section>
        <div class="actualities">
            <div class="container">
                <h5>LIEN UTILES</h5>
                <div class="actualities-main">
					<div class="clearfix mosaicflow"> 
				<?php 
				    global $q;
					global $g;
					$g=1;
					$q=1;
					$i=0;
					$args=array
					(
							'post_type'      =>'lien_utiles',
							'posts_per_page' => -1,
							'order'          => 'DESC',
					);
					$act_post = new WP_Query($args);
					
				
					while( $act_post -> have_posts() ) : $act_post -> the_post();
					
						$show=get_field('show_on_front',$post->ID);
	                    
						
						if($show=='Content')
						{
						?>	
								<div class="mosaicflow__item">
									<div class="actualities-inner"> <h2><a href="<?php the_permalink();?>">
									    <?php echo strtoupper (the_title());?></a></h2>
										<?php the_content();?> 
									</div>
								</div>

						<?php 
						}
						
						else
						{
							
						switch ($show) 
						{
							case "Image":	
								?>	
									<div class="mosaicflow__item">
										<div class="actualities-img"><?php the_post_thumbnail('actualitie_image_size');?> 
											<div class="actualities-inner"> <h2><a href="<?php the_permalink();?>"><?php echo strtoupper (the_title());?></a></h2>
											<?php
												//$comments_count = wp_count_comments( $post->ID );?>
											
												<?php the_content();?> 
											</div>
										</div>
									</div>
								<?php break;
								
							case "Gallery":
							
								?>
										<div class="mosaicflow__item">
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
												<div class="actualities-inner">
														<h2><a href="<?php the_permalink();?>"><?php echo strtoupper (the_title());?></a></h2>
													<?php the_content();?>
												</div>
											</div>
										</div>
								
								<?php $g++; break;
								
							case "Audio":
								
								$audio_url=get_field('audio',$act_post->ID);
								
								?>
								
								 <div class="mosaicflow__item">
									<div class="actualities-audio">
										<audio controls >
											  <source src="<?php echo $audio_url;?>" type="audio/mpeg">
										</audio>
										
										<div class="actualities-inner">
											<h2><a href="<?php the_permalink();?>"><?php echo strtoupper (the_title());?></a></h2>
											<?php the_content();?> 
										</div>
									</div>
								</div>
								
								<?php break;
								
							case "Video":
								
								?>
										<div class="mosaicflow__item">
										<div class="actualities-video"> 
										<?php the_field('video',$act_post->ID);?> 
											<div class="actualities-inner">
											<h2><a href="<?php the_permalink();?>"><?php echo strtoupper (the_title());?></a></h2>
												<?php the_content();?>
											</div>
										</div>
									</div>
									
								<?php break;

							case "Quote":
								
								if($q%2==0)
								{
							?>		
									<div class="mosaicflow__item">
											<div class="actualities-quote2">
												<div class="actualities-inner"> <small><?php the_title();?></small> 
													<div class="quotes">
														<?php the_content();?>
													</div>
												</div>
											</div>
									</div>
							<?php	
								}
								else
								{
							?>
									<div class="mosaicflow__item">
										<div class="actualities-quote">
											<div class="actualities-inner"> <small><?php the_title();?></small>
												<div class="quotes">
													<?php the_content();?>
												</div>
											</div>
										</div>
									</div>
							<?php	
							}
							$q++;
							?>
									
							<?php break;
                            								
							default:
								echo "Oops ! noting select for show front end";
						}//end of switch
					}//else close	
					$i++;
										
					endwhile; 
					wp_reset_query();
				?>      
                </div>
            </div>
			<!--******************************* START PAGINATION CODE ************************-->		

<?php
	if($act_post->max_num_pages>1)
	{
		?>
		<ul class="pagination">
   <?php
			if ($paged > 1) 
			{ 
				?>
					<li><a href="<?php echo $link.'?paged=' . ($paged -1); //prev link ?>"><</a><li>
                <?php 
			}
			for($i=1;$i<=$act_post->max_num_pages;$i++)
			{
				?>
				<li><a href="<?php echo $link.'?paged=' . $i; ?>" <?php echo ($paged==$i)? 'class="selected"':'';?>><?php echo $i;?></a></li>
				<?php
			}
			if($paged < $act_post->max_num_pages)
			{
				?>
				<li><a href="<?php echo $link.'?paged=' . ($paged + 1); //next link ?>">></a></li>
				<?php 
			}
				?>
	<?php 
	}
	?>
	
<!--****************************** END OF PAGINATION CODE ****************************-->
        </div>
    </section> 
 
 
 
<?php get_footer(); ?>