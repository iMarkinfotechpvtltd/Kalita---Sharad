<?php
/*
 Template Name: Default Template
 */
?>
<?php get_header(); 
global $post;
// echo '<pre>';
// print_r($post);
// echo '</pre>';
// die;
?>
 

<?php 

$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
if ( $feat_image ) 
{
?>
	<section class="standard-section2" style="background-image:url('<?php echo $feat_image; ?>')">
<?php
} 
else 
{ 
?>
<section class="standard-section2" style="background-image:url('http://placehold.it/1274x692&amp;text=Aucune image trouvée')">
<?php 
} 
?>
    <div class="container">
        <div class="standard-section2-heading">
            <h2><?php echo strtoupper ($post->post_title); ?></h2>
            <p>Lorem ipsum dolor sit amet consectetuer  adispiscing elit.</p>
        </div>
    </div>    
</section>
<section class="section3"> <i class="fa fa-fw fa-twitter"></i>
        <p>kalita <a href="<?php echo get_option_tree('twitter');?>"><?php echo get_option_tree('twitter');?></a> - 
		<?php echo get_option_tree('twitter_news_text');?></p>
 </section>
<section class="standard-section3">
<div class="container">
<div class="row">
<div class="col-md-8">
    <div class="standard-section3-column1">
        <h2><?php echo strtoupper ($post->post_title); ?> :</h2>
         <?php while ( have_posts() ) : the_post(); ?>
		 
				<?php echo $post->post_content;?>	
				
		   <?php endwhile; wp_reset_query(); ?>
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
</section>
    
<?php get_footer(); ?>