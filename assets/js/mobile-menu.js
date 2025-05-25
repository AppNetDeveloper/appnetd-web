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
        // Agregar clase has-dropdown a los elementos con submenú si no la tienen
        $mobileMenu.find('li:has(ul)').addClass('has-dropdown');
        
        // Asegurarse de que los submenús estén ocultos al inicio
        $mobileMenu.find('.has-dropdown > ul').hide();
        
        // Agregar clase active a los enlaces principales
        $mobileMenu.find('.has-dropdown > a').each(function() {
          var $link = $(this);
          // Si el enlace tiene un submenú, prevenir la navegación
          if ($link.siblings('ul').length) {
            $link.attr('href', 'javascript:void(0)');
          }
        });
        
        // Actualizar estado de los submenús
        updateSubmenus();
      }
      
      // Actualizar el estado de los submenús
      function updateSubmenus() {
        if (isMobile) {
          // En móvil, ocultar todos los submenús al inicio
          $mobileMenu.find('.has-dropdown > ul').hide();
          $mobileMenu.find('.has-dropdown > a i.fa-solid')
            .removeClass('fa-angle-up')
            .addClass('fa-angle-down');
        } else {
          // En escritorio, mostrar todos los submenús
          $mobileMenu.find('.has-dropdown > ul').show();
          $mobileMenu.find('.has-dropdown > a i.fa-solid')
            .removeClass('fa-angle-up')
            .addClass('fa-angle-down');
        }
      }
      
      // Cerrar todos los submenús excepto el actual
      function closeOtherSubmenus($submenuToKeepOpen) {
        $mobileMenu.find('.has-dropdown > ul').not($submenuToKeepOpen).each(function() {
          var $submenu = $(this);
          if ($submenu.is(':visible')) {
            $submenu.slideUp(200);
            $submenu.siblings('a').find('i.fa-solid')
              .removeClass('fa-angle-up')
              .addClass('fa-angle-down');
          }
        });
      }
      
      // Inicializar el menú
      initMenu();
      
      // Manejar clics en los enlaces principales con submenús
      $mobileMenu.off('click', '.has-dropdown > a').on('click', '.has-dropdown > a', function(e) {
        if (!isMobile) return; // Solo para móviles
        
        e.preventDefault();
        e.stopPropagation();
        
        var $link = $(this);
        var $submenu = $link.siblings('ul');
        var $icon = $link.find('i.fa-solid');
        if ($submenu.length === 0) return;
        var isOpening = !$submenu.is(':visible');
        if (isOpening) {
          closeOtherSubmenus($submenu);
          $submenu.slideDown(200);
          $icon.removeClass('fa-angle-down').addClass('fa-angle-up');
        } else {
          $submenu.slideUp(200);
          $icon.removeClass('fa-angle-up').addClass('fa-angle-down');
        }
      });
      
      // Manejar clics en los enlaces de submenú para evitar que se cierren los menús padres
      $mobileMenu.off('click', '.sub-menu a').on('click', '.sub-menu a', function(e) {
        e.stopPropagation(); // Evitar que el evento se propague al menú padre
        // Permitir la navegación normal
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

