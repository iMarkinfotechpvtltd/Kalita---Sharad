<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
 
get_header();
global $post; 

/*** CODE USE FOR GETTING CUSTOM FIELD CATEGORY_IMAGE VALUE FROM TAXONOMY ***/

$terms = wp_get_post_terms( $post->ID, 'vousetvotre_category' ); 

$term_id=$terms['0']->term_id;

$value = get_field('category_image','vousetvotre_category_'.$term_id);

if ( $value ) 
{
?>
	<section class="standard-section2" style="background-image:url('<?php echo $value['url']; ?>')">
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
            <h2><?php echo strtoupper (single_cat_title()); ?></h2>
            <p>Lorem ipsum dolor sit amet consectetuer  adispiscing elit.</p>
        </div>
    </div>     
</section>

<section class="standard-section3">
<div class="container">
<div class="row">
<div class="col-md-8">
    <div class="standard-section3-column1">
        <h2>VOUS et le réseau de chaleur : <?php echo strtoupper (single_cat_title()); ?></h2>
         <?php while ( have_posts() ) : the_post(); ?>
		 
				<h3><a href="<?php the_permalink();?>"><?php echo $post->post_title;?></a></h3>
						       <p><?php echo wp_trim_words( $post->post_content, 50);?></p>	
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
