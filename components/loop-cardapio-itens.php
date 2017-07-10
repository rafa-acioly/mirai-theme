<?php if (have_posts()): while(have_posts()): the_post(); ?>
	<article class="column is-half">
		<div class="price-label">
			<div class="price-title">
				<h1 class="title is-6">0001. <?php the_title(); ?></h1>
				<h2 class="subtitle is-6"><?php the_content(); ?></h2>
			</div>
			<div class="price-tag has-text-right">
				<?php if (!empty(CFS()->get('preco'): foreach(CFS()->get('preco') as $key): ?>
					<?php if (!empty($key['preco_p'])): ?>
						<p><span class="size">P</span> <small>R$</small> <?= $key['preco_p']; ?></p>
					<?php endif; ?>

					<?php if (!empty($key['preco_m'])): ?>
						<p><span class="size">M</span> <small>R$</small> <?= $key['preco_m']; ?></p>
					<?php endif; ?>
					
					<?php if (!empty($key['preco_g'])): ?>
						<p><span class="size">G</span> <small>R$</small> <?= $key['preco_g']; ?></p>
					<?php endif; ?>
				<?php endforeach; endif; ?>
			</div>
		</div>
	</article>
<?php endwhile; else: ?>
	<div class="notification is-info">
		Nenhum prato encontrado nesta categoria.
	</div>
<?php endif; ?>