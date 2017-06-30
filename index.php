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

<?php get_template_part('components/nav', 'nav'); ?>


<div class="slider hero">
    <div class="siema">
        <div>
            <img src="https://source.unsplash.com/random/1920x500" alt="">
        </div>
        <div>
            <img src="https://source.unsplash.com/random/1920x500" alt="">
        </div>
        <div>
            <img src="https://source.unsplash.com/random/1920x500" alt="">
        </div>
        <div>
            <img src="https://source.unsplash.com/random/1920x500" alt="">
        </div>
        <div>
            <img src="https://source.unsplash.com/random/1920x500" alt="">
        </div>
    </div>
    <div class="controls">
        <button class="button prev">
            <span class="icon"><i class="fa fa-angle-left"></i></span>
        </button>
        <button class="button down">
            <span class="icon"><i class="fa fa-angle-down"></i></span>
        </button>
        <button class="button next">
            <span class="icon"><i class="fa fa-angle-right"></i></span>
        </button>
    </div>
</div>


<section class="hero cardapio-options">
    <div class="hero-body">
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
                </div>
            </div>
        </div>
    </div>
    <div class="hero-foot has-text-centered">
        <a href="#">
            <span class="icons"><i class="fa fa-angle-down"></i></span>
        </a>
    </div>
</section>

<?php get_footer(); ?>
