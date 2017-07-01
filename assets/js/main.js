$(document).ready(function () {

  var siema = new Siema({
    selector: '.hero .hero-body .slider .siema',
    duration: 200,
    loop: true,
    draggable: false
  });

  $('.prev').on('click', function () {
    siema.prev();
  });

  $('.next').on('click', function () {
    siema.next();
  });

  $('[data-scroll]').on('click', function () {

    // TODO: realizar o scroll para a seção referente ao link clicado

  });

  $('.main-hero .scroll-down').on('click', function () {

    // TODO: Realizar o scroll da pagina ate o navbar

  });
});
