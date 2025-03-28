            <!--===== FOOTER AREA START =======-->

                <div class="footer1 _relative">
                  <div class="container">
                       <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                 <div class="single-footer-items footer-logo-area">
                                      <div class="footer-logo">
                                        <a href=""><img src="assets/img/logo/footer-logo1.png" alt=""></a>
                                      </div>
                                      <div class="space20"></div>
                                      <div class="heading1">
                                        <p>En AppNet Developer, nos dedicamos a ofrecer soluciones tecnológicas avanzadas en IoT, IA y desarrollo de software personalizado. Utilizamos tecnología ARM y cloud computing para crear soluciones eficientes y respetuosas con el medio ambiente, diseñadas para satisfacer las necesidades únicas de empresas como la suya.</p>
                                      </div>
                                      <ul class="social-icon">
                                           <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                           <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                           <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                           <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                      </ul>
                                 </div>
                            </div>
        
                            <div class="col-lg col-md-6 col-12">
                                 <div class="single-footer-items">
                                      <h3>Servicio Que Ofrecemos</h3>
        
                                      <ul class="menu-list">
                                           <li><a href="#">Soluciones IoT Industrial</a></li>
                                           <li><a href="#">Inteligencia Artificial y Machine Learning</a></li>
                                           <li><a href="#">Desarrollo de Software Personalizado</a></li>
                                           <li><a href="#">Aplicaciones de Control y Geolocalización</a></li>
                                      </ul>
                                 </div>
                            </div>
        
                            <div class="col-lg col-md-6 col-12">
                                 <div class="single-footer-items">
                                      <h3>Enlaces Útiles</h3>
        
                                      <ul class="menu-list">
                                           <li><a href="#">Sobre Nosotros </a></li>
                                           <li><a href="#">Nuestros Servicios</a></li>
                                           <li><a href="#">Blog & Noticias</a></li>
                                           <li><a href="#">Activos de la Marca</a></li>
                                           <li><a href="#">Contáctenos</a></li>
                                      </ul>
                                 </div>
                            </div>
        
        
                            <div class="col-lg-3 col-md-6 col-12">
                                 <div class="single-footer-items">
                                      <h3>Contáctenos</h3>
        
                                      <div class="contact-box">
                                        <div class="icon">
                                          <img src="assets/img/icons/footer1-icon1.png" alt="">
                                        </div>
                                        <div class="pera">
                                          <a href="tel:+34619929305">+34 619 929 305</a>
                                        </div>
                                      </div>

                                      <div class="contact-box">
                                        <div class="icon">
                                          <img src="assets/img/icons/footer1-icon3.png" alt="">
                                        </div>
                                        <div class="pera">
                                          <a href="mailto:info@appnet.dev">info@appnet.dev</a>
                                        </div>
                                      </div>

                                      <div class="contact-box">
                                        <div class="icon">
                                          <img src="assets/img/icons/footer1-icon4.png" alt="">
                                        </div>
                                        <div class="pera">
                                          <a href="https://appnet.dev">www.appnet.dev</a>
                                        </div>
                                      </div>
        
                                 </div>
                            </div>
        
                       </div>
        
                       <div class="space40"></div>
                  </div>

                  <div class="copyright-area">
                    <div class="container">
                      <div class="row align-items-center">
                        <div class="col-md-5">
                             <div class="coppyright">
                               <p>Copyright @<?php echo date('Y'); ?> AppNet Developer. Todos los derechos reservados</p>
                             </div>
                        </div>
                        <div class="col-md-7">
                              <div class="coppyright right-area">
                                   <a href="#" id="terms-link">Términos y Condiciones</a>
                                   <a href="#" id="privacy-link">Política de Privacidad</a>
                              </div>

                        </div>
                   </div>
                    </div>
               </div>
      
                </div>
        
                <!--===== FOOTER AREA END =======-->


     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/aos.js"></script>
     <script src="assets/js/fontawesome.js"></script>
     <script src="assets/js/jquery.countup.js"></script>
     <script src="assets/js/mobile-menu.js"></script>
     <script src="assets/js/jquery.magnific-popup.js"></script>
     <script src="assets/js/owl.carousel.min.js"></script>
     <script src="assets/js/slick-slider.js"></script>
     <script src="assets/js/gsap.min.js"></script>
     <script src="assets/js/ScrollTrigger.min.js"></script>
     <script src="assets/js/Splitetext.js"></script>
     <script src="assets/js/text-animation.js"></script>
     <script src="assets/js/SmoothScroll.js"></script>
     <script src="assets/js/jquery.lineProgressbar.js"></script>
     <script src="assets/js/ripple-btn.js"></script>
     <script src="assets/js/main.js"></script>

     <div id="cookie-consent" style="display: none; position: fixed; bottom: 0; left: 0; right: 0; background: #333; color: #fff; padding: 10px; text-align: center;">
        Este sitio web utiliza cookies para mejorar su experiencia. <button id="accept-cookies">Aceptar</button>
     </div>

     <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (!localStorage.getItem("cookiesAccepted")) {
                document.getElementById("cookie-consent").style.display = "block";
            }

            document.getElementById("accept-cookies").onclick = function() {
                localStorage.setItem("cookiesAccepted", "true");
                document.getElementById("cookie-consent").style.display = "none";
            };
        });
     </script>

<!-- Modal para Términos y Condiciones -->
<div id="terms-modal" style="display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7); z-index: 1000; padding: 20px; overflow-y: auto;">
    <div style="background: #fff; padding: 20px; border-radius: 5px; max-width: 600px; margin: auto; position: relative;">
        <button id="close-terms-modal" style="position: absolute; top: 10px; right: 10px; background: none; border: none; font-size: 20px; cursor: pointer;">&times;</button>
        <h2>Términos y Condiciones</h2>
        <p>Última actualización: <?php echo date('d/m/Y'); ?></p>
        <p>Bienvenido a AppNet Developer. Estos términos y condiciones describen las reglas y regulaciones para el uso del sitio web de AppNet Developer, ubicado en www.appnet.dev.</p>
        <p>Al acceder a este sitio web, asumimos que aceptas estos términos y condiciones. No continúes usando AppNet Developer si no aceptas todos los términos y condiciones establecidos en esta página.</p>
        <h3>Licencia de Uso</h3>
        <p>A menos que se indique lo contrario, AppNet Developer y/o sus licenciantes poseen los derechos de propiedad intelectual de todo el material en este sitio web. Todos los derechos de propiedad intelectual están reservados. Puedes acceder desde AppNet Developer para tu uso personal sujeto a las restricciones establecidas en estos términos y condiciones.</p>
        <p>No debes:</p>
        <ul>
            <li>Reproducir, duplicar o copiar material de AppNet Developer.</li>
            <li>Vender, alquilar o sublicenciar material del sitio web.</li>
            <li>Redistribuir contenido de AppNet Developer.</li>
        </ul>
        <h3>Comentarios y Contenido de Usuarios</h3>
        <p>Este sitio web permite a los usuarios publicar y compartir contenido, incluidos comentarios y reseñas. AppNet Developer se reserva el derecho de revisar todo contenido antes de su publicación y eliminar cualquier contenido considerado inapropiado, ofensivo o en violación de estos términos.</p>
        <p>Al enviar contenido a este sitio web, otorgas a AppNet Developer una licencia no exclusiva para usar, reproducir, y modificar tu contenido en todas sus formas.</p>
        <h3>Limitación de Responsabilidad</h3>
        <p>AppNet Developer no será responsable de ningún daño que surja o esté relacionado con el uso de nuestro sitio web, incluido, sin limitación, cualquier pérdida directa, indirecta o consecuente.</p>
        <h3>Modificaciones de los Términos</h3>
        <p>Nos reservamos el derecho de modificar estos términos en cualquier momento. Es tu responsabilidad revisar estos términos periódicamente. El uso continuado del sitio después de cualquier cambio constituye la aceptación de los nuevos términos.</p>
        <h3>Ley Aplicable</h3>
        <p>Estos términos se regirán e interpretarán de acuerdo con las leyes de [País], y te sometes irrevocablemente a la jurisdicción exclusiva de los tribunales en esa localidad.</p>
    </div>
</div>

<!-- Modal para Política de Privacidad -->
<div id="privacy-modal" style="display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7); z-index: 1000; padding: 20px; overflow-y: auto;">
    <div style="background: #fff; padding: 20px; border-radius: 5px; max-width: 600px; margin: auto; position: relative;">
        <button id="close-privacy-modal" style="position: absolute; top: 10px; right: 10px; background: none; border: none; font-size: 20px; cursor: pointer;">&times;</button>
        <h2>Política de Privacidad</h2>
        <p>Última actualización: <?php echo date('d/m/Y'); ?></p>
        <p>En AppNet Developer, accesible desde www.appnet.dev, uno de nuestros principales objetivos es la privacidad de nuestros visitantes. Esta Política de Privacidad detalla los tipos de información que recopilamos y cómo la utilizamos.</p>
        <h3>Información que Recopilamos</h3>
        <p>Al utilizar nuestro sitio web, podemos recopilar la siguiente información:</p>
        <ul>
            <li><strong>Datos Personales:</strong> nombre, correo electrónico, dirección, número de teléfono u otra información similar que proporcionas voluntariamente al utilizar nuestros servicios o al ponerte en contacto con nosotros.</li>
            <li><strong>Datos de Navegación:</strong> cuando visitas nuestro sitio web, podemos recopilar información automáticamente como la dirección IP, tipo de navegador, tiempo de permanencia en el sitio y las páginas visitadas.</li>
        </ul>
        <h3>Uso de la Información</h3>
        <p>Usamos la información recopilada para varios fines, incluidos:</p>
        <ul>
            <li>Mejorar nuestro sitio web y la experiencia del usuario.</li>
            <li>Procesar transacciones y proporcionar los servicios solicitados.</li>
            <li>Comunicarnos contigo para responder a tus consultas.</li>
            <li>Cumplir con requisitos legales y proteger nuestros derechos.</li>
        </ul>
        <h3>Cookies</h3>
        <p>Utilizamos cookies para almacenar información sobre las preferencias de los visitantes y para optimizar la experiencia del usuario basándonos en el historial de navegación. Puedes deshabilitar las cookies ajustando la configuración de tu navegador, aunque algunas funciones del sitio pueden verse afectadas.</p>
        <h3>Compartición de Información</h3>
        <p>AppNet Developer no venderá ni compartirá tu información personal con terceros, excepto cuando sea necesario para:</p>
        <ul>
            <li>Cumplir con la ley.</li>
            <li>Proteger los derechos y la seguridad de AppNet Developer y sus usuarios.</li>
        </ul>
        <h3>Seguridad de los Datos</h3>
        <p>Implementamos medidas de seguridad para proteger tu información personal, pero no podemos garantizar la seguridad absoluta debido a la naturaleza de las comunicaciones por internet.</p>
        <h3>Tus Derechos</h3>
        <p>Como usuario, tienes derecho a:</p>
        <ul>
            <li>Acceder, rectificar o eliminar tus datos personales.</li>
            <li>Limitar o oponerte al procesamiento de tus datos.</li>
            <li>Retirar el consentimiento en cualquier momento.</li>
        </ul>
        <p>Si deseas ejercer alguno de estos derechos, por favor contáctanos a través del correo <a href="mailto:info@appnet.dev">info@appnet.dev</a>.</p>
        <h3>Cambios en la Política de Privacidad</h3>
        <p>Nos reservamos el derecho de actualizar esta Política de Privacidad en cualquier momento. Te recomendamos que revises esta página periódicamente para estar al tanto de cualquier cambio.</p>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Mostrar el modal de Términos y Condiciones
        document.getElementById("terms-link").addEventListener('click', function(event) {
            event.preventDefault(); // Evitar el comportamiento por defecto del enlace
            document.getElementById("terms-modal").style.display = "block"; // Mostrar el modal
        });

        // Mostrar el modal de Política de Privacidad
        document.getElementById("privacy-link").addEventListener('click', function(event) {
            event.preventDefault(); // Evitar el comportamiento por defecto del enlace
            document.getElementById("privacy-modal").style.display = "block"; // Mostrar el modal
        });

        // Cerrar el modal de Términos y Condiciones
        document.getElementById("close-terms-modal").onclick = function() {
            document.getElementById("terms-modal").style.display = "none"; // Ocultar el modal
        };

        // Cerrar el modal de Política de Privacidad
        document.getElementById("close-privacy-modal").onclick = function() {
            document.getElementById("privacy-modal").style.display = "none"; // Ocultar el modal
        };
    });
</script>

</body>
</html>
