<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php get_header(); 


global $post;

// echo '<pre>';

// print_r($post);

// echo '</pre>';

// die;
?>
<section class="background">
        <section>
            <div class="container">
                <div class="actualites-inner">
                    <h1><?php echo $post->post_title;?></h1>
				</div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="actualites-inner-img">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="actualites-inner-img-inner">
							
							<?php if ( has_post_thumbnail() ) 
							{
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'actulities_inner_image_size' );
							?>
								<img src="<?php echo $image[0]; ?>"/>
								<?php
								} 
								else 
								{ 
							   ?>
								<!--<img src="http://placehold.it/1100x619&amp;text=Aucune image trouvée" alt="<?php //the_title(); ?>"/>
								<?php 
								} 
								?>
							
							<!--<img src="<?php //echo get_template_directory_uri();?>/images/inner.jpg">-->
                                <div class="actualites-inner-img-inner-text">
                                    <h2><?php //echo get_the_date('j F'); ?></h2>
                                    <h3><?php echo $post->post_title;?></h3> </div>
                                <!--<div class="post_info"> <span class="time">Posted at <?php// the_time('G:i'); ?></span> in <a href="http://demo.qodeinteractive.com/bridge/category/design/" rel="category tag">Design</a> 
								<span class="post_author">by<a class="post_author_link" href="http://demo.qodeinteractive.com/bridge/author/admin/"> 
								<?php //$author_id=$post->post_author; 
								 //echo the_author_meta('display_name',$author_id ); ?> </a>
							</span> <span class="dots"><i class="fa fa-square"></i></span><a class="post_comments" href="http://demo.qodeinteractive.com/bridge/inteligent-transitions-in-ux-design/#comments" target="_self"><?php
							//$comments_count = wp_count_comments( $post->ID );
							 //echo $comments_count->total_comments;?>Comments</a> <span class="dots"><i class="fa fa-square"></i></span>
                                 <?php 
								/***** USE QUERY FOR GETTING COUNT FOR PERTICULAR POST *****/
								//$liked = $wpdb->get_var($wpdb->prepare( "SELECT COUNT(like_count) FROM `ka_post_likes` WHERE `post_id`= %d", $post->ID) );
						
								?>
								<div class="blog_like">
								<a href="javascript:void(0)" class="qode-like" id="qode-like-5" title="Like this" onClick="countLike(<?php //echo $post->ID?>);"><?php //echo $liked ;?><span> Likes</span></a>
								</div> <span class="dots"><i class="fa fa-square"></i></span>
									
                                    <div class="share"> <a href="#" class="share-icon" id="share-icons" title="Share"><span>  Share</span></a> </div>
                                </div>-->
								
								<!--Loader-->
								<!--<div id="loading_sec" style="display:none; width=40px; height=40px;" align="center">
									<img src="<?php //echo get_template_directory_uri(); ?>/images/ajax-loader.gif" id="loader">
								</div>-->
								
                                <div class="actualites-img-description">
                                    <?php echo $post->post_content;?>
                                    <div class="tags"> 
										<b>Tages:</b><small>
										<?php
										$tags = wp_get_post_tags($post->ID);
										if ($tags) 
										{
											foreach($tags as $tag) 
											{
										?>	
												<a href="<?php echo get_category_link( $tag->term_id ); ?>">
												<?php echo $tag->name;?></a>, 
										<?php	
											}
										  }
										?>
										
									</small> 
									</div>
                                </div>
                                <div class="actualites-comments">
						<?php				
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) 
							{
								comments_template();
							} 
							?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="standard-section3-column2">
                                <h2>Dernières actualités</h2>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
	
<script>

/* function countLike(postID) 
{
	alert('function called');
    jQuery.getJSON("http://jsonip.com/?callback=?", function (data) {
        console.log(data);
		alert(postID);
		var id=postID;
        var ip=data.ip;
		alert(ip);
		
		jQuery('#loading_sec').show();
		jQuery.ajax({
			
			url: "<?php bloginfo('url'); ?>/wp-content/themes/kalita/ajax/get_likes.php",
			type:"POST",
			cache: false,
			data : {
						ip_adrress :ip,// will be accessible in $_POST['ip_adrress']
						postID:id
				   },
			success: function(html)
			{
				alert(html);
				if(html==2)
				{
					location.reload();
					alert('You Have Already Liked These Post');
				}
				else
				{
					jQuery('.blog_like').empty().append(html);
				}
			}
		});
    });
}
 */
</script>		
<?php get_footer(); ?>