<?php

add_theme_support('post-thumbnails');

// Rename Label Post and Itens
function rename_label() {
  global $menu;
  global $submenu;
  $name                       = 'Cardápio';
  $item                       = 'Produto';
  $itens                      = 'Produtos';
  $menu[5][0]                 = $name;
  $submenu['edit.php'][5][0]  = 'Todos ' . $itens;
  $submenu['edit.php'][10][0] = 'Adicionar ' . $item;
  $submenu['edit.php'][16][0] = 'Ingredientes';
}
add_action( 'admin_menu', 'rename_label' );

function rename_object() {
    global $wp_post_types;
    $name                       = 'Cardápio';
    $item                       = 'Produto';
    $itens                      = 'Produtos';
    $labels                     = &$wp_post_types['post']->labels;
    $labels->name               = $name;
    $labels->add_new            = 'Adicionar ' . $item;
    $labels->add_new_item       = 'Adicionar novo ' . $item;
    $labels->search_items       = 'Procurar ' . $item;
    $labels->all_items          = 'Todos ' . $itens;
    $labels->singular_name      = $item;
    $labels->edit_item          = 'Editar ' . $item;
    $labels->new_item           = $item;
    $labels->view_item          = 'Ver ' . $item;
    $labels->not_found          = 'Nenhum ' . $item . ' encontrado';
    $labels->not_found_in_trash = 'Nenhum ' . $item . ' encontrado na lixeira';
    $labels->menu_name          = $item;
    $labels->name_admin_bar     = $item;
}
add_action( 'init', 'rename_object' );

// Clear Menu Side
function clean_menu() {
  global $menu;
  global $submenu;
  unset($submenu['edit.php'][16]);
  remove_menu_page ('upload.php');
  remove_menu_page ('link-manager.php');
  // remove_menu_page ('edit.php?post_type=page');
  // remove_menu_page ('options-general.php');
  remove_menu_page ('tools.php');
  // remove_menu_page ('edit.php');
  remove_menu_page ('edit-comments.php');
  // remove_menu_page ('plugins.php');
  remove_menu_page ('themes.php');
  remove_menu_page ('users.php');
}
add_action ('admin_menu', 'clean_menu');

/**
 * Remove o plugin Advanced custom field do menu
 */
function remove_menus () {
  remove_menu_page( 'edit.php?post_type=acf' );
}
add_action( 'admin_init', 'remove_menus' );

// Clear Menu Bar
function clean_bar() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_node('new-media');
    $wp_admin_bar->remove_node('new-user');
    $wp_admin_bar->remove_menu('edit-profile');
}
add_action( 'wp_before_admin_bar_render', 'clean_bar' );

// Remove Cols Post
function rm_cols_post( $cols ) {
  unset($cols['author']);
  unset($cols['tags']);
  // unset($cols['categories']);
  unset($cols['tags']);
  unset($cols['comments']);
  unset($cols['date']);
  return $cols;
}
add_filter( 'manage_edit-post_columns', 'rm_cols_post', 10, 1 );

// Remove Cols Page
function rm_cols_page($cols) {
  unset( $cols['author'] );
  unset( $cols['comments']);
  unset( $cols['date']);
  return $cols;
}
add_filter( 'manage_pages_columns', 'rm_cols_page' );

// Dashboard One Collumn
function single_screen_cols( $columns ) { $columns['dashboard'] = 1; return $columns; }
add_filter( 'screen_layout_columns', 'single_screen_cols' );
function single_screen_dash_cols(){return 1;}
add_filter( 'get_user_option_screen_layout_dashboard', 'single_screen_dash_cols' );


function wpdocs_register_my_custom_menu_page() {
   add_menu_page(
      null,
      'Conteúdo Geral',
      'edit_posts',
      '/post.php?post=2&action=edit',
      null,
      'dashicons-media-default',
      2
  );
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );

function my_login_head() {
  echo "
  <style>
  body.login #login h1 a {
    background: url('/assets/images/logo.png') no-repeat scroll center top transparent;
    width: 100%;
    height: 120px;
  }
  </style>
  ";
}
add_action("login_head", "my_login_head");


function rm_widgets_dash() {
  global $wp_meta_boxes;

  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  remove_action('welcome_panel', 'wp_welcome_panel');
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
  // unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

}
add_action('wp_dashboard_setup', 'rm_widgets_dash' );


/**
 * Cria os links para formarem o menu lateral com as subcategorias da categoria atual.
 * 
 * Não remova ou coloque espaços entre a tag final "EOT;", link abaixo com explicação.
 * https://secure.php.net/manual/pt_BR/language.types.string.php#language.types.string.syntax.heredoc
 * 
 * @return String
 */
function cardapio_menu()
{
  $args = array(
    'child_of' => get_the_category()[0]->term_id,
    'hide_empty' => true
  );
  
  $categories =  get_categories( wp_parse_args($args) );
  
  foreach($categories as $category):
    // Gera o link para a categoria
    $categoryLink = get_category_link($category->term_id);

    /**
     * Gera a classe "is-active" para ser incluida nos links do cardapio quando o usuario seleciona-la.
     * @var String
     */
    $isActive = (get_queried_object()->term_id == $category->term_id) ? 'is-active' : '';

    // Exibe o link da subcategoria com as configurações necessárias.
    echo <<<EOT
    <a href="$categoryLink" 
    class="panel-block $isActive">
    $category->name
    <span class="icon"><i class="fa fa-angle-right fa-fw"></i></span>
    </a>
EOT;
  endforeach;
}
add_action('create_cardapio_options', 'cardapio_menu');