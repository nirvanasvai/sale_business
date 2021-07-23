$(document).ready(function(){
    $('[data-fancybox="gallery"]').fancybox({
        // Options will go here
    });
	$('#openMenu').on('click', function(){
		$('.mobile-menu').css('display', 'flex');
	});
	$('#closeMenu').on('click', function(){
		$('.mobile-menu').css('display', 'none');
	});
	$('.view-more').text('Показать все категории');
	$('.view-more').on('click', function(){
		$('.hd').toggle();
		$(this).text(function(i, v){
               return v === 'Показать все категории' ? 'Свернуть категории' : 'Показать все категории'
        });
	});

    //

    var $slider = $('.object-gallery__slides');

    if ($slider.length) {
        var currentSlide;
        var slidesCount;
        var sliderCounter = document.getElementsByClassName('count');

        var updateSliderCounter = function(slick, currentIndex) {
            currentSlide = slick.slickCurrentSlide() + 1;
            slidesCount = slick.slideCount;
            $(sliderCounter).text(currentSlide + '/' +slidesCount)
        };

        $slider.on('init', function(event, slick) {
            $slider.append(sliderCounter);
            updateSliderCounter(slick);
        });

        $slider.on('afterChange', function(event, slick, currentSlide) {
            updateSliderCounter(slick, currentSlide);
        });
    }


        //


    $('.object-gallery__slides').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        nav: true,
    });
    $('.slider-nav > div').click(function() {
        $('.object-gallery__slides').slick('slickGoTo',$(this).index());
    })

    $(".object-galley__slides").on("init", function(event, slick){
        $(".count").text(parseInt(slick.currentSlide + 1) + ' / ' + slick.slideCount);
    });

    $(".object-galley__slides").on("afterChange", function(event, slick, currentSlide){
        $(".count").text(parseInt(slick.currentSlide + 1) + ' / ' + slick.slideCount);
    });







 	$('#callBtn').on('click', function(e){
 		event.preventDefault();
 		$('#callModal').show(200);
 	});

 	$('#closeCallModal').on('click', function(e){
 		event.preventDefault();
 		$('#callModal').hide(200);
 	});

 	// $(window).scroll(function() {
 	// var $element = $('.object-contact');
 	// let counter = 0;
 	//   var scroll = $(window).scrollTop() + $(window).height();
 	//   // var offset = $element.offset().top
     //
 	//   if (scroll > offset && counter == 0) {
 	//     $('#actionsPanel').show();
 	//     counter = 1;
 	//   }
 	// });
});








