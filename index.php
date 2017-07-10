<?php get_header(); ?>

<div class="hero is-fullheight introduction" id="home" xmlns="http://www.w3.org/1999/html">
  <div class="hero-body">
    <div class="container has-text-centered">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/cardapio-illustration.png" alt="ilustração de cardapio">
    </div>
  </div>
  <div class="hero-foot has-text-centered">
      <p class="is-hidden-tablet">
          <a href="tel:+551147961818" class="button is-success make-a-call">
              Ligar agora &nbsp;
              <span class="icon"><i class="fa fa-phone fa-fw"></i></span>
          </a>
      </p>
      <p class="is-hidden-tablet">
          <a href="<?= get_permalink( get_page_by_path( 'category/delivery' ) ); ?>" class="button go-to-menu">
              Cardapio delivery &nbsp;
              <span class="icon"><i class="fa fa-angle-right fa-fw"></i></span>
          </a>
      </p>
      <p class="pre-next-section">Conheça o Mirai</p>
      <a href="#" class="button button-next-section" data-scroll="products-menu">
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
    <?= do_shortcode("[metaslider id=5]"); ?>
    <section class="hero-foot">
        <div class="columns">
            <div class="column content is-half is-offset-one-quarter has-text-centered">
                <h1 class="title is-3 is-spaced">
                    No Mirai ou na sua casa <span>o maior cardápio japonês da região.</span>
                </h1>
                <h2 class="subtitle is-5">
                    <small>Escolha abaixo uma das opções do cardápio</small>
                </h2>
                <a href="<?= get_term_link('cardapio-completo', 'category'); ?>" class="button button-primary">
                    Cardápio completo
                    <span class="icons">
                        <i class="fa fa-angle-right fa-fw"></i>
                    </span>
                </a>
                <a href="<?= get_term_link('delivery', 'category'); ?>" class="button button-primary">
                    Cardápio Delivery &nbsp;
                    <span class="icons">
                        <i class="fa fa-motorcycle fa-fw"></i>
                    </span>
                </a>
                <br>
                <p>Sobre o restaurante</p>
                <a href="#" class="button button-next-section" data-scroll="who-is">
                    <span class="icons">
                        <i class="fa fa-angle-down"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>
</div>

<main class="content" id="who-is">
    <div class="columns is-multiline is-paddingless">
        <div class="column is-6">
            <img class="wow fadeInLeft" data-wow-delay="0.5s" src="<?= get_template_directory_uri(); ?>/assets/images/g10083.png" alt="fotos local">
        </div>
        <div class="wow fadeInRight column is-6" data-wow-delay="0.5s">
            <div class="columns">
                <div class="column content is-10">
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
                      <span class="social-tag">
                        <span class="hashtag">#</span>VemProMirai
                      </span>
                  </p>
                </div>
            </div>
        </div>
        <div class="wow fadeInLeft column is-6" data-wow-delay="0.5s" id="location">
            <div class="columns">
                <div class="column content is-7 is-offset-5">
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
                    <address>
                        <span class="street">Praça Norival Tavares, 331</span> <br>
                        <small>MOGI DAS CRUZES - SP</small>
                    </address>
                </div>
            </div>
        </div>
        <div class="wow fadeInRight column is-6" data-wow-delay="0.5s">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914.5774182139073!2d-46.18266678562846!3d-23.521361934566247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cdd839acb82ba7%3A0xe772543718ffe1db!2sMirai+Japanese+Food!5e0!3m2!1spt-BR!2sbr!4v1499128958235" width="800" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</main>

<section class="hero is-fullheight" id="contact">
    <div class="section">
        <div class="columns is-multiline">
            <div class="column is-4 is-offset-4 has-text-centered">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/g9854.png" alt="">
                <h1 class="title is-2">Fale com o Mirai!</h1>
                <h2 class="subtitle">Sempre pronto para receber seu feedback.</h2>
                <form action="">
                    <div class="field">
                        <p class="control has-icons-left">
                            <input class="input" placeholder="Nome" required>
                            <span class="icon is-small is-left">
                                <i class="fa fa-user-o"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left">
                            <input class="input" placeholder="Email" required>
                            <span class="icon is-small is-left">
                                <i class="fa fa-envelope-o"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left">
                            <textarea name="" id="" cols="30" rows="10" class="textarea" placeholder="Mensagem" required></textarea>
                            <span class="icon is-small is-left">
                                <i class="fa fa-comment-o"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control">
                            <button class="button is-large is-success is-fullwidth">Enviar mensagem</button>
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
<footer class="footer is-hidden-tablet">
    <div class="container">
        <div class="columns">
            <div class="column">
                <p><img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></p>
                <p>Reservas:</p>
                <p><span class="text-highlight">(11) 4796-1818</span></p>
            </div>
            <div class="column">
                <p><span class="text-highlight">PRAÇA NORIVAL TAVARES, 331</span> <br> MOGI DAS CRUZES-SP</p>
                <p>Delivery:</p>
                <p><span class="text-highlight">(11) 4796-2121 / 4796-1818</span></p>
                <p><img src="<?= get_template_directory_uri(); ?>/assets/images/credit.png" alt=""></p>
            </div>
        </div>
    </div>
</footer>

<?php get_footer(); ?>
