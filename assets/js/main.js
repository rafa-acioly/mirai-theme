$(document).ready(function () {

  new WOW().init();

  /*var siema = new Siema({
    selector: '.hero .hero-body .slider .siema',
    duration: 200,
    loop: true,
    draggable: false
  });*/

  $('.prev').on('click', function () {
    //siema.prev();
  });

  $('.next').on('click', function () {
    //siema.next();
  });


  /**
   * Realize o scroll para um determinado elemento com ID
   * @param {String} elementToShow
   */
  function goToPart (elementToShow) {
    $('html, body').animate({
      scrollTop: $('#'+elementToShow).offset().top
    }, 1000);
  }

  /**
   * Adiciona o evento click em todos os elementos de link
   * com atributo data-scroll
   */
  $('a[data-scroll]').on('click', function (event) {
    goToPart($(this).data('scroll'));
  });
});
