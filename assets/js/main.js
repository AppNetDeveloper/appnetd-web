(function ($) {
  $(document).ready(function () {
    // Verificar que jQuery esté cargado
    if (typeof $ === 'undefined') {
      console.error('jQuery no está cargado correctamente');
      return;
    }
    
    // Verificar que las dependencias estén disponibles
    if (typeof Swiper === 'undefined') {
      console.warn('Swiper no está disponible');
    } else {
      // Inicializar Swiper si está disponible
      if ($('.swiper-container').length) {
        new Swiper('.swiper-container', {
          // Opciones de configuración de Swiper
          loop: true,
          autoplay: {
            delay: 5000,
            disableOnInteraction: false,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      }
    }
    
    // Verificar Slick Carousel
    if (typeof $.fn.slick === 'undefined') {
      console.warn('Slick Carousel no está disponible');
    } else {
      // Inicializar Slick si está disponible
      if ($('.slick-slider').length) {
        $('.slick-slider').slick({
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 1,
          adaptiveHeight: true,
          autoplay: true,
          autoplaySpeed: 5000
        });
      }
    }
    
    if (typeof AOS === 'undefined') {
      console.warn('AOS no está disponible');
    } else {
      // Inicializar AOS si está disponible
      AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
      });
    }
    
    if (typeof gsap === 'undefined') {
      console.warn('GSAP no está disponible');
    }

     // sticky header active
     if ($("#header").length > 0) {
      $(window).on("scroll", function (event) {
        var scroll = $(window).scrollTop();
        if (scroll < 1) {
          $("#header").removeClass("sticky");
        } else {
          $("#header").addClass("sticky");
        }
      });
    }
    
    // pricing-plan-tab

    $("#ce-toggle").on('click', function(event){
      $(".plan-toggle-wrap").toggleClass("active");
    });
    $("#ce-toggle").change(function () {
    if ($(this).is(":checked")) {
    $(".tab-content #yearly").hide();
    $(".tab-content #monthly").show();
    } else {
        $(".tab-content #yearly").show();
        $(".tab-content #monthly").hide();
      }
    });

        $(".header-search-btn").on("click", function (e) {
          e.preventDefault();
          $(".header-search-form-wrapper").addClass("open");
          $('.header-search-form-wrapper input[type="search"]').focus();
          $('.body-overlay').addClass('active');
     });
     $(".tx-search-close").on("click", function (e) {
          e.preventDefault();
          $(".header-search-form-wrapper").removeClass("open");
          $("body").removeClass("active");
          $('.body-overlay').removeClass('active');
     });


                // Inicialización segura de sliders de testimoniales
                function initTestimonialSliders() {
                  // Testimonial 1
                  if ($(".tes1-slider").length && typeof $.fn.slick !== 'undefined') {
                    try {
                      $(".tes1-slider").slick({
                        margin: "30",
                        slidesToShow: 1,
                        arrows: true,
                        centerMode: true,
                        loop: true,
                        prevArrow: $(".testimonial-next-arrow"),
                        nextArrow: $(".testimonial-prev-arrow"),
                        draggable: true,
                        fade: false,
                        responsive: [
                          {
                            breakpoint: 769,
                            settings: {
                              arrows: false,
                              centerMode: false,
                              centerPadding: "40px",
                              slidesToShow: 1,
                            },
                          },
                          {
                            breakpoint: 480,
                            settings: {
                              arrows: false,
                              centerMode: false,
                              centerPadding: "40px",
                              slidesToShow: 1,
                            },
                          },
                        ],
                      });
                    } catch (e) {
                      console.error('Error al inicializar tes1-slider:', e);
                    }
                  }

                  // Testimonial 6
                  if ($(".tes6-slider").length && typeof $.fn.slick !== 'undefined') {
                    try {
                      $(".tes6-slider").slick({
                        margin: "30",
                        slidesToShow: 3,
                        arrows: true,
                        centerMode: true,
                        loop: true,
                        prevArrow: $(".tes6-next-arrow"),
                        nextArrow: $(".tes6-prev-arrow"),
                        draggable: true,
                        fade: false,
                        responsive: [
                          {
                            breakpoint: 1024,
                            settings: {
                              slidesToShow: 2,
                              centerMode: false,
                            },
                          },
                          {
                            breakpoint: 769,
                            settings: {
                              arrows: false,
                              centerMode: false,
                              centerPadding: "40px",
                              slidesToShow: 1,
                            },
                          },
                          {
                            breakpoint: 480,
                            settings: {
                              arrows: false,
                              centerMode: false,
                              centerPadding: "20px",
                              slidesToShow: 1,
                            },
                          },
                        ],
                      });
                    } catch (e) {
                      console.error('Error al inicializar tes6-slider:', e);
                    }
                  }
                }


                // Inicializar sliders de testimoniales después de cargar Slick
                if (typeof $.fn.slick !== 'undefined') {
                  initTestimonialSliders();
                  
                  // Inicializar testimonial 7 si existe
                  if ($(".tes7-slider").length) {
                    try {
                      $(".tes7-slider").slick({
                        margin: "30",
                        slidesToShow: 1,
                        arrows: true,
                        centerMode: true,
                        loop: true,
                        prevArrow: $(".tes7-next-arrow"),
                        nextArrow: $(".tes7-prev-arrow"),
                        draggable: true,
                        fade: false,
                        responsive: [
                          {
                            breakpoint: 769,
                            settings: {
                              arrows: false,
                              centerMode: false,
                              centerPadding: "40px",
                              slidesToShow: 1,
                            },
                          },
                          {
                            breakpoint: 480,
                            settings: {
                              arrows: false,
                              centerMode: false,
                              centerPadding: "40px",
                              slidesToShow: 1,
                            },
                          },
                        ],
                      });
                    } catch (e) {
                      console.error('Error al inicializar tes7-slider:', e);
                    }
                  }
                  
                  // Inicializar slider de industrias 1 si existe
                  if ($(".industris-slider1").length) {
                    try {
                      $(".industris-slider1").slick({
                        margin: "30",
                        slidesToShow: 4,
                        arrows: true,
                        centerMode: true,
                        loop: true,
                        prevArrow: $(".tes7-next-arrow"),
                        nextArrow: $(".tes7-prev-arrow"),
                        draggable: true,
                        fade: false,
                        autoplay: true,
                        responsive: [
                          {
                            breakpoint: 769,
                            settings: {
                              arrows: false,
                              centerMode: false,
                              centerPadding: "40px",
                              slidesToShow: 2,
                            },
                          },
                          {
                            breakpoint: 480,
                            settings: {
                              arrows: false,
                              centerMode: false,
                              centerPadding: "40px",
                              slidesToShow: 1,
                            },
                          },
                        ],
                      });
                    } catch (e) {
                      console.error('Error al inicializar industrias-slider1:', e);
                    }
                  }
                  
                  // Inicializar slider de industrias 2 si existe
                  if ($(".industris-slider2").length) {
                    try {
                      $(".industris-slider2").slick({
                        margin: "30",
                        slidesToShow: 4,
                        arrows: true,
                        centerMode: true,
                        loop: true,
                        autoplay: true,
                        prevArrow: $(".tes7-next-arrow"),
                        nextArrow: $(".tes7-prev-arrow"),
                        draggable: true,
                        fade: false,
                        responsive: [
                          {
                            breakpoint: 769,
                            settings: {
                              arrows: false,
                              centerMode: false,
                              centerPadding: "40px",
                              slidesToShow: 2,
                            },
                          },
                          {
                            breakpoint: 480,
                            settings: {
                              arrows: false,
                              centerMode: false,
                              centerPadding: "40px",
                              slidesToShow: 1,
                            },
                          },
                        ],
                      });
                    } catch (e) {
                      console.error('Error al inicializar industrias-slider2:', e);
                    }
                  }

                  // Inicializar slider de case study si existe
                  if ($(".case9-slider").length) {
                    try {
                      $(".case9-slider").slick({
                        margin: "30",
                        slidesToShow: 3,
                        arrows: true,
                        centerMode: true,
                        loop: true,
                        prevArrow: $(".case9-next-arrow"),
                        nextArrow: $(".case9-prev-arrow"),
                        draggable: true,
                        fade: false,
                        responsive: [
                          {
                            breakpoint: 769,
                            settings: {
                              arrows: false,
                              centerMode: false,
                              centerPadding: "40px",
                              slidesToShow: 2,
                            },
                          },
                          {
                            breakpoint: 480,
                            settings: {
                              arrows: false,
                              centerMode: false,
                              centerPadding: "40px",
                              slidesToShow: 1,
                            },
                          },
                        ],
                      });
                    } catch (e) {
                      console.error('Error al inicializar case9-slider:', e);
                    }
                  }

                  // Inicializar slider de testimoniales 9 si existe
                  if ($(".tes9-slider").length) {
                    try {
                      $(".tes9-slider").slick({
                        margin: "30",
                        slidesToShow: 3,
                        arrows: true,
                        centerMode: true,
                        loop: true,
                        prevArrow: $(".tes9-next-arrow"),
                        nextArrow: $(".tes9-prev-arrow"),
                        draggable: true,
                        fade: false,
                        responsive: [
                          {
                            breakpoint: 769,
                            settings: {
                              arrows: false,
                              centerMode: false,
                              centerPadding: "40px",
                              slidesToShow: 2,
                            },
                          },
                          {
                            breakpoint: 480,
                            settings: {
                              arrows: false,
                              centerMode: false,
                              centerPadding: "40px",
                              slidesToShow: 1,
                            },
                          },
                        ],
                      });
                    } catch (e) {
                      console.error('Error al inicializar tes9-slider:', e);
                    }
                  }

                  // Inicializar slider de servicios 10 si existe
                  if ($(".service10-slider").length) {
                    try {
                      $(".service10-slider").slick({
                        margin: "30",
                        slidesToShow: 4,
                        arrows: true,
                        centerMode: true,
                        loop: true,
                        autoplay: true,
                        prevArrow: $(".service10-next-arrow"),
                        nextArrow: $(".service10-prev-arrow"),
                        draggable: true,
                        fade: false,
                        responsive: [
                          {
                            breakpoint: 992,
                            settings: {
                              slidesToShow: 3,
                            },
                          },
                          {
                            breakpoint: 768,
                            settings: {
                              slidesToShow: 2,
                            },
                          },
                          {
                            breakpoint: 480,
                            settings: {
                              slidesToShow: 1,
                            },
                          },
                        ],
                      });
                    } catch (e) {
                      console.error('Error al inicializar service10-slider:', e);
                    }
                  }

                  // Inicializar slider de servicios 10 si existe
                  if ($(".service10-slider").length) {
                    try {
                      $(".service10-slider").slick({
                        margin: "30",
                        slidesToShow: 4,
                        arrows: true,
                        centerMode: true,
                        loop: true,
                        autoplay: true,
                        prevArrow: $(".service10-next-arrow"),
                        nextArrow: $(".service10-prev-arrow"),
                        draggable: true,
                        fade: false,
                        responsive: [
                          {
                            breakpoint: 992,
                            settings: {
                              slidesToShow: 3,
                            },
                          },
                          {
                            breakpoint: 768,
                            settings: {
                              slidesToShow: 2,
                            },
                          },
                          {
                            breakpoint: 480,
                            settings: {
                              slidesToShow: 1,
                            },
                          },
                        ],
                      });
                    } catch (e) {
                      console.error('Error al inicializar service10-slider:', e);
                    }
                  }

                  // Inicializar slider de testimonios 10 si existe
                  if ($(".tes10-slider").length) {
                    try {
                      $(".tes10-slider").slick({
                        margin: "30",
                        slidesToShow: 1,
                        arrows: true,
                        centerMode: true,
                        loop: true,
                        autoplay: true,
                        prevArrow: $(".tes10-next-arrow"),
                        nextArrow: $(".tes10-prev-arrow"),
                        draggable: true,
                        fade: false,
                        responsive: [
                          {
                            breakpoint: 769,
                            settings: {
                              arrows: false,
                              centerMode: false,
                              centerPadding: "40px",
                              slidesToShow: 1,
                            },
                          },
                          {
                            breakpoint: 480,
                            settings: {
                              arrows: false,
                              centerMode: false,
                              centerPadding: "40px",
                              slidesToShow: 1,
                            },
                          },
                        ],
                      });
                    } catch (e) {
                      console.error('Error al inicializar tes10-slider:', e);
                    }
                  }

                  // Inicializar slider de proyectos 6 si existe
                  if ($(".project6-slider").length) {
                    try {
                      $(".project6-slider").slick({
                        margin: "30",
                        slidesToShow: 3,
                        arrows: false,
                        centerMode: true,
                        loop: true,
                        draggable: true,
                        fade: false,
                        dots: true,
                        responsive: [
                          {
                            breakpoint: 769,
                            settings: {
                              slidesToShow: 3,
                              arrows: false,
                              centerMode: false,
                              draggable: true,
                              fade: false,
                              dots: true
                            }
                          },
                          {
                            breakpoint: 480,
                            settings: {
                              slidesToShow: 1,
                              arrows: false,
                              centerMode: false,
                              centerPadding: "40px"
                            }
                          }
                        ]
                      });
                    } catch (e) {
                      console.error('Error al inicializar project6-slider:', e);
                    }
                  }
                });

                // Inicializar Owl Carousel para el slider de proyectos
                if ($(".project-slider").length && typeof $.fn.owlCarousel !== 'undefined') {
                  $(".project-slider").owlCarousel({
                    loop: true,
                    nav: true,
                    center: true,
                    dots: false,
                    items: 3,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 1000,
                    slideSpeed: 600,
                    navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
                    responsive: {
                      0: {
                        items: 1
                      },
                      900: {
                        items: 3
                      }
                    }
                  });
                }


                // Inicializar slider de testimonios 5 si existe
                if ($('.tes5-slider').length && typeof $.fn.owlCarousel !== 'undefined') {
                  $('.tes5-slider').owlCarousel({
                    loop: true,
                    margin: 10,
                    responsiveClass: true,
                    nav: false,
                    autoplay: 1000,
                    responsive: {
                      0: {
                        items: 1,
                        nav: false
                      },
                      600: {
                        items: 3,
                        nav: false
                      },
                      1000: {
                        items: 3,
                        nav: false,
                        loop: false
                      }
                    }
                  });
                }


                //=== logo slider ===

                $(".logo-slider").owlCarousel({
                  loop: true,
                  nav: false,
                  center: false,
                  dots: false,
                  // autoplay: true,
                  // autoplayTimeout: 3000,
                  items: 3,
                  autoplay: true,
                  autoplayTimeout: 5000,
                  smartSpeed: 1000,
                  slideSpeed: 600,
                  navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],

                  responsive: {
                    0: {
                      items: 2,
                    },
                    426: {
                      items: 4,
                    },
                    900: {
                      items: 4,
                    },
                  },
                });

                //==== home2 solider =====

                $(".tes2-slider").owlCarousel({
                  loop: true,
                  nav: false,
                  center: true,
                  dots: true,
                  autoplay: true,
                  autoplayTimeout: 3000,
                  items: 3,
                  autoplay: true,
                  autoplayTimeout: 5000,
                  smartSpeed: 1000,
                  slideSpeed: 600,

                  responsive: {
                    0: {
                      items: 1,
                    },
                    900: {
                      items: 3,
                    },
                  },

                });

                //-- brands6 slider --
                if ($(".brands6-slider").length) {
                $(".brands6-slider").owlCarousel({
                  loop: true,
                  nav: false,
                  center: true,
                  dots: true,
                  autoplay: true,
                  autoplayTimeout: 3000,
                  items: 3,
                  autoplay: true,
                  autoplayTimeout: 5000,
                  smartSpeed: 1000,
                  slideSpeed: 600,

                  responsive: {
                    0: {
                      items: 2,
                    },
                    500: {
                      items: 3,
                    },
                    900: {
                      items: 5,
                    },
                  },

                });


   //testimonial slider
    if ($(".testimonial-nav").length && $(".slider-testimonial").length) {
      $(".testimonial-nav").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: ".slider-testimonial",
        dots: false,
        loop: true,
        centerMode: true,
        focusOnSelect: true,
        arrows: false,
      });

      $(".slider-testimonial").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $(".testimonial-prev-arrow"),
        nextArrow: $(".testimonial-next-arrow"),
        fade: true,
        loop: true,
        asNavFor: ".testimonial-nav",
      });
    }



  // AOS animation active
  if (typeof AOS !== 'undefined') {
    AOS.init({
      offset: 100,
      duration: 400,
      easing: "ease-in-out",
      anchorPlacement: "top-bottom",
      disable: "mobile",
    });
  }

  // Video popup
  if ($(".play-btn").length > 0 && typeof $.fn.magnificPopup !== 'undefined') {
    $(".play-btn").magnificPopup({
      type: "iframe"
    });
  }
  
  // Page progress
  var progressPath = document.querySelector(".progress-wrap path");
  if (progressPath) {
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition = "none";
    progressPath.style.strokeDasharray = pathLength + " " + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = "stroke-dashoffset 10ms linear";
    
    var updateProgress = function () {
      var scroll = $(window).scrollTop();
      var height = $(document).height() - $(window).height();
      var progress = pathLength - (scroll * pathLength) / height;
      progressPath.style.strokeDashoffset = progress;
    };
    
    updateProgress();
    
    $(window).on("scroll", updateProgress);
    
    var offset = 50;
    var duration = 550;
    
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > offset) {
        $(".progress-wrap").addClass("active-progress");
      } else {
        $(".progress-wrap").removeClass("active-progress");
      }
    });
    
    $(".progress-wrap").on("click", function (event) {
      event.preventDefault();
      $("html, body").animate({ scrollTop: 0 }, duration);
      return false;
    });
  }
  
  // Hover action
  $('.cs_hover_active').on({
    mouseenter: function() {
      $(this).addClass('active').siblings().removeClass('active');
    },
    mouseleave: function() {
      $(this).removeClass('active');
    }
  });
  }); // Cierre del document.ready

  // Preloader
  $(window).on("load", function (event) {
    setTimeout(function() {
      $('#ctn-preloader').addClass('loaded');
      // Una vez haya terminado el preloader aparezca el scroll
      $('body').removeClass('no-scroll-y');
  
      if ($('#ctn-preloader').hasClass('loaded')) {
        // Es para que una vez que se haya ido el preloader se elimine toda la sección preloader
        $('#preloader').delay(1000).queue(function() {
          $(this).remove();
        });
      }
    }, 1000);
  });

  // Accordion1 active class
  const colors = $(".accordion1 .accordion-item");
  colors.on("click", function () {
    $(".accordion1 .accordion-item").removeClass("active");
    $(this).addClass("active");
  });

  // Accordion2 active class
  const colors2 = $(".accordion2 .accordion-item");
  colors2.on("click", function () {
    $(".accordion2 .accordion-item").removeClass("active");
    $(this).addClass("active");
  });

})(jQuery);

	////brand-slider-2
	if ($('.tp-slider-active').length) {
	var slider = new Swiper('.tp-slider-active', {
		speed: 500,
		slidesPerView: 1,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
		loop: true,
		effect:'fade',
		breakpoints: {
			'1400': {
				slidesPerView: 1,
			},
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		a11y: false,
		// Navigation arrows
		navigation: {
			prevEl: '.slider-prev',
			nextEl: '.slider-next'
		}
	});
}