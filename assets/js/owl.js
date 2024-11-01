$(document).ready(function(){
    $('.demonstration__sldier').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:5000, // Время в миллисекундах между прокруткой слайдов
        autoplaySpeed: 5000, // Скорость прокрутки
        autoplayHoverPause:true, // Не ставить на паузу при наведении
        items:3,
        margin: 50,
        dots: false,
        responsive: {
            0: {
                  items: 1
            },
            576: {
                  items: 2
            },
            768: {
                  items: 2
            },
            992: {
                  items: 3,
            }, 1200: {
                  items: 3
            }
        }
    });
});


$(document).ready(function(){
      $('.ourclient__slider').owlCarousel({
          loop:true,
          autoplay:true,
          autoplayTimeout:5000, // Время в миллисекундах между прокруткой слайдов
          autoplaySpeed: 5000, // Скорость прокрутки
          autoplayHoverPause:true, // Не ставить на паузу при наведении
          items:3,
          margin: 50,
          dots: false,
          responsive: {
              0: {
                    items: 2
              },
              576: {
                    items: 2
              },
              768: {
                    items: 3
              },
              992: {
                    items: 3,
              }, 1200: {
                    items: 5
              }
          }
      });
  });