;(function($) {

  $(document).ready(function() {

   //mobile-wrap
    const mobile_nav_open = $('.mobile-nav-icon');
    const mobile_sidebar = $('.mobile-sidebar');
    const mobile_nav_close = $('.menu-close');

    mobile_nav_open.on('click', function(){
      mobile_sidebar.addClass('mobile-menu-active');
    });

    mobile_nav_close.on('click', function(){
      mobile_sidebar.removeClass('mobile-menu-active');
    });



  //mobile-menus
  $('.mobile-nav a').each(function(){
    var href = $(this).attr('href');
    if(href === '#'){
      $(this).addClass('hash-nav');
    } else {
      $(this).removeClass('hash-nav');
    }
  });


  //mobile-menus-markup
  $.fn.menumarker = function(options) {
    var settings = $.extend({
      format: "dropdown",
      sticky: false
    }, options);

    return this.each(function() {
      var $mobileMenu = $(this);
      var isMobile = $(window).width() < 992;
      
      // Inicializar el menú
      function initMenu() {
        // Agregar clase has-sub a los elementos con submenú
        $mobileMenu.find('li:has(ul)').addClass('has-sub');
        
        // Remover cualquier botón de submenú existente para evitar duplicados
        $mobileMenu.find('.submenu-button').remove();
        
        // Agregar botones de submenú
        $mobileMenu.find('.has-sub > a').each(function() {
          if (!$(this).siblings('.submenu-button').length) {
            $('<span class="submenu-button"><i class="fas fa-plus"></i></span>').insertAfter($(this));
          }
        });
        
        // Actualizar estado de los submenús
        updateSubmenus();
      }
      
      // Actualizar el estado de los submenús
      function updateSubmenus() {
        if (isMobile) {
          // En móvil, ocultar todos los submenús al inicio
          $mobileMenu.find('.has-sub > ul').hide();
          $mobileMenu.find('.submenu-button i')
            .removeClass('fa-minus')
            .addClass('fa-plus');
        } else {
          // En escritorio, mostrar todos los submenús
          $mobileMenu.find('.has-sub > ul').show();
        }
      }
      
      // Función para cerrar todos los submenús excepto uno
      function closeOtherSubmenus($except) {
        // Solo cerrar otros si no se está haciendo clic en un submenú existente
        if (!$except || !$except.hasClass('submenu-opened')) {
          $('.submenu-button').not($except || '')
            .removeClass('submenu-opened')
            .siblings('ul')
            .slideUp(200, function() {
              $(this).find('.submenu-button')
                .removeClass('submenu-opened')
                .find('i')
                .removeClass('fa-minus')
                .addClass('fa-plus');
            });
        }
      }
      
      // Inicializar el menú
      initMenu();
      
      // Manejar clics en los botones de submenú
      $mobileMenu.off('click', '.submenu-button').on('click', '.submenu-button', function(e) {
        if (!isMobile) return; // Solo para móviles
        
        e.preventDefault();
        e.stopPropagation();
        
        var $this = $(this);
        var $submenu = $this.siblings('ul');
        var isOpening = !$this.hasClass('submenu-opened');
        
        // Cerrar otros submenús solo si estamos abriendo uno nuevo
        if (isOpening) {
          closeOtherSubmenus($this);
        }
        
        // Alternar el submenú actual
        $this.toggleClass('submenu-opened');
        
        // Cambiar el ícono
        $this.find('i')
          .toggleClass('fa-plus', !isOpening)
          .toggleClass('fa-minus', isOpening);
          
        // Mostrar/ocultar el submenú con animación
        if (isOpening) {
          $submenu.slideDown(200);
        } else {
          $submenu.slideUp(200);
        }
      });
      
      // Manejar clics en los enlaces principales
      $mobileMenu.off('click', '.has-sub > a').on('click', '.has-sub > a', function(e) {
        if (!isMobile) return; // Solo para móviles
        
        e.preventDefault();
        var $button = $(this).siblings('.submenu-button');
        if ($button.length) {
          $button.trigger('click');
        } else {
          // Si no hay botón, navegar al enlace
          window.location.href = $(this).attr('href');
        }
      });
      
      // Cerrar menús al hacer clic fuera
      $(document).off('click touchstart.menu').on('click touchstart.menu', function(e) {
        if (!$(e.target).closest('.mobile-sidebar').length) {
          closeOtherSubmenus();
        }
      });
      
      // Manejar redimensionamiento de la ventana
      function handleResize() {
        var newIsMobile = $(window).width() < 992;
        
        if (isMobile !== newIsMobile) {
          isMobile = newIsMobile;
          updateSubmenus();
        }
      }
      
      // Aplicar estilos iniciales
      if (settings.sticky === true) {
        $mobileMenu.css('position', 'fixed');
      }
      
      // Inicializar el menú
      updateSubmenus();
      
      // Manejar redimensionamiento con debounce
      var resizeTimer;
      $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
          handleResize();
        }, 250);
      });
      
      return $mobileMenu;
    });
  };


    $('.mobile-nav').menumarker({
      format: "multitoggle"
    });
   

  });





})(jQuery);

