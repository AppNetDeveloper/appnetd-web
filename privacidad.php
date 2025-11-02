<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Obtener la URL base del sitio
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

// Configuración de la página
$page_title = __('privacy_policy_title');
$meta_description = __('privacy_policy_description');

include "includes/header.php";
?>

<!-- Page Title Start -->
<section class="page-title title-bg10">
    <div class="d-table">
        <div class="d-table-cell">
            <h2><?php echo __('privacy_policy_title'); ?></h2>
            <ul>
                <li><a href="index.php"><?php echo __('home'); ?></a></li>
                <li><?php echo __('privacy_policy_title'); ?></li>
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

<!-- Privacy Policy Section Start -->
<section class="privacy-policy-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="privacy-policy-content">
                    <div class="section-title">
                        <h2><?php echo __('privacy_policy_title'); ?></h2>
                        <p><strong><?php echo __('privacy_last_updated'); ?>:</strong> <?php echo date('d/m/Y'); ?></p>
                    </div>

                    <div class="privacy-section">
                        <h3>1. <?php echo __('privacy_intro_title'); ?></h3>
                        <p><?php echo __('privacy_intro_text'); ?></p>
                    </div>

                    <div class="privacy-section">
                        <h3>2. <?php echo __('privacy_responsible_title'); ?></h3>
                        <ul class="privacy-list">
                            <li><strong><?php echo __('privacy_company_name'); ?>:</strong> AppNet Developer</li>
                            <li><strong><?php echo __('privacy_address'); ?>:</strong> Murcia, España</li>
                            <li><strong><?php echo __('privacy_email'); ?>:</strong> info@appnet.dev</li>
                            <li><strong><?php echo __('privacy_phone'); ?>:</strong> +34 619 929 305</li>
                        </ul>
                    </div>

                    <div class="privacy-section">
                        <h3>3. <?php echo __('privacy_data_collected_title'); ?></h3>
                        <p><?php echo __('privacy_data_collected_text'); ?></p>
                        <ul class="privacy-list">
                            <li><?php echo __('privacy_data_identification'); ?></li>
                            <li><?php echo __('privacy_data_contact'); ?></li>
                            <li><?php echo __('privacy_data_navigation'); ?></li>
                            <li><?php echo __('privacy_data_cookies'); ?></li>
                        </ul>
                    </div>

                    <div class="privacy-section">
                        <h3>4. <?php echo __('privacy_purpose_title'); ?></h3>
                        <p><?php echo __('privacy_purpose_text'); ?></p>
                        <ul class="privacy-list">
                            <li><?php echo __('privacy_purpose_communication'); ?></li>
                            <li><?php echo __('privacy_purpose_services'); ?></li>
                            <li><?php echo __('privacy_purpose_newsletter'); ?></li>
                            <li><?php echo __('privacy_purpose_improvement'); ?></li>
                            <li><?php echo __('privacy_purpose_legal'); ?></li>
                        </ul>
                    </div>

                    <div class="privacy-section">
                        <h3>5. <?php echo __('privacy_legal_basis_title'); ?></h3>
                        <p><?php echo __('privacy_legal_basis_text'); ?></p>
                        <ul class="privacy-list">
                            <li><?php echo __('privacy_legal_consent'); ?></li>
                            <li><?php echo __('privacy_legal_contract'); ?></li>
                            <li><?php echo __('privacy_legal_legitimate'); ?></li>
                        </ul>
                    </div>

                    <div class="privacy-section">
                        <h3>6. <?php echo __('privacy_recipients_title'); ?></h3>
                        <p><?php echo __('privacy_recipients_text'); ?></p>
                    </div>

                    <div class="privacy-section">
                        <h3>7. <?php echo __('privacy_retention_title'); ?></h3>
                        <p><?php echo __('privacy_retention_text'); ?></p>
                    </div>

                    <div class="privacy-section">
                        <h3>8. <?php echo __('privacy_rights_title'); ?></h3>
                        <p><?php echo __('privacy_rights_text'); ?></p>
                        <ul class="privacy-list">
                            <li><strong><?php echo __('privacy_right_access'); ?>:</strong> <?php echo __('privacy_right_access_desc'); ?></li>
                            <li><strong><?php echo __('privacy_right_rectification'); ?>:</strong> <?php echo __('privacy_right_rectification_desc'); ?></li>
                            <li><strong><?php echo __('privacy_right_erasure'); ?>:</strong> <?php echo __('privacy_right_erasure_desc'); ?></li>
                            <li><strong><?php echo __('privacy_right_restriction'); ?>:</strong> <?php echo __('privacy_right_restriction_desc'); ?></li>
                            <li><strong><?php echo __('privacy_right_portability'); ?>:</strong> <?php echo __('privacy_right_portability_desc'); ?></li>
                            <li><strong><?php echo __('privacy_right_object'); ?>:</strong> <?php echo __('privacy_right_object_desc'); ?></li>
                        </ul>
                        <p><?php echo __('privacy_rights_contact'); ?></p>
                    </div>

                    <div class="privacy-section">
                        <h3>9. <?php echo __('privacy_security_title'); ?></h3>
                        <p><?php echo __('privacy_security_text'); ?></p>
                    </div>

                    <div class="privacy-section">
                        <h3>10. <?php echo __('privacy_cookies_title'); ?></h3>
                        <p><?php echo __('privacy_cookies_text'); ?> <a href="cookies.php"><?php echo __('privacy_cookies_policy'); ?></a>.</p>
                    </div>

                    <div class="privacy-section">
                        <h3>11. <?php echo __('privacy_changes_title'); ?></h3>
                        <p><?php echo __('privacy_changes_text'); ?></p>
                    </div>

                    <div class="privacy-section">
                        <h3>12. <?php echo __('privacy_contact_title'); ?></h3>
                        <p><?php echo __('privacy_contact_text'); ?></p>
                        <ul class="privacy-list">
                            <li><strong><?php echo __('privacy_email'); ?>:</strong> info@appnet.dev</li>
                            <li><strong><?php echo __('privacy_phone'); ?>:</strong> +34 619 929 305</li>
                        </ul>
                    </div>

                    <div class="privacy-cta">
                        <p><?php echo __('privacy_questions'); ?> <a href="contact.php"><?php echo __('contact_us'); ?></a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Privacy Policy Section End -->

<?php
include "includes/footer.php";
?>
