<?php
/**
 * Cria os links para formar o menu lateral com as subcategorias da categoria atual.
 * 
 * Não remova ou coloque espaços entre a tag final "EOT;", link abaixo com explicação.
 * https://secure.php.net/manual/pt_BR/language.types.string.php#language.types.string.syntax.heredoc
 */
$args = array(
	// Seleciona o ID da categoria atual e usa para pegar todas as subcategorias da mesma
	'child_of' => get_the_category()[0]->term_id,

	// Caso a subcategoria não tiver nenhum produto associado não exibe no menu
	'hide_empty' => true
);
$categories =  get_categories( wp_parse_args($args) );

foreach($categories as $category): ?>

	<a href="<?= get_category_link($category->term_id); ?>" class="panel-block <?= (get_queried_object()->term_id == $category->term_id) ? 'is-active' : ''; ?>">
    	<?= $category->name; ?>
    	<span class="icon"><i class="fa fa-angle-right fa-fw"></i></span>
    </a>

<?php endforeach; ?>