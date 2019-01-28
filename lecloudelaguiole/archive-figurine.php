<?php 

get_header();

$categories = get_terms('figurines-category');
?>
<div class="container">
	<h1 class="text-center">Nos figurines</h1>
	<p class="fig-text">
		Découvrez toutes nos figurines triées par thèmes. Les prix indiqués sont approximatif car nous pouvons faire des modifications sur les statuettes sur votre demande et donc faire varier le prix. Pour toute commande, veuillez nous envoyer vos informations par le biais du formulaire de <a href="/contact">contact</a>.
	</p>
	<div class="figurines">

		<?php
		foreach($categories as $categ) :
			wp_reset_query();
			$args = [
				'post_type' => 'figurine',
				'tax_query' => [
					[
						'taxonomy' => 'figurines-category',
						'field' => 'slug',
						'terms' => $categ->slug
					]
				]
			];
			$loop = new WP_Query($args);

			if($loop->have_posts()) :
		?>
		<div class="categ" id="<?php echo $categ->name ?>">
			<h2><?php echo $categ->name ?></h2>
			<div class="categ-fig">
					<?php
				while($loop->have_posts()) : $loop->the_post();
					$title = get_the_title();
					$price = get_field('fig_price');
					$img = get_field('fig_image');
					$size = get_field('fig_size');
			?>
			<div class="figurine" style="background-image:url('<?php echo $img['sizes']['medium_large'] ?>">
				<h4 class="fig-title"><?php echo $title ?></h4>
				<?php if($price != null) : ?>
				<div class="price"><?php echo $price ?>€</div>
				<?php endif ?>
				<?php if($size) : ?>
				<div class="fig-size"><?php echo $size ?>cm</div>
			<?php endif ?>
			</div>
			<?php
				endwhile;
			endif;
			?>
			</div>
		
		</div>
		<?php
		endforeach;
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

<?php 

get_footer();

?>