<?php
$args = array(
	// Seleciona o ID da categoria atual e usa para pegar todas as subcategorias da mesma
	'child_of' => get_the_category()[0]->cat_ID,

	// Caso a subcategoria não tiver nenhum produto associado não exibe no menu
	'hide_empty' => false
);
$categories =  get_categories( wp_parse_args($args) );


if (!empty($categories)): foreach($categories as $category): ?>

	<a @click="findProducts('<?= $category->name; ?>')"  class="panel-block <?= (get_queried_object()->term_id == $category->term_id) ? 'is-active' : ''; ?>">
    	<?= $category->name; ?>
    	<span class="icon"><i class="fa fa-angle-right fa-fw"></i></span>
    </a>

<?php endforeach; else: ?>
	<div class="notification is-warning">
		Nenhuma categoria cadastrada!
	</div>
<?php endif; ?>