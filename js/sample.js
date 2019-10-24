$(function(){
  $(window).scroll(function(){
    $('.scroll-in').each(function(){
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 200){
        $(this).addClass('scrollin');
      }
    });
  });
});


$(function () {

	$('.zdo_drawer_button').click(function () {
		$(this).toggleClass('active');
		$('.zdo_drawer_bg').fadeToggle();
		$('nav').toggleClass('open');
	})
	$('.zdo_drawer_bg').click(function () {
		$(this).fadeOut();
		$('.zdo_drawer_button').removeClass('active');
		$('nav').removeClass('open');
	});
})
