<?php get_header(); ?>
<?php get_template_part('components/nav', 'nav'); ?>

<div class="hero">
    <div class="hero-body">
        <div class="container content has-text-centered">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/page/g10846.png" alt="icon entrega" />
            <h1 class="title is-2">Cardápio Delivery</h1>
            <h2 class="subtitle is-4">
            	<span class="fone-ddd">(11)</span> 4796-2121 / 4796-1818
            </h2>
            <img src="<?= get_template_directory_uri(); ?>/assets/images/page/g10838.png" alt="ilustracao prato" />
        </div>
    </div>
</div>

<section class="section">
  <div class="container">
  	<div class="columns">
	  	<div class="column is-3">
	  		<nav class="panel">
	  			<?php do_action('create_cardapio_options'); ?>
	  		</nav>
	  	</div>
	  	<main class="column">
	  		<h1 class="title main-title"><?= get_queried_object()->name; ?></h1>
	  		<div class="columns is-multiline">
	  		<?php 
	  			$postsQuery = array(
	  				'posts_per_page' => -1, // Seleciona todos os posts
	  				'cat' => get_queried_object()->term_id,
	  			);
	  			query_posts( wp_parse_args($postsQuery) ); 
	  		?>

	  		<?php if (have_posts()): while(have_posts()): the_post(); ?>
	  			<article class="column is-half">
	  				<div class="price-label">
	  					<div class="price-title">
	  						<h1 class="title is-6">0001. <?php the_title(); ?></h1>
	  						<h2 class="subtitle is-6"><?php the_content(); ?></h2>
	  					</div>
	  					<div class="price-tag has-text-right">
	  						<p><span class="size">P</span> <small>R$</small> 21.90</p>
	  						<p><span class="size">M</span> <small>R$</small> 25.90</p>
	  						<p><span class="size">G</span> <small>R$</small> 35.90</p>
	  					</div>
	  				</div>
	  			</article>
	  		<?php endwhile; endif; ?>
	  		</div>
	  	</main>
	  </div>
  </div>
</section>

<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column is-6" id="location">
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
	        <div class="column is-6">
	            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914.5774182139073!2d-46.18266678562846!3d-23.521361934566247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cdd839acb82ba7%3A0xe772543718ffe1db!2sMirai+Japanese+Food!5e0!3m2!1spt-BR!2sbr!4v1499128958235" width="800" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
	        </div>
		</div>
	</div>
</section>

<footer>
	<div class="container">
		<div class="level">
			<div class="level-item">
				<img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt="logotipo">
				<address>
					 <span class="street">Praça Norival Tavares, 331</span><br>
					<small>Mogi das Cruzes - SP</small>
				</address>
			</div>
			<div class="level-item">
				<p>
					<span>Reservas:</span> <br>
					(11) 4796-1818
				</p>
				<p>
					<span>Delivery:</span> <br>
					(11) 4796-2121 / 4796-1818
				</p>
			</div>
			<div class="level-item">
				<a href="" target="_blank">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/credit.png" alt="logotipo paverkan">
				</a>
			</div>
		</div>
	</div>
</footer>

<?php get_footer(); ?>
