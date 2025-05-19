<?php
// Incluir el header
$page_title = 'Blog';
$additional_css = 'assets/css/blog.css';

// Obtener la URL base del sitio
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

include_once 'header.php';
?>



<!-- Blog Section Start -->
<section class="blog-section blog-style-two pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span>Últimas Noticias</span>
            <h2>Nuestro Blog</h2>
            <p>Mantente actualizado con las últimas tendencias en IA, IoT y tecnología industrial</p>
        </div>

        <div class="row">
            <!-- Artículo 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="blog-ia-revolucion-industrial.php">
                            <img src="<?php echo $base_url; ?>/assets/img/blog/ia-revolucion-industrial.jpg" alt="Revolución Industrial 4.0" onerror="this.src='<?php echo $base_url; ?>/assets/img/blog/placeholder.jpg'">
                        </a>
                    </div>
                    <div class="blog-text">
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar"></i> 19 Mayo, 2025</li>
                            <li><i class="far fa-folder"></i> Inteligencia Artificial</li>
                        </ul>
                        <h3><a href="blog-ia-revolucion-industrial.php">Cómo la IA está Transformando la Industria 4.0</a></h3>
                        <p>Exploramos el impacto de la inteligencia artificial en la cuarta revolución industrial y cómo las empresas pueden aprovecharla.</p>
                        <a href="blog-ia-revolucion-industrial.php" class="blog-btn">Leer más <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Artículo 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="<?php echo $base_url; ?>/blog-iot-industria.php">
                            <img src="<?php echo $base_url; ?>/assets/img/blog/iot-industrial.jpg" alt="IoT Industrial" onerror="this.src='<?php echo $base_url; ?>/assets/img/blog/placeholder.jpg'">
                        </a>
                    </div>
                    <div class="blog-text">
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar"></i> 15 Mayo, 2025</li>
                            <li><i class="far fa-folder"></i> IoT Industrial</li>
                        </ul>
                        <h3><a href="<?php echo $base_url; ?>/blog-iot-industria.php">IoT Industrial: Conectando el Futuro de la Fabricación</a></h3>
                        <p>Descubre cómo el Internet de las Cosas está revolucionando los procesos industriales y mejorando la eficiencia operativa.</p>
                        <a href="<?php echo $base_url; ?>/blog-iot-industria.php" class="blog-btn">Leer más <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Artículo 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="<?php echo $base_url; ?>/blog-servidores-arm.php">
                            <img src="<?php echo $base_url; ?>/assets/img/blog/servidores-arm.jpg" alt="Servidores ARM" onerror="this.src='<?php echo $base_url; ?>/assets/img/blog/placeholder.jpg'">
                        </a>
                    </div>
                    <div class="blog-text">
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar"></i> 20 Mayo, 2025</li>
                            <li><i class="far fa-folder"></i> Tecnología</li>
                        </ul>
                        <h3><a href="<?php echo $base_url; ?>/blog-servidores-arm.php">Servidores ARM: El Futuro de los Centros de Datos</a></h3>
                        <p>Explora cómo la arquitectura ARM está transformando la infraestructura de centros de datos con su eficiencia energética y rendimiento.</p>
                        <a href="<?php echo $base_url; ?>/blog-servidores-arm.php" class="blog-btn">Leer más <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<?php
// Incluir el footer
include_once 'footer.php';
?>
