<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Obtener la URL base del sitio
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

// Configuración de la página
$page_title = __('terms_title');
$meta_description = __('terms_description');

include "includes/header.php";
?>

<!-- Page Title Start -->
<section class="page-title title-bg10">
    <div class="d-table">
        <div class="d-table-cell">
            <h2><?php echo __('terms_title'); ?></h2>
            <ul>
                <li><a href="index.php"><?php echo __('home'); ?></a></li>
                <li><?php echo __('terms_title'); ?></li>
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

<!-- Terms and Conditions Section Start -->
<section class="terms-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="terms-content">
                    <div class="section-title">
                        <h2><?php echo __('terms_title'); ?></h2>
                        <p><strong><?php echo __('terms_last_updated'); ?>:</strong> <?php echo date('d/m/Y'); ?></p>
                    </div>

                    <div class="terms-section">
                        <h3>1. <?php echo __('terms_acceptance_title'); ?></h3>
                        <p><?php echo __('terms_acceptance_text'); ?></p>
                    </div>

                    <div class="terms-section">
                        <h3>2. <?php echo __('terms_services_title'); ?></h3>
                        <p><?php echo __('terms_services_text'); ?></p>
                        <ul class="terms-list">
                            <li><?php echo __('terms_service_development'); ?></li>
                            <li><?php echo __('terms_service_consulting'); ?></li>
                            <li><?php echo __('terms_service_automation'); ?></li>
                            <li><?php echo __('terms_service_ai'); ?></li>
                            <li><?php echo __('terms_service_iot'); ?></li>
                            <li><?php echo __('terms_service_cybersecurity'); ?></li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>3. <?php echo __('terms_use_conditions_title'); ?></h3>
                        <p><?php echo __('terms_use_conditions_text'); ?></p>
                        <ul class="terms-list">
                            <li><?php echo __('terms_use_legal'); ?></li>
                            <li><?php echo __('terms_use_no_harm'); ?></li>
                            <li><?php echo __('terms_use_no_unauthorized'); ?></li>
                            <li><?php echo __('terms_use_no_spam'); ?></li>
                            <li><?php echo __('terms_use_no_malware'); ?></li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>4. <?php echo __('terms_intellectual_property_title'); ?></h3>
                        <p><?php echo __('terms_intellectual_property_text'); ?></p>
                    </div>

                    <div class="terms-section">
                        <h3>5. <?php echo __('terms_user_content_title'); ?></h3>
                        <p><?php echo __('terms_user_content_text'); ?></p>
                    </div>

                    <div class="terms-section">
                        <h3>6. <?php echo __('terms_limitation_liability_title'); ?></h3>
                        <p><?php echo __('terms_limitation_liability_text'); ?></p>
                    </div>

                    <div class="terms-section">
                        <h3>7. <?php echo __('terms_warranties_title'); ?></h3>
                        <p><?php echo __('terms_warranties_text'); ?></p>
                    </div>

                    <div class="terms-section">
                        <h3>8. <?php echo __('terms_links_title'); ?></h3>
                        <p><?php echo __('terms_links_text'); ?></p>
                    </div>

                    <div class="terms-section">
                        <h3>9. <?php echo __('terms_termination_title'); ?></h3>
                        <p><?php echo __('terms_termination_text'); ?></p>
                    </div>

                    <div class="terms-section">
                        <h3>10. <?php echo __('terms_modifications_title'); ?></h3>
                        <p><?php echo __('terms_modifications_text'); ?></p>
                    </div>

                    <div class="terms-section">
                        <h3>11. <?php echo __('terms_applicable_law_title'); ?></h3>
                        <p><?php echo __('terms_applicable_law_text'); ?></p>
                    </div>

                    <div class="terms-section">
                        <h3>12. <?php echo __('terms_contact_title'); ?></h3>
                        <p><?php echo __('terms_contact_text'); ?></p>
                        <ul class="terms-list">
                            <li><strong><?php echo __('privacy_email'); ?>:</strong> info@appnet.dev</li>
                            <li><strong><?php echo __('privacy_phone'); ?>:</strong> +34 619 929 305</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Terms and Conditions Section End -->

<?php
include "includes/footer.php";
?>
