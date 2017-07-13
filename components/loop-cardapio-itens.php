<div class="has-text-centered" 
			v-if="isSearching && !notFound">
	<img src="<?= get_template_directory_uri(); ?>/assets/images/spinner.gif" alt="loading">.
</div>
<div class="notification is-info" 
			v-else-if="products.length < 1 && !isSearching && !notFound">
	<span class="icon">
		<i class="fa fa-info"></i>
	</span>
	Selecione a categoria ao lado.
</div>
<div class="notification is-warning"
			v-else-if="notFound">
	<span class="icon">
		<i class="fa fa-exclamation"></i>
	</span>
	Nenhum produto encontrado!
</div>
<article class="column is-half" v-for="product in products">
	<div class="price-label">
		<div class="price-title">
			<h1 class="title is-6">{{ product.id }}. {{ product.title.rendered }}</h1>
			<h2 class="subtitle is-6" v-html="product.content.rendered"></h2>
		</div>
		<div class="price-tag has-text-right">
			<p><span class="size">P</span> <small>R$</small> 19,00</p>
		</div>
	</div>
</article>