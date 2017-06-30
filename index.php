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


<div class="hero is-medium" data-simple-slider>
    <img src="https://unsplash.it/1920/800?random=1" alt="">
    <img src="https://unsplash.it/1920/800?random=2" alt="">
    <img src="https://unsplash.it/1920/800?random=3" alt="">
    <img src="https://unsplash.it/1920/800?random=4" alt="">
    <img src="https://unsplash.it/1920/800?random=5" alt="">
    <div class="controls">
        <div class="prev">
            <a href="#">
                <span class="icon">
                    <i class="fa fa-angle-left"></i>
                </span>
            </a>
        </div>
        <div class="down">
            <a href="#">
                <span class="icon">
                    <i class="fa fa-angle-down"></i>
                </span>
            </a>
        </div>
        <div class="next">
            <a href="#">
                <span class="icon">
                    <i class="fa fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>
</div>


<section class="section">
    <div class="columns">
        <div class="column is-half is-offset-one-quarter has-text-centered">
            <h1 class="title is-3">
                No Mirai ou na sua casa <span>o maior cardápio japonês da região.</span>
            </h1>
            <h2 class="subtitle is-5">
                Escolha abaixo uma das opções do cardápio
            </h2>
            <a href="" class="button button-primary">
                Cardápio completo
                <span class="icon">
                    <i class="fa fa-angle-right"></i>
                </span>
            </a>
            <a href="" class="button button-primary">
                Cardápio Delivery
                <span class="icon">
                    <i class="fa fa-motorcycle"></i>
                </span>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
