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
                    <h1><?php $post->post_title;?></h1>
				</div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="actualites-inner-img">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="actualites-inner-img-inner"><img src="<?php echo get_template_directory_uri();?>/images/inner.jpg">
                                <div class="actualites-inner-img-inner-text">
                                    <h2><?php echo get_the_date('j F'); ?></h2>
                                    <h3> <?php echo $post->post_title;?></h3> </div>
                                <div class="post_info"> <span class="time">Posted at <?php the_time('G:i'); ?></span> in <a href="http://demo.qodeinteractive.com/bridge/category/design/" rel="category tag">Design</a> 
								<span class="post_author">by<a class="post_author_link" href="http://demo.qodeinteractive.com/bridge/author/admin/"> 
								<?php $author_id=$post->post_author; 
								 echo the_author_meta('display_name',$author_id ); ?> </a>
							</span> <span class="dots"><i class="fa fa-square"></i></span><a class="post_comments" href="http://demo.qodeinteractive.com/bridge/inteligent-transitions-in-ux-design/#comments" target="_self">2 Comments</a> <span class="dots"><i class="fa fa-square"></i></span>
                                    <div class="blog_like"> <a href="#" class="qode-like" id="qode-like-5" title="Like this">205<span>  Likes</span></a> </div> <span class="dots"><i class="fa fa-square"></i></span>
                                    <div class="share"> <a href="#" class="share-icon" id="share-icons" title="Share"><span>  Share</span></a> </div>
                                </div>
                                <div class="actualites-img-description">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                    <h4>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h4> </div>
                                <div class="actualites-img-description2">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                    <div class="tags"> 
										<b>Tages:</b><small>
										
										<?php
										$tags = wp_get_post_tags($post->ID);
										if ($tags) 
										{
											foreach($tags as $tag) 
											{
										?>	
												<a href="#"><?php echo $tag->name;?></a>, 
										<?php	
											}
										  }
										?>
										
									</small> 
									</div>
                                </div>
                                <div class="actualites-comments"> <img src="<?php echo get_template_directory_uri();?>/images/comments.jpg">
                                    <a href="#">
                                        <button type="submit" class="actualites-inner-btn">SUBMIT</button>
                                    </a>
                                </div>
                            </div>
                        </div>
						
						
                        <div class="col-md-4">
                            <div class="standard-section3-column2">
                                <h2>Dernières actualités</h2>
                                <ul class="standard-column2-list">
                                    <li><a href="">Transition In UX Design</a></li>
                                    <li><a href="">Portugal 2013 road trip gallery</a></li>
                                    <li><a href="">Josh Woodward - Already there</a></li>
                                    <li><a href="">Recent Trends in Storytelling</a></li>
                                    <li><a href="">Supernatural FX Showreel</a></li>
                                </ul>
                                <div class="standard-column-list3">
                                    <h4>TAGS</h4>
                                    <ul class="standard-column-list3-inline">
                                        <li><a href="">Analysis</a></li>,
                                        <li><a href="">Art</a></li>,
                                        <li><a href="">Articles</a></li>,
                                        <li> <a href="">Audio</a></li>,
                                        <li><a href="">Business</a></li>,
                                        <li> <a href="">Culture,</a></li>,
                                        <li> <a href="">Development</a></li>,
                                        <li> <a href="">Ecology</a></li>,
                                        <li> <a href="">Events</a></li>,
                                        <li> <a href="">Information</a></li>,
                                        <li> <a href="">Inspiration</a></li>,
                                        <li> <a href="">Nature</a></li>,
                                        <li> <a href="">Opportunities</a></li>,
                                        <li> <a href="">Science</a></li>,
                                        <li> <a href="">Trends</a></li>,
                                        <li><a href="">Videos</a></li>. </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
<?php get_footer(); ?>