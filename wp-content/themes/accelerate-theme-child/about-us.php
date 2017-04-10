<?php
/**
 * Template name: Custom About Page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>
   <section class="about-page">
   <div class="site-content">

    <?php while ( have_posts() ) : the_post();?>
      <h2 class="about-hero"> <span>Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h2>
  </div>
  </section>
  <?php endwhile; // end of the loop. ?>
  <section class="our-services">
    <div class="site-content">

      <h4>Our Services</h4>
      <p>We take pride in our clients and the content we create for them.<br>
        Here's a brief overview of our offered services</p>
 </div>
 </section>
 <div class="site-content">

  <?php query_posts('post_type=services');

      while ( have_posts() ) : the_post();

      $service_title = get_field('service_title');

      $service_description= get_field('service_description');

      $service_image = get_field('service_image');

      $size = "full";
      ?>

      <div class="individual-service">

				<div class="service-image">
					 <?php if($service_image) {
							echo wp_get_attachment_image ($service_image, $size); ?>
					 <?php } ?>
         </div>
      
	      <div class="service-desc">
	      		<h2><?php echo $service_title; ?></h2>
	      		<p><?php the_content(); ?></p>
        </div>
     </div>
<?php endwhile; // end of the loop. ?>

  <?php wp_reset_query(); ?>

	<section class="about-contact">

		<ul class="contact-button">

			<li><h3>Interested in working with us?</h3></li>
			<li><a class="button" href="#">Contact Us</a></li>
			</ul>
	</section>
</div>

<?php get_footer(); ?>
