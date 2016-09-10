<?php
/*
 Template Name: Contact
 */
?>
<?php get_header(); ?>
 
  <section class="section3-acc"> <i class="fa fa-fw fa-twitter"></i>
        <p>kalita <a href="<?php echo get_option_tree('twitter');?>"><?php echo get_option_tree('twitter');?></a> - 
		<?php echo get_option_tree('twitter_news_text');?></p>
    </section>
      
    <section class="section4-contact">
        <div class="container">
            <div class="contact">
                <h2>NOUS CONTACTER</h2>
              
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                          <div class="contact-left">
                        <h3><?php  echo strtoupper(get_option_tree('kalita_heading')) ;?></h3>
                        <p><?php echo strtoupper(get_option_tree('addres'));?>
                              <button class="assistance-btn" type="button">ASSISTANCE TECHNIQUE <span><?php echo get_option_tree('phone_number');?></span></a>
                        </div>
                    </div>
                    
                     <div class="col-md-8 col-sm-8">
                         <div class="contact-right">
                             <h4><?php echo get_option_tree('contact_form_heading');?></h4>
                             
							 <?php echo do_shortcode('[contact-form-7 id="559" title="Contact form"]'); ?>
							 
                         </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
 
<?php get_footer(); ?>