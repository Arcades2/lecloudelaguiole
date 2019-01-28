<?php
/**
* Template Name: Contact
*/
get_header();
?>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<h1 class="text-center contact-title">Contact</h1>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		?>
		<p><?php echo get_the_content() ?></p>
		<?php
		endwhile;
		?>
		<div class="contact-form col-md-6 col-md-offset-3">
			<?php echo do_shortcode(get_field('form')); ?>
		</div>
		
			</div>
			

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php 
	get_footer();
?>