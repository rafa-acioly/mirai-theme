<nav class="nav" id="main-content">
  <div class="container">
    <div class="nav-left">
      <div class="nav-item">
        <a href="<?= esc_url( home_url( '/' ) ); ?>">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/g22.png" alt="">
        </a>
      </div>
    </div>

    <div class="nav-right nav-menu">
      <div class="nav-item">
        <a href="<?= get_term_link( 'cardapio-completo', 'category' ); ?>">
          Cardápio
          <span class="icon">
            <i class="fa fa-angle-down fa-fw"></i>
          </span>
        </a>
      </div>
      <div class="nav-item">
        <a href="<?= is_home() ? '#' : esc_url( home_url( '/' ) ); ?>" data-scroll="who-is">O Mirai</a>
      </div>
      <div class="nav-item">
        <a href="<?= is_home() ? '#' : esc_url( home_url( '/' ) ); ?>" data-scroll="location">Localização</a>
      </div>
      <div class="nav-item">
        <a href="<?= is_home() ? '#' : esc_url( home_url( '/' ) ); ?>" data-scroll="contact">Contato</a>
      </div>
    </div>

    <div class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</nav>
