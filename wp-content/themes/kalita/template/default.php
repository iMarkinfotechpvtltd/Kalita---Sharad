<?php
/*
 Template Name: Default
 */
?>
<?php get_header(); 
global $post;
// echo '<pre>';
// print_r($post);
// echo '</pre>';
// die;
?>
 <section class="section3"> <i class="fa fa-fw fa-twitter"></i>
        <p>kalita <a href="<?php echo get_option_tree('twitter');?>"><?php echo get_option_tree('twitter');?></a> - 
		<?php echo get_option_tree('twitter_news_text');?></p>
  </section>
 <section class="standard-section3">
	<div class="container">
		<div class="row">
		<div class="standard-section2-heading">
            <h2><?php echo strtoupper ($post->post_title); ?></h2>  
        </div>
		   <?php echo $post->post_content;?>
		</div>
	</div>
</section>
 
<?php get_footer(); ?>