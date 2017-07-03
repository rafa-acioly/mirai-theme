<?php get_header(); ?>

<div class="hero is-fullheight introduction" id="home">
  <div class="hero-body">
    <div class="container has-text-centered">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/cardapio-illustration.png" alt="ilustração de cardapio">
    </div>
  </div>
  <div class="hero-foot has-text-centered">
      Veja o cardápio <br>
      <a href="#" data-scroll="products-menu">
        <span class="icons">
          <i class="fa fa-angle-down"></i>
        </span>
      </a>
  </div>
</div>

<div class="hero is-fullheight hero-cardapio" id="products-menu">
    <div class="hero-nav">
        <?php get_template_part('components/nav', 'nav'); ?>
    </div>
    <div class="slider">
        <div class="siema">
            <div class="item has-text-centered">
                <img src="http://placehold.it/1920x500" alt="">
            </div>
        </div>
    </div>
    <section class="hero-foot">
        <div class="columns">
            <div class="column content is-half is-offset-one-quarter has-text-centered">
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
                <a href="#" class="keep-scrolling" data-scroll="about">
                    <span class="icons">
                        <i class="fa fa-angle-down"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>
</div>

<main class="content" id="about">
    <div class="columns is-multiline is-paddingless">
        <div class="column is-6">
            <img class="wow slideInUp " src="<?= get_template_directory_uri(); ?>/assets/images/g10083.png" alt="fotos local">
        </div>
        <div class="column is-6">
            <div class="columns">
                <div class="column is-10">
                    <span class="icon">
                        <i class="fa fa-cutlery"></i>
                    </span>
                <h1 class="title is-3">
                    O maior restaurante <br>
                    japonês de Mogi da Cruzes.
                </h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos culpa impedit, ratione, fugit inventore porro deleniti consequuntur, consectetur, qui sequi corporis dolorem? Repudiandae aut iure illum officia minima animi tenetur!
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus officia id fugit, officiis, molestiae ullam porro non. Cumque reiciendis placeat dolorum, tenetur iure voluptatibus id reprehenderit impedit quod non? Cum.
                </p>
                <p>
                    #VemProMirai
                </p>
                </div>
            </div>
        </div>
        <div class="column is-6">
            <div class="columns">
                <div class="column is-7 is-offset-5">
                    <span class="icon">
                        <i class="fa fa-map-marker"></i>
                    </span>
                    <h1 class="title is-3">Perto de tudo, <br> fácil de chegar.</h1>
                    <p>
                        Localizado na badalada Praça Norival Tavares,
                        em Mogi das Cruzes - SP, O Mirai é o maior restaurante
                        japonês da região, suportando confortavelmente 120 pessoas.
                    </p>
                    <p>
                        Sistema de rodizio e também à la carte, são mais de 80 opções
                        no menu, feito por shusimen de renome e tradição.
                    </p>
                    <p>
                        Aguardamos sua visita.
                    </p>
                    <p>
                        <address>
                            Praça Norival Tavares, 331 <br>
                            Mogi das Cruzes - SP
                        </address>
                    </p>
                </div>
            </div>
        </div>
        <div class="column is-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14642.661967771613!2d-46.520577450000005!3d-23.43644785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1498874348875" width="800" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</main>

<section class="hero is-fullheight" id="contact">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column is-4 is-offset-4 has-text-centered">
                <span class="icon">
                    <i class="fa fa-comments-o"></i>
                </span>
                <h1 class="title is-2">Fale com o Mirai!</h1>
                <h2 class="subtitle">Sempre pronto para receber seu feedback.</h2>
                <form action="">
                    <div class="field">
                        <p class="control has-icons-left">
                            <input class="input" placeholder="Nome">
                            <span class="icon is-small is-left">
                                <i class="fa fa-user-o"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left">
                            <input class="input" placeholder="Email">
                            <span class="icon is-small is-left">
                                <i class="fa fa-envelope-o"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left">
                            <textarea name="" id="" cols="30" rows="10" class="textarea" placeholder="Mensagem"></textarea>
                            <span class="icon is-small is-left">
                                <i class="fa fa-comment-o"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control">
                            <button class="button is-large is-success is-fullwidth">Enviar</button>
                        </p>
                    </div>
                </form>
            </div>
            <div class="column is-6 is-offset-one-quarter has-text-centered">
                <div class="line-separator"></div>
                <p>
                    <p>Reservas somente por telefone:</p>
                    <p>
                        <a href="tel:+551147961818">(11) 4796-1818</a>
                    </p>
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
