<?php get_header(); ?>

<div class="hero is-fullheight is-primary">
  <div class="hero-body">
    <div class="container">
      <!-- Adicionar as imagens e textos do primeiro bloco -->
    </div>
  </div>
  <div class="hero-foot has-text-centered">
      <a href="#main-content">
        <span class="icons">
          <i class="fa fa-angle-down"></i>
        </span>
      </a>
  </div>
</div>

<div class="hero is-fullheight hero-cardapio">
    <div class="hero-nav">
        <?php get_template_part('components/nav', 'nav'); ?>
    </div>
    <div class="slider">
        <div class="siema">
            <div class="item has-text-centered">
                <img src="http://placehold.it/1920x550" alt="">
            </div>
        </div>
    </div>
    <section class="hero-foot">
        <div class="container">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter has-text-centered">
                    <h1 class="title is-3 is-spaced">
                        No Mirai ou na sua casa <span>o maior cardápio japonês da região.</span>
                    </h1>
                    <h2 class="subtitle is-5">
                        Escolha abaixo uma das opções do cardápio
                    </h2>
                    <a href="#" class="button button-primary">
                        Cardápio completo
                        <span class="icons">
                            <i class="fa fa-angle-right fa-fw"></i>
                        </span>
                    </a>
                    <a href="#" class="button button-primary">
                        Cardápio Delivery
                        <span class="icons">
                            <i class="fa fa-motorcycle fa-fw"></i>
                        </span>
                    </a>
                    <br>
                    <a href="#" class="keep-scrolling">
                        <span class="icons">
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
