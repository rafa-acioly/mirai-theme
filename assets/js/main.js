$(document).ready(function () {

  /**
   * Animação com WOWJS
   */
  new WOW().init();

  $(document).on('click', '#cardapio-app .container .columns .column .panel .panel-block', function () {
    var menuOptions = $('#cardapio-app .container .columns .column .panel .panel-block');

    menuOptions.not($(this)).removeClass('is-active');

    $(this).addClass('is-active');
  });

  /**
   * Exibe o menu na versão mobile
   */
  $('.nav-toggle').on('click', function () {
    $(this).toggleClass('is-active') && $('.nav-menu').toggleClass('is-active');
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
    event.preventDefault();
    goToPart($(this).data('scroll'));
  });
});
