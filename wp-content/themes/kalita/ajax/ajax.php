<?php
include('../../../../wp-config.php');
$display_count=9;
$offSet=$_GET['page_val1'];
$offSet = ( $offSet - 1 ) * $display_count; 
global $post;
global $q;
global $g;  
$g=1;
$q=1;
$i=0;
?>
  
	
<?php 
query_posts( array (  'post_type' => 'post', 'order'=> 'DESC','posts_per_page'=>$display_count,'offset'=>$offSet) );
			while ( have_posts() ) : the_post(); 
						$show=get_field('show_on_front',$post->ID);
	if($i==0 || $i==3|| $i==6)
	{
		echo '<div class="mosaicflow__column '.$i.'">';
	}
						
						switch ($show) 
						{
							case "Image":	
								?>	
									<div class="mosaicflow__item">
										<div class="actualities-img"><?php the_post_thumbnail('actualitie_image_size');?> 
											<div class="actualities-inner"> <h2><a href="<?php the_permalink();?>"><?php echo strtoupper (the_title());?></a></h2>
											<?php
												$comments_count = wp_count_comments( $post->ID );?>
											
												<?php the_content();?> <small><?php echo get_the_date(); ?> / <a href="#"><?php echo $comments_count->total_comments;?> Comments</a></small> 
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
													<?php the_content();?> <small><?php echo get_the_date(); ?><a href="">
													<?php $comments_count = wp_count_comments( $post->ID );
													echo $comments_count->total_comments;?> Comments</a></small> 
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
											<?php the_content();?> <small><?php echo get_the_date(); ?> / <a href=""> 
											<?php $comments_count = wp_count_comments( $post->ID );
											echo $comments_count->total_comments;?> Comments</a></small> 
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
													<small><?php echo get_the_date(); ?> / <a href=""> 
													<?php $comments_count = wp_count_comments( $post->ID );
													 echo $comments_count->total_comments;?> Comments</a></small> 
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
												<div class="actualities-inner"> <small><?php the_title();?><a href=""> 
												<?php $comments_count = wp_count_comments( $post->ID );
												echo $comments_count->total_comments;?> Comments</a></small> 
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
											<div class="actualities-inner"> <small><?php the_title();?><a href=""> <?php $comments_count = wp_count_comments( $post->ID );
											echo $comments_count->total_comments;?> Comments</a></small>
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
								echo "Case Default Front end show only image";
						}//end of switch
					$i++;
					if($i%3==0)//using for change column div 
					{
					?>
						</div>
							
					<?php 
					}
					endwhile;wp_reset_query(); ?>
				
			