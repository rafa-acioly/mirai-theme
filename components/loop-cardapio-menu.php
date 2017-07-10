<?php
/**
 * TODO: Buscar o ID da categoria PAI para montar o menu, atualmente
 * esta buscando o ID da categoria/subcategoria atual e quando acessamos a subcategoria ela não possui "filhos", logo, o menu não aparece.
 */

$args = array(
	// Seleciona o ID da categoria atual e usa para pegar todas as subcategorias da mesma
	'child_of' => get_queried_object()->term_id,

	// Caso a subcategoria não tiver nenhum produto associado não exibe no menu
	'hide_empty' => false
);
$categories =  get_categories( wp_parse_args($args) );


if (!empty($categories)): foreach($categories as $category): ?>

	<a href="<?= get_category_link($category->term_id); ?>" class="panel-block <?= (get_queried_object()->term_id == $category->term_id) ? 'is-active' : ''; ?>">
    	<?= $category->name; ?>
    	<span class="icon"><i class="fa fa-angle-right fa-fw"></i></span>
    </a>

<?php endforeach; else: ?>
	<div class="notification is-warning">
		Nenhuma categoria cadastrada!
	</div>
<?php endif; ?>