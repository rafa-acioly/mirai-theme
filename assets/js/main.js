$(document).ready(function () {

  var slider = simpleslider.getSlider({
      container: document.querySelector('[data-simple-slider]'),
      children: document.querySelectorAll('[data-simple-slider] img'),
      transitionTime: 1,
      delay: 5.5
  });

  $('[data-simple-slider] .controls .next').on('click', function (event) {
    event.preventDefault();
    slider.next();
  });

  $('[data-simple-slider] .controls .prev').on('click', function (event) {
    event.preventDefault();
    slider.prev();
  });

  $('[data-scroll]').on('click', function () {

    // TODO: realizar o scroll para a seção referente ao link clicado

  });

  $('.main-hero .scroll-down').on('click', function () {

    // TODO: Realizar o scroll da pagina ate o navbar

  });
});
