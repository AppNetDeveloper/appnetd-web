(function($) {
  'use strict';

  $(document).ready(function() {
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
        try {
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
        } catch (e) {
          console.error('Error al inicializar Swiper .swiper-container:', e);
        }
      }
    }

    // Verificar Slick Carousel
    if (typeof $.fn.slick === 'undefined') {
      console.warn('Slick Carousel no está disponible');
    } else {
      // Inicializar Slick si está disponible
      if ($('.slick-slider').length) {
        try {
          $('.slick-slider').slick({
            // dots: true, // Temporalmente comentado para depurar
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            // adaptiveHeight: true, // Temporalmente comentado para depurar
            autoplay: true,
            autoplaySpeed: 5000
          });
        } catch (e) {
          console.error('Error al inicializar .slick-slider:', e);
        }
      }
    }

    // Inicialización de AOS (Animate On Scroll)
    if (typeof AOS === 'undefined') {
      console.warn('AOS no está disponible');
    } else {
      AOS.init({
        duration: 800, // Usando la primera configuración encontrada, más general
        easing: 'ease-in-out',
        once: true
      });
    }

    // Verificar GSAP
    if (typeof gsap === 'undefined') {
      console.warn('GSAP no está disponible');
    }

    // sticky header active
    if ($("#header").length > 0) {
      $(window).on("scroll", function(event) {
        var scroll = $(window).scrollTop();
        if (scroll < 1) {
          $("#header").removeClass("sticky");
        } else {
          $("#header").addClass("sticky");
        }
      });
    }

    // pricing-plan-tab
    if ($("#ce-toggle").length) {
      $("#ce-toggle").on('click', function(event) {
        $(".plan-toggle-wrap").toggleClass("active");
      });
      $("#ce-toggle").change(function() {
        if ($(this).is(":checked")) {
          $(".tab-content #yearly").hide();
          $(".tab-content #monthly").show();
        } else {
          $(".tab-content #yearly").show();
          $(".tab-content #monthly").hide();
        }
      });
    }

    // Header search
    if ($(".header-search-btn").length && $(".header-search-form-wrapper").length && $('.body-overlay').length) {
      $(".header-search-btn").on("click", function(e) {
        e.preventDefault();
        $(".header-search-form-wrapper").addClass("open");
        $('.header-search-form-wrapper input[type="search"]').focus();
        $('.body-overlay').addClass('active');
      });
      $(".tx-search-close").on("click", function(e) {
        e.preventDefault();
        $(".header-search-form-wrapper").removeClass("open");
        $("body").removeClass("active");
        $('.body-overlay').removeClass('active');
      });
    }

    // Inicialización segura de sliders de testimoniales
    function initTestimonialSliders() {
      // Testimonial 1
      if ($(".tes1-slider").length && typeof $.fn.slick !== 'undefined') {
        try {
          $(".tes1-slider").slick({
            // margin: "30", // Slick no usa 'margin', esto podría ser un resto de Owl. Se ignora o se usa padding en los items.
            slidesToShow: 1,
            arrows: true, // Dejar que Slick use flechas por defecto temporalmente
            // centerMode: true, // Temporalmente comentado
            infinite: true, // 'loop: true' es un alias de 'infinite: true' en Slick
            // prevArrow: $(".testimonial-next-arrow"), // Temporalmente comentado
            // nextArrow: $(".testimonial-prev-arrow"), // Temporalmente comentado
            draggable: true,
            fade: false,
            responsive: [{
              breakpoint: 769,
              settings: {
                arrows: false,
                // centerMode: false, // Si se comenta arriba, comentar aquí también o ajustar
                centerPadding: "40px",
                slidesToShow: 1,
              },
            }, {
              breakpoint: 480,
              settings: {
                arrows: false,
                // centerMode: false, // Si se comenta arriba, comentar aquí también o ajustar
                centerPadding: "40px",
                slidesToShow: 1,
              },
            }, ],
          });
        } catch (e) {
          console.error('Error al inicializar tes1-slider:', e);
        }
      }

      // Testimonial 6
      if ($(".tes6-slider").length && typeof $.fn.slick !== 'undefined') {
        try {
          $(".tes6-slider").slick({
            // margin: "30", // Slick no usa 'margin'
            slidesToShow: 3,
            arrows: true, // Dejar que Slick use flechas por defecto temporalmente
            // centerMode: true, // Temporalmente comentado
            infinite: true,
            // prevArrow: $(".tes6-next-arrow"), // Temporalmente comentado
            // nextArrow: $(".tes6-prev-arrow"), // Temporalmente comentado
            draggable: true,
            fade: false,
            responsive: [{
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                // centerMode: false,
              },
            }, {
              breakpoint: 769,
              settings: {
                arrows: false,
                // centerMode: false,
                centerPadding: "40px",
                slidesToShow: 1,
              },
            }, {
              breakpoint: 480,
              settings: {
                arrows: false,
                // centerMode: false,
                centerPadding: "20px",
                slidesToShow: 1,
              },
            }, ],
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
            slidesToShow: 1,
            arrows: true, // Usar flechas por defecto
            infinite: true,
            // centerMode: true, // Temporalmente comentado
            // prevArrow: $(".tes7-next-arrow"), // Temporalmente comentado
            // nextArrow: $(".tes7-prev-arrow"), // Temporalmente comentado
            draggable: true,
            fade: false,
            responsive: [{
              breakpoint: 769,
              settings: {
                arrows: false,
                centerPadding: "40px",
                slidesToShow: 1,
              },
            }, {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerPadding: "40px",
                slidesToShow: 1,
              },
            }, ],
          });
        } catch (e) {
          console.error('Error al inicializar tes7-slider:', e);
        }
      }

      // Inicializar slider de industrias 1 si existe
      if ($(".industris-slider1").length) {
        try {
          $(".industris-slider1").slick({
            slidesToShow: 4,
            arrows: true, // Usar flechas por defecto
            infinite: true,
            // centerMode: true, // Temporalmente comentado
            // prevArrow: $(".tes7-next-arrow"), // Temporalmente comentado
            // nextArrow: $(".tes7-prev-arrow"), // Temporalmente comentado
            draggable: true,
            fade: false,
            autoplay: true,
            responsive: [{
              breakpoint: 769,
              settings: {
                arrows: false,
                centerPadding: "40px",
                slidesToShow: 2,
              },
            }, {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerPadding: "40px",
                slidesToShow: 1,
              },
            }, ],
          });
        } catch (e) {
          console.error('Error al inicializar industrias-slider1:', e);
        }
      }

      // Inicializar slider de industrias 2 si existe
      if ($(".industris-slider2").length) {
        try {
          $(".industris-slider2").slick({
            slidesToShow: 4,
            arrows: true, // Usar flechas por defecto
            infinite: true,
            // centerMode: true, // Temporalmente comentado
            autoplay: true,
            // prevArrow: $(".tes7-next-arrow"), // Temporalmente comentado
            // nextArrow: $(".tes7-prev-arrow"), // Temporalmente comentado
            draggable: true,
            fade: false,
            responsive: [{
              breakpoint: 769,
              settings: {
                arrows: false,
                centerPadding: "40px",
                slidesToShow: 2,
              },
            }, {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerPadding: "40px",
                slidesToShow: 1,
              },
            }, ],
          });
        } catch (e) {
          console.error('Error al inicializar industrias-slider2:', e);
        }
      }

      // Inicializar slider de case study si existe
      if ($(".case9-slider").length) {
        try {
          $(".case9-slider").slick({
            slidesToShow: 3,
            arrows: true, // Usar flechas por defecto
            infinite: true,
            // centerMode: true, // Temporalmente comentado
            // prevArrow: $(".case9-next-arrow"), // Temporalmente comentado
            // nextArrow: $(".case9-prev-arrow"), // Temporalmente comentado
            draggable: true,
            fade: false,
            responsive: [{
              breakpoint: 769,
              settings: {
                arrows: false,
                centerPadding: "40px",
                slidesToShow: 2,
              },
            }, {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerPadding: "40px",
                slidesToShow: 1,
              },
            }, ],
          });
        } catch (e) {
          console.error('Error al inicializar case9-slider:', e);
        }
      }

      // Inicializar slider de testimoniales 9 si existe
      if ($(".tes9-slider").length) {
        try {
          $(".tes9-slider").slick({
            slidesToShow: 3,
            arrows: true, // Usar flechas por defecto
            infinite: true,
            // centerMode: true, // Temporalmente comentado
            // prevArrow: $(".tes9-next-arrow"), // Temporalmente comentado
            // nextArrow: $(".tes9-prev-arrow"), // Temporalmente comentado
            draggable: true,
            fade: false,
            responsive: [{
              breakpoint: 769,
              settings: {
                arrows: false,
                centerPadding: "40px",
                slidesToShow: 2,
              },
            }, {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerPadding: "40px",
                slidesToShow: 1,
              },
            }, ],
          });
        } catch (e) {
          console.error('Error al inicializar tes9-slider:', e);
        }
      }

      // Inicializar slider de servicios 10 si existe (una sola vez)
      if ($(".service10-slider").length) {
        try {
          $(".service10-slider").slick({
            slidesToShow: 4,
            arrows: true, // Usar flechas por defecto
            infinite: true,
            // centerMode: true, // Temporalmente comentado
            autoplay: true,
            // prevArrow: $(".service10-next-arrow"), // Temporalmente comentado
            // nextArrow: $(".service10-prev-arrow"), // Temporalmente comentado
            draggable: true,
            fade: false,
            responsive: [{
              breakpoint: 992,
              settings: {
                slidesToShow: 3,
              },
            }, {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
              },
            }, {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
              },
            }, ],
          });
        } catch (e) {
          console.error('Error al inicializar service10-slider:', e);
        }
      }

      // Inicializar slider de testimonios 10 si existe
      if ($(".tes10-slider").length) {
        try {
          $(".tes10-slider").slick({
            slidesToShow: 1,
            arrows: true, // Usar flechas por defecto
            infinite: true,
            // centerMode: true, // Temporalmente comentado
            autoplay: true,
            // prevArrow: $(".tes10-next-arrow"), // Temporalmente comentado
            // nextArrow: $(".tes10-prev-arrow"), // Temporalmente comentado
            draggable: true,
            fade: false,
            responsive: [{
              breakpoint: 769,
              settings: {
                arrows: false,
                centerPadding: "40px",
                slidesToShow: 1,
              },
            }, {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerPadding: "40px",
                slidesToShow: 1,
              },
            }, ],
          });
        } catch (e) {
          console.error('Error al inicializar tes10-slider:', e);
        }
      }

      // Inicializar slider de proyectos 6 si existe
      if ($(".project6-slider").length) {
        try {
          $(".project6-slider").slick({
            slidesToShow: 3,
            arrows: false, // Este tenía arrows: false originalmente, lo mantenemos
            infinite: true,
            // centerMode: true, // Temporalmente comentado
            draggable: true,
            fade: false,
            dots: true, // Este tenía dots: true
            responsive: [{
              breakpoint: 769,
              settings: {
                slidesToShow: 3,
                arrows: false,
                draggable: true,
                fade: false,
                dots: true
              }
            }, {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                arrows: false,
                centerPadding: "40px"
              }
            }]
          });
        } catch (e) {
          console.error('Error al inicializar project6-slider:', e);
        }
      }

      //testimonial slider sincronizado
      if ($(".testimonial-nav").length && $(".slider-testimonial").length) {
        try {
          $(".testimonial-nav").slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: ".slider-testimonial",
            dots: false,
            infinite: true,
            centerMode: true, // CenterMode es importante para asNavFor
            focusOnSelect: true,
            arrows: false
          });

          $(".slider-testimonial").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true, // Usar flechas por defecto temporalmente
            // prevArrow: $(".testimonial-prev-arrow"), // Temporalmente comentado
            // nextArrow: $(".testimonial-next-arrow"), // Temporalmente comentado
            fade: true,
            infinite: true,
            asNavFor: ".testimonial-nav"
          });
        } catch (e) {
          console.error('Error al inicializar el slider de testimonios sincronizado:', e);
        }
      }
    } // Fin de if (typeof $.fn.slick !== 'undefined')

    // Inicializar tes5-slider con Owl Carousel
    if ($('.tes5-slider').length && typeof $.fn.owlCarousel !== 'undefined') {
      try {
        $('.tes5-slider').owlCarousel({
          loop: true,
          margin: 10,
          responsiveClass: true,
          nav: false,
          autoplay: true,
          autoplayTimeout: 1000,
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
      } catch (e) {
        console.error('Error al inicializar tes5-slider con Owl Carousel:', e);
      }
    }

    //=== logo slider === (Owl Carousel)
    if ($(".logo-slider").length && typeof $.fn.owlCarousel !== 'undefined') {
      try {
        $(".logo-slider").owlCarousel({
          loop: true,
          nav: false,
          center: false,
          dots: false,
          items: 3,
          autoplay: true,
          autoplayTimeout: 5000,
          smartSpeed: 1000,
          navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
          responsive: {
            0: {
              items: 2
            },
            426: {
              items: 4
            },
            900: {
              items: 4
            }
          }
        });
      } catch (e) {
        console.error('Error al inicializar logo-slider con Owl Carousel:', e);
      }
    }

    //==== home2 solider ===== (Owl Carousel)
    if ($(".tes2-slider").length && typeof $.fn.owlCarousel !== 'undefined') {
      try {
        $(".tes2-slider").owlCarousel({
          loop: true,
          nav: false,
          center: true,
          dots: true,
          autoplay: true,
          autoplayTimeout: 5000,
          items: 3,
          smartSpeed: 1000,
          responsive: {
            0: {
              items: 1
            },
            900: {
              items: 3
            }
          }
        });
      } catch (e) {
        console.error('Error al inicializar tes2-slider con Owl Carousel:', e);
      }
    }

    //-- brands6 slider -- (Owl Carousel)
    if ($(".brands6-slider").length && typeof $.fn.owlCarousel !== 'undefined') {
      try {
        $(".brands6-slider").owlCarousel({
          loop: true,
          nav: false,
          center: true,
          dots: true,
          autoplay: true,
          autoplayTimeout: 5000,
          items: 3,
          smartSpeed: 1000,
          responsive: {
            0: {
              items: 2
            },
            500: {
              items: 3
            },
            900: {
              items: 5
            }
          }
        });
      } catch (e)
      {
        console.error('Error al inicializar brands6-slider con Owl Carousel:', e);
      }
    }

    // Video popup
    if ($(".play-btn").length > 0 && typeof $.fn.magnificPopup !== 'undefined') {
      try {
        $(".play-btn").magnificPopup({
          type: "iframe"
        });
      } catch (e) {
        console.error('Error al inicializar Magnific Popup en .play-btn:', e);
      }
    }

    // Page progress
    var progressPath = document.querySelector(".progress-wrap path");
    if (progressPath) {
      var pathLength = progressPath.getTotalLength();
      progressPath.style.transition = progressPath.style.WebkitTransition = "none";
      progressPath.style.strokeDasharray = pathLength + " " + pathLength;
      progressPath.style.strokeDashoffset = pathLength;
      progressPath.getBoundingClientRect(); // Forzar reflujo
      progressPath.style.transition = progressPath.style.WebkitTransition = "stroke-dashoffset 10ms linear";

      var updateProgress = function() {
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        if (height > 0) { // Evitar división por cero
            var progress = pathLength - (scroll * pathLength) / height;
            progressPath.style.strokeDashoffset = progress;
        } else {
            progressPath.style.strokeDashoffset = pathLength; // Si no hay scroll, resetear
        }
      };

      updateProgress();
      $(window).on("scroll", updateProgress);

      var offset = 50;
      var duration = 550;

      $(window).on("scroll", function() {
        if ($(this).scrollTop() > offset) {
          $(".progress-wrap").addClass("active-progress");
        } else {
          $(".progress-wrap").removeClass("active-progress");
        }
      });

      $(".progress-wrap").on("click", function(event) {
        event.preventDefault();
        $("html, body").animate({
          scrollTop: 0
        }, duration);
        return false;
      });
    }

    // Hover action
    if ($('.cs_hover_active').length) {
      $('.cs_hover_active').on({
        mouseenter: function() {
          $(this).addClass('active').siblings().removeClass('active');
        },
        mouseleave: function() {
          $(this).removeClass('active');
        }
      });
    }
    
    // Accordion1 active class
    if ($(".accordion1 .accordion-item").length) {
      const colors = $(".accordion1 .accordion-item");
      colors.on("click", function() {
        $(".accordion1 .accordion-item").removeClass("active");
        $(this).addClass("active");
      });
    }

    // Accordion2 active class
    if ($(".accordion2 .accordion-item").length) {
      const colors2 = $(".accordion2 .accordion-item");
      colors2.on("click", function() {
        $(".accordion2 .accordion-item").removeClass("active");
        $(this).addClass("active");
      });
    }

    ////brand-slider-2 (Swiper)
    if ($('.tp-slider-active').length && typeof Swiper !== 'undefined') {
      try {
        var slider = new Swiper('.tp-slider-active', {
          speed: 500,
          slidesPerView: 1,
          autoplay: {
            delay: 5000,
            disableOnInteraction: false,
          },
          loop: true,
          effect: 'fade',
          breakpoints: {
            '1400': { slidesPerView: 1 },
            '1200': { slidesPerView: 1 },
            '992': { slidesPerView: 1 },
            '768': { slidesPerView: 1 },
            '576': { slidesPerView: 1 },
            '0': { slidesPerView: 1 }
          },
          a11y: false,
          navigation: {
            prevEl: '.slider-prev',
            nextEl: '.slider-next'
          }
        });
      } catch (e) {
        console.error('Error al inicializar el slider principal .tp-slider-active con Swiper:', e);
      }
    }

    // Preloader
    $(window).on("load", function(event) {
      if ($('#ctn-preloader').length) {
        setTimeout(function() {
          $('#ctn-preloader').addClass('loaded');
          $('body').removeClass('no-scroll-y');

          if ($('#ctn-preloader').hasClass('loaded')) {
            $('#preloader').delay(1000).queue(function() {
              $(this).remove();
            });
          }
        }, 1000);
      }
    });

  }); // Cierre de $(document).ready

})(jQuery);
