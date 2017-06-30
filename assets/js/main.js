$(document).ready(function () {

  var siema = new Siema({
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

  var slider = simpleslider.getSlider({
      container: document.querySelector('[data-simple-slider]'),
      children: document.querySelectorAll('[data-simple-slider] img'),
      transitionTime: 1,
      delay: 5.5
  });

  $('[data-scroll]').on('click', function () {

    // TODO: realizar o scroll para a seção referente ao link clicado

  });

  $('.main-hero .scroll-down').on('click', function () {

    // TODO: Realizar o scroll da pagina ate o navbar

  });
});
