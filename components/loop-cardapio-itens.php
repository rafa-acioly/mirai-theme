<?php if (have_posts()): while(have_posts()): the_post(); ?>
	<article class="column is-half">
		<div class="price-label">
			<div class="price-title">
				<h1 class="title is-6">0001. <?php the_title(); ?></h1>
				<h2 class="subtitle is-6"><?php the_content(); ?></h2>
			</div>
			<div class="price-tag has-text-right">
				<p><span class="size">P</span> <small>R$</small> 21.90</p>
				<p><span class="size">M</span> <small>R$</small> 25.90</p>
				<p><span class="size">G</span> <small>R$</small> 35.90</p>
			</div>
		</div>
	</article>
<?php endwhile; else: ?>
	<div class="notification is-info">
		Nenhum prato encontrado nesta categoria.
	</div>
<?php endif; ?>