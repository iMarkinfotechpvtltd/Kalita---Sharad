<?php
/*
 Template Name: Home Page
 */
?>
 <?php get_header(); 
 global $post;
 
 
 /*Getting  Home Banner Image */
	$Banner_image=get_post_meta($post->ID,"home_banner",true);
	$Banner = wp_get_attachment_image_src($Banner_image, 'full');	
		
 ?>
 <section class="section2"  style="background-image:url('<?php echo $url=$Banner[0]?>')" >
        <div class="container">
            <div class="shadow-box">
					<h2><a href="<?php echo site_url();?>/letat-de-votre-reseau/"><?php the_field('etat_de_votre_reseau_text',$post->ID);?></a></h2>
                <div class="shadow-box-inner">
				
				<!--***************START GETTING DATA FROM CUSTOM POST L’ÉTAT DE ******************-->
			<?php
			
			 
					$todaysDate = date('Y-m-d');
					$args=array
					(
							'post_type'      =>'ltat_de_votre_rseaus',
							'posts_per_page' => 2,
							'order'          => 'DESC',
					);
					$ltat_de = new WP_Query($args);
				    $count=0;
					while( $ltat_de -> have_posts() ) : $ltat_de -> the_post();
					
					$postDate = get_the_date('Y-m-d',$ltat_de->ID);
					if($postDate==$todaysDate)
					{
						
						$count=$count+1;
					}         
					endwhile; wp_reset_query();
					
					$count; 
					if($count > 0)
					{	
					$args=array
					(
							'post_type'      =>'ltat_de_votre_rseaus',
							'posts_per_page' => 2,
							'order'          => 'DESC',
					);
					$ltat_de = new WP_Query($args);
				    
					while( $ltat_de -> have_posts() ) : $ltat_de -> the_post();
			 
					$postDate = get_the_date('Y-m-d',$ltat_de->ID);
					
					if($postDate==$todaysDate)
					{
					?>
							<p><a href="<?php echo site_url();?>/letat-de-votre-reseau/"><?php echo date('d M, Y')?>
								<br><small><?php the_title();?><br>
								<?php $content = get_the_content(); echo mb_strimwidth($content, 0, 40);?></small></a></p>
					<?php
					}	
					endwhile;
					wp_reset_query();
					}
					else
					{
					?>
						<p><a><?php echo date('d/m/Y')?><br>
					<?php	
            					 echo 'Aucune perturbation pr&#233;vue sur votre r&#233;seau';
					?>			 
					</a></p>
					<?php
					}	
					?>  
					
			<!--***************END OF GETTING DATA FROM CUSTOM POST L’ÉTAT DE ******************-->
				
				
			<!--***************START GETTING DATA FROM CUSTOM POST L’ACTUALITÉ DE ******************-->	

                <h3><a href="<?php echo site_url();?>/actualites/"><?php the_field('actualite_de_votre_reseau_text',$post->ID);?></a></h3>
                    <?php 
					$args=array
					(
							'post_type'      =>'post',
							'posts_per_page' => 1,
							'order'          => 'DESC',
					);
					$lactualit_de = new WP_Query($args);
				     
					if($lactualit_de -> have_posts()) 
					{
					while( $lactualit_de -> have_posts() ) : $lactualit_de -> the_post();
					?>
					<p><a href="<?php echo site_url();?>/actualites/"><?php echo date('d/m/Y');?>&nbsp;<?php the_title();?>
                        <br><small><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 100);?></small></a></p>
					
					<?php 
					endwhile;
					wp_reset_query();
					}//if close
					else
					{
						echo "NO NOUVELLES DE VOTRE RESEAU";
					}
					
					?> 
					
					
			<!--***************END OF GETTING DATA FROM CUSTOM POST L’ACTUALITÉ DE ******************-->		
					
                    <div class="shadow-box-footer">
					
					<!--********GETTING DATA FROM CUSTOM FIELD SHADOW-BOX-FOOTER_TEXT*******-->
                       
					   <?php the_field('shadow-box-footer_text');?>
					   
                        <!--<h2>DJU</h2>
                        <p>mai 2016 : 142</p>-->

					</div>
                </div>
            </div>
        </div>
    </section>
    <section class="section3"> <i class="fa fa-fw fa-twitter"></i>
        <p>kalita <a href="<?php echo get_option_tree('twitter');?>"><?php echo get_option_tree('twitter');?></a> - 
		<?php echo get_option_tree('twitter_news_text');?></p>
    </section>
    <section class="section4">
        <div class="container">
            <h2>VOTRE RESEAU</h2>
            <div class="row">
			
			<!--****************** START GETTING CATEGORIES FROM VOTRE RESEAU *********************-->
		     <?php
				$args = array( 'taxonomy' => 'votrereseau_category','hide_empty'=>0 );
				$terms = get_terms('votrereseau_category', $args);

               foreach ($terms as $term) 
               {
			   ?>
					<div class="col-md-4 col-sm-4">
						 <div class="section4-column"><a href="<?php echo get_category_link( $term->term_id ); ?>"><span><img src="<?php echo z_taxonomy_image_url($term->term_id); ?>"></span></a>
							<h3><a href="<?php echo get_category_link( $term->term_id ); ?>"><?php echo $term->name;?></a></h3>
								<p><?php echo $term->description;?></p>
						</div>
					</div>
			    <?php  
			   }//end of for loop	
			    ?>
             <!--****************** END OF GETTING CATEGORIES FROM VOTRE RESEAU *********************-->   
            </div>
        </div>
    </section>
    <section class="section5">
        <div class="container">
            <div class="googlemap2">
			<?php 
				the_field('home_map',$post->ID);	
				?>
					<!--<iframe src="https://www.google.com/maps/d/embed?mid=1W7Y375wb8tog71Qi7yKOlFSPZLw" ></iframe>--> 
					
					<!--<iframe src="https://www.google.com/maps/d/u/2/embed?mid=1W7Y375wb8tog71Qi7yKOlFSPZLw" ></iframe>-->

            </div>
        </div>
    </section>
    <section class="section6">
        <div class="container">
            <div class="section6-heading">
                <h2>VOUS et votre RESEAU de chaleur</h2> </div>
            <div class="images-list">
				 <div class="row">
			<!--****************** START GETTING CATEGORIES FROM VOUS ET VOTRE *********************-->
		     <?php
				$i=1;
				$args = array( 'taxonomy' => 'vousetvotre_category',
								'order' => 'ASC',
								'exclude'=>11,
								'hide_empty'=>0 );
				$terms = get_terms('vousetvotre_category', $args);
                
               foreach ($terms as $term)			   
               {
				   	
					
				   if($i>=1 && $i<=3)
				   {

				?>
						<div class="col-md-4 col-sm-4">
							<div class="img-list1">
								<a href="<?php echo get_category_link( $term->term_id ); ?>">
									<span><img src="<?php echo z_taxonomy_image_url($term->term_id); ?>"></span>
								</a>
								<div class="images-list-text"> 
									<h2><a href="<?php echo get_category_link( $term->term_id ); ?>"><?php echo $term->name;?></a></h2>
										 <p><?php echo $term->description;?></p>
								</div>
							</div>
						</div>
				<?php
						
				   }//end of inner if
				  
				 
				   else
				   {
						if($i==4)
						{
				?>
							</div><!-- Row div close-->
							</div><!-- images-list div close-->
							
							<div class="images-list-row2">
								<div class="row">
				<?php 
						}//end of if
						
						if($i>=4 && $i<=6)
						{
							
				?>
							<div class="col-md-4 col-sm-4">
								<div class="img-list1">
									<a href="<?php echo get_category_link( $term->term_id ); ?>">
										<span><img src="<?php echo z_taxonomy_image_url($term->term_id); ?>"></span>
									</a>
									<div class="images-list-text"> 
										<h2><a href="<?php echo get_category_link( $term->term_id ); ?>"><?php echo $term->name;?></a></h2>
											 <p><?php echo $term->description;?></p>
									</div>
								</div>
							</div>
				<?php
							
						}//end of if
						
					
					}//end of else
					
					$i++;
				   
			   }//end of foreach loop
				?>       
            </div>
        </div>
		
		<!--****************** END OF GETTING CATEGORIES FROM VOUS ET VOTRE *********************-->
    </section>
	
<!--**************START SCRIPT FOR GOOGLE MAP*****************-->
        <style type="text/css">
            .acf-map {
                border: 1px solid #ccc;
                height: 427px;
                margin: 0;
            }
            /* fixes potential theme css conflict */
            
            .acf-map img {
                max-width: inherit !important;
            }
        </style>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script type="text/javascript">
            (function ($) {
                /*
                 *  render_map
                 *
                 *  This function will render a Google Map onto the selected jQuery element
                 *
                 *  @type	function
                 *  @date	8/11/2013
                 *  @since	4.3.0
                 *
                 *  @param	$el (jQuery element)
                 *  @return	n/a
                 */
                function render_map($el) {
                    // var
                    var $markers = $el.find('.marker');
                    // vars
                    var args = {
                        zoom: 30,
                        center: new google.maps.LatLng(0, 0),
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    // create map	        	
                    var map = new google.maps.Map($el[0], args);
                    // add a markers reference
                    map.markers = [];
                    // add markers
                    $markers.each(function () {
                        add_marker($(this), map);
                    });
                    // center map
                    center_map(map);
                }
                /*
                 *  add_marker
                 *
                 *  This function will add a marker to the selected Google Map
                 *
                 *  @type	function
                 *  @date	8/11/2013
                 *  @since	4.3.0
                 *
                 *  @param	$marker (jQuery element)
                 *  @param	map (Google Map object)
                 *  @return	n/a
                 */
                function add_marker($marker, map) {
                    // var
                    var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));
                    // create marker
                    var marker = new google.maps.Marker({
                        position: latlng,
                        map: map
                    });
                    // add to array
                    map.markers.push(marker);
                    // if marker contains HTML, add it to an infoWindow
                    if ($marker.html()) {
                        // create info window
                        var infowindow = new google.maps.InfoWindow({
                            content: $marker.html()
                        });
                        // show info window when marker is clicked
                        google.maps.event.addListener(marker, 'click', function () {
                            infowindow.open(map, marker);
                        });
                    }
                }
                /*
                 *  center_map
                 *
                 *  This function will center the map, showing all markers attached to this map
                 *
                 *  @type	function
                 *  @date	8/11/2013
                 *  @since	4.3.0
                 *
                 *  @param	map (Google Map object)
                 *  @return	n/a
                 */
                function center_map(map) {
                    // vars
                    var bounds = new google.maps.LatLngBounds();
                    // loop through all markers and create bounds
                    $.each(map.markers, function (i, marker) {
                        var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
                        bounds.extend(latlng);
                    });
                    // only 1 marker?
                    if (map.markers.length == 1) {
                        // set center of map
                        map.setCenter(bounds.getCenter());
                        map.setZoom(15);
                    } else {
                        // fit to bounds
                        map.fitBounds(bounds);
                    }
                }
                /*
                 *  document ready
                 *
                 *  This function will render each map when the document is ready (page has loaded)
                 *
                 *  @type	function
                 *  @date	8/11/2013
                 *  @since	5.0.0
                 *
                 *  @param	n/a
                 *  @return	n/a
                 */
                $(document).ready(function () {
                    $('.acf-map').each(function () {
                        render_map($(this));
                    });
                });
            })(jQuery);
        </script>
        <!--**************END OF SCRIPT FOR GOOGLE MAP*****************-->
	
  <?php get_footer(); ?>