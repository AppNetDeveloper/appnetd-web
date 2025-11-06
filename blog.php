<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Obtener la URL base del sitio
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

// Configuración de la página
$page_title = __('blog_page_title');
$meta_description = __('blog_meta_description');

include "includes/header.php";
?>

<!-- Page Title Start -->
<section class="page-title title-bg10">
    <div class="d-table">
        <div class="d-table-cell">
            <h2><?php echo __('blog_page_title'); ?></h2>
            <ul>
                <li><a href="index.php"><?php echo __('home'); ?></a></li>
                <li><?php echo __('blog'); ?></li>
            </ul>
        </div>
    </div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</section>
<!-- Page Title End -->

<!-- Blog Section Start -->
<section class="blog-section blog-style-two pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span><?php echo __('blog_latest_news'); ?></span>
            <h2><?php echo __('blog_our_blog'); ?></h2>
            <p><?php echo __('blog_subtitle'); ?></p>
        </div>

        <div class="row">
            <!-- Article 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="blog-ia-revolucion-industrial.php">
                            <img src="<?php echo $base_url; ?>/assets/img/blog/ia-revolucion-industrial.jpg" alt="<?php echo __('blog_ia_revolution_alt'); ?>" onerror="this.src='<?php echo $base_url; ?>/assets/img/blog/placeholder.jpg'">
                        </a>
                    </div>
                    <div class="blog-text">
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar"></i> <?php echo __('blog_ia_revolution_date'); ?></li>
                            <li><i class="far fa-folder"></i> <?php echo __('blog_category_ai'); ?></li>
                        </ul>
                        <h3><a href="blog-ia-revolucion-industrial.php"><?php echo __('blog_ia_revolution_title'); ?></a></h3>
                        <p><?php echo __('blog_ia_revolution_excerpt'); ?></p>
                        <a href="blog-ia-revolucion-industrial.php" class="blog-btn"><?php echo __('read_more'); ?> <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="<?php echo $base_url; ?>/blog-iot-industria.php">
                            <img src="<?php echo $base_url; ?>/assets/img/blog/iot-industrial.jpg" alt="<?php echo __('blog_iot_industrial_alt'); ?>" onerror="this.src='<?php echo $base_url; ?>/assets/img/blog/placeholder.jpg'">
                        </a>
                    </div>
                    <div class="blog-text">
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar"></i> <?php echo __('blog_iot_industrial_date'); ?></li>
                            <li><i class="far fa-folder"></i> <?php echo __('blog_category_iot'); ?></li>
                        </ul>
                        <h3><a href="<?php echo $base_url; ?>/blog-iot-industria.php"><?php echo __('blog_iot_industrial_title'); ?></a></h3>
                        <p><?php echo __('blog_iot_industrial_excerpt'); ?></p>
                        <a href="<?php echo $base_url; ?>/blog-iot-industria.php" class="blog-btn"><?php echo __('read_more'); ?> <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="<?php echo $base_url; ?>/blog-servidores-arm.php">
                            <img src="<?php echo $base_url; ?>/assets/img/blog/servidores-arm.jpg" alt="<?php echo __('blog_arm_servers_alt'); ?>" onerror="this.src='<?php echo $base_url; ?>/assets/img/blog/placeholder.jpg'">
                        </a>
                    </div>
                    <div class="blog-text">
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar"></i> <?php echo __('blog_arm_servers_date'); ?></li>
                            <li><i class="far fa-folder"></i> <?php echo __('blog_category_tech'); ?></li>
                        </ul>
                        <h3><a href="<?php echo $base_url; ?>/blog-servidores-arm.php"><?php echo __('blog_arm_servers_title'); ?></a></h3>
                        <p><?php echo __('blog_arm_servers_excerpt'); ?></p>
                        <a href="<?php echo $base_url; ?>/blog-servidores-arm.php" class="blog-btn"><?php echo __('read_more'); ?> <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<?php
include "includes/footer.php";
?>
