<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Obtener la URL base del sitio
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

// Configuración de la página
$page_title = __('legal_notice_title');
$meta_description = __('legal_notice_description');

include "includes/header.php";
?>

<!-- Page Title Start -->
<section class="page-title title-bg10">
    <div class="d-table">
        <div class="d-table-cell">
            <h2><?php echo __('legal_notice_title'); ?></h2>
            <ul>
                <li><a href="index.php"><?php echo __('home'); ?></a></li>
                <li><?php echo __('legal_notice_title'); ?></li>
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

<!-- Legal Notice Section Start -->
<section class="legal-notice-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="legal-notice-content">
                    <div class="section-title">
                        <h2><?php echo __('legal_notice_title'); ?></h2>
                        <p><strong><?php echo __('legal_last_updated'); ?>:</strong> <?php echo date('d/m/Y'); ?></p>
                    </div>

                    <div class="legal-section">
                        <h3>1. <?php echo __('legal_company_info_title'); ?></h3>
                        <p><?php echo __('legal_company_info_text'); ?></p>
                        <ul class="legal-list">
                            <li><strong><?php echo __('legal_company_name'); ?>:</strong> AppNet Developer</li>
                            <li><strong><?php echo __('legal_address'); ?>:</strong> Murcia, España</li>
                            <li><strong><?php echo __('legal_email'); ?>:</strong> info@appnet.dev</li>
                            <li><strong><?php echo __('legal_phone'); ?>:</strong> +34 619 929 305</li>
                        </ul>
                    </div>

                    <div class="legal-section">
                        <h3>2. <?php echo __('legal_object_title'); ?></h3>
                        <p><?php echo __('legal_object_text'); ?></p>
                    </div>

                    <div class="legal-section">
                        <h3>3. <?php echo __('legal_conditions_title'); ?></h3>
                        <p><?php echo __('legal_conditions_text'); ?></p>
                    </div>

                    <div class="legal-section">
                        <h3>4. <?php echo __('legal_intellectual_property_title'); ?></h3>
                        <p><?php echo __('legal_intellectual_property_text'); ?></p>
                        <ul class="legal-list">
                            <li><?php echo __('legal_ip_designs'); ?></li>
                            <li><?php echo __('legal_ip_code'); ?></li>
                            <li><?php echo __('legal_ip_content'); ?></li>
                            <li><?php echo __('legal_ip_images'); ?></li>
                            <li><?php echo __('legal_ip_logos'); ?></li>
                        </ul>
                        <p><?php echo __('legal_ip_prohibition'); ?></p>
                    </div>

                    <div class="legal-section">
                        <h3>5. <?php echo __('legal_responsibility_title'); ?></h3>
                        <p><?php echo __('legal_responsibility_text'); ?></p>
                    </div>

                    <div class="legal-section">
                        <h3>6. <?php echo __('legal_links_title'); ?></h3>
                        <p><?php echo __('legal_links_text'); ?></p>
                    </div>

                    <div class="legal-section">
                        <h3>7. <?php echo __('legal_data_protection_title'); ?></h3>
                        <p><?php echo __('legal_data_protection_text'); ?> <a href="privacidad.php"><?php echo __('privacy_policy_title'); ?></a>.</p>
                    </div>

                    <div class="legal-section">
                        <h3>8. <?php echo __('legal_cookies_title'); ?></h3>
                        <p><?php echo __('legal_cookies_text'); ?> <a href="cookies.php"><?php echo __('cookies_policy_title'); ?></a>.</p>
                    </div>

                    <div class="legal-section">
                        <h3>9. <?php echo __('legal_applicable_law_title'); ?></h3>
                        <p><?php echo __('legal_applicable_law_text'); ?></p>
                    </div>

                    <div class="legal-section">
                        <h3>10. <?php echo __('legal_modifications_title'); ?></h3>
                        <p><?php echo __('legal_modifications_text'); ?></p>
                    </div>

                    <div class="legal-section">
                        <h3>11. <?php echo __('legal_contact_title'); ?></h3>
                        <p><?php echo __('legal_contact_text'); ?></p>
                        <ul class="legal-list">
                            <li><strong><?php echo __('legal_email'); ?>:</strong> info@appnet.dev</li>
                            <li><strong><?php echo __('legal_phone'); ?>:</strong> +34 619 929 305</li>
                        </ul>
                    </div>

                    <div class="legal-cta">
                        <p><?php echo __('legal_questions'); ?> <a href="contact.php"><?php echo __('contact_us'); ?></a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Legal Notice Section End -->

<?php
include "includes/footer.php";
?>
