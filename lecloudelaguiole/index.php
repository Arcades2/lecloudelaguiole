<?php
/**
* Template Name: Index
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			  	<?php
			  	$args = [
			  		'post_type' => 'slider'
			  	];
			  	$the_query = new WP_Query($args);
			  	if ($the_query->have_posts()) :
			  		$i = 0;
			  		while($the_query->have_posts()) :
			  			$the_query->the_post();
			  	?>
			    <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" <?php echo ($i == 0) ? ' class="active"' : '' ?>></li>
			    <?php
			    $i++;
					endwhile;
				endif;
				?>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			  	<?php
			  	if($the_query->have_posts()) :
			  		$j = 0;
			  		while($the_query->have_posts()) :
				  		$the_query->the_post();
				  		$sliderImage = get_field('slide');
			  	?>
			    <div class="item<?php echo ($j == 0) ? ' active' : '' ?>" style="background-image:url('<?php echo $sliderImage['url'] ?>')"></div>
			    <?php 
			    	$j++;
				    endwhile;
				endif;
				wp_reset_postdata();
				?>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			<div class="container">
				<h1>Atelier de création de figurines ou statuettes</h1>
				<div class="home-top-text">
					<?php the_field('top_text') ?>
				</div>
			</div>
			<div
				class="parallax"
				style="background-image:url('<?php echo get_template_directory_uri() ?>/img/slider_1.jpg')">
				<div class="home-central-content">
					<img src="<?php echo get_template_directory_uri() ?>/img/logo.svg">
					<strong>Artisanat français, marque et modèle déposés.</strong>
				</div>
			</div>
			<div class="container">
				<div class="home-bottom-text">
					<?php the_field('bottom_text') ?>
				</div>

				<hr>

				<h2 class="text-center">Nos dernières créations</h2>	
				<div class="new-products">
					<?php $figs = get_field('last_fig');
					if ($figs) :
						foreach($figs as $post) :
							setup_postdata($post);
							$title = get_the_title();
							$img = get_field('fig_image');
							$price = get_field('fig_price');
							$size = get_field('fig_size');
					?>
					<div class="new-product figurine" style="background-image:url('<?php echo $img['url'] ?>')">
						<p class="new-product-title"><?php echo $title ?></p>
						<?php if ($price) : ?>
						<p class="home-price"><?php echo $price ?>€</p>
					<?php endif ?>
					<?php if($size) : ?>
						<p class="home-size"><?php echo $size ?>cm</p>
					<?php endif ?>
					</div>
					<?php
						endforeach;
					endif;
					?>
				</div>

			</div>
			<div class="container-fluid">
	<div class="lightbox">
		<div class="container lightbox-content">
			<div class="limage"></div>		
		</div>
		
	</div>
</div>	

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
