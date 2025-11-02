<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Obtener la URL base del sitio
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

// Configuración de la página
$page_title = __('cookies_policy_title');
$meta_description = __('cookies_policy_description');

include "includes/header.php";
?>

<!-- Page Title Start -->
<section class="page-title title-bg10">
    <div class="d-table">
        <div class="d-table-cell">
            <h2><?php echo __('cookies_policy_title'); ?></h2>
            <ul>
                <li><a href="index.php"><?php echo __('home'); ?></a></li>
                <li><?php echo __('cookies_policy_title'); ?></li>
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

<!-- Cookies Policy Section Start -->
<section class="cookies-policy-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cookies-policy-content">
                    <div class="section-title">
                        <h2><?php echo __('cookies_policy_title'); ?></h2>
                        <p><strong><?php echo __('cookies_last_updated'); ?>:</strong> <?php echo date('d/m/Y'); ?></p>
                    </div>

                    <div class="cookies-section">
                        <h3>1. <?php echo __('cookies_what_are_title'); ?></h3>
                        <p><?php echo __('cookies_what_are_text'); ?></p>
                    </div>

                    <div class="cookies-section">
                        <h3>2. <?php echo __('cookies_types_title'); ?></h3>

                        <h4><?php echo __('cookies_technical_title'); ?></h4>
                        <p><?php echo __('cookies_technical_text'); ?></p>

                        <h4><?php echo __('cookies_analytics_title'); ?></h4>
                        <p><?php echo __('cookies_analytics_text'); ?></p>

                        <h4><?php echo __('cookies_preference_title'); ?></h4>
                        <p><?php echo __('cookies_preference_text'); ?></p>

                        <h4><?php echo __('cookies_marketing_title'); ?></h4>
                        <p><?php echo __('cookies_marketing_text'); ?></p>
                    </div>

                    <div class="cookies-section">
                        <h3>3. <?php echo __('cookies_used_title'); ?></h3>
                        <p><?php echo __('cookies_used_text'); ?></p>

                        <div class="table-responsive">
                            <table class="cookies-table">
                                <thead>
                                    <tr>
                                        <th><?php echo __('cookies_table_name'); ?></th>
                                        <th><?php echo __('cookies_table_purpose'); ?></th>
                                        <th><?php echo __('cookies_table_type'); ?></th>
                                        <th><?php echo __('cookies_table_duration'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PHPSESSID</td>
                                        <td><?php echo __('cookies_session_purpose'); ?></td>
                                        <td><?php echo __('cookies_technical_title'); ?></td>
                                        <td><?php echo __('cookies_session_duration'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>language</td>
                                        <td><?php echo __('cookies_language_purpose'); ?></td>
                                        <td><?php echo __('cookies_preference_title'); ?></td>
                                        <td>1 <?php echo __('cookies_year'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>_ga</td>
                                        <td><?php echo __('cookies_ga_purpose'); ?></td>
                                        <td><?php echo __('cookies_analytics_title'); ?></td>
                                        <td>2 <?php echo __('cookies_years'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>_gid</td>
                                        <td><?php echo __('cookies_gid_purpose'); ?></td>
                                        <td><?php echo __('cookies_analytics_title'); ?></td>
                                        <td>24 <?php echo __('cookies_hours'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>_gat</td>
                                        <td><?php echo __('cookies_gat_purpose'); ?></td>
                                        <td><?php echo __('cookies_analytics_title'); ?></td>
                                        <td>1 <?php echo __('cookies_minute'); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="cookies-section">
                        <h3>4. <?php echo __('cookies_third_party_title'); ?></h3>
                        <p><?php echo __('cookies_third_party_text'); ?></p>
                        <ul class="cookies-list">
                            <li><strong>Google Analytics:</strong> <?php echo __('cookies_google_analytics_text'); ?> <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google Privacy Policy</a></li>
                        </ul>
                    </div>

                    <div class="cookies-section">
                        <h3>5. <?php echo __('cookies_disable_title'); ?></h3>
                        <p><?php echo __('cookies_disable_text'); ?></p>
                        <ul class="cookies-list">
                            <li><strong>Google Chrome:</strong> Configuración > Privacidad y seguridad > Cookies y otros datos de sitios</li>
                            <li><strong>Mozilla Firefox:</strong> Opciones > Privacidad y seguridad > Cookies y datos del sitio</li>
                            <li><strong>Safari:</strong> Preferencias > Privacidad > Gestionar datos de sitios web</li>
                            <li><strong>Microsoft Edge:</strong> Configuración > Privacidad, búsqueda y servicios > Cookies</li>
                        </ul>
                        <p><?php echo __('cookies_disable_warning'); ?></p>
                    </div>

                    <div class="cookies-section">
                        <h3>6. <?php echo __('cookies_consent_title'); ?></h3>
                        <p><?php echo __('cookies_consent_text'); ?></p>
                    </div>

                    <div class="cookies-section">
                        <h3>7. <?php echo __('cookies_changes_title'); ?></h3>
                        <p><?php echo __('cookies_changes_text'); ?></p>
                    </div>

                    <div class="cookies-section">
                        <h3>8. <?php echo __('cookies_contact_title'); ?></h3>
                        <p><?php echo __('cookies_contact_text'); ?></p>
                        <ul class="cookies-list">
                            <li><strong><?php echo __('privacy_email'); ?>:</strong> info@appnet.dev</li>
                            <li><strong><?php echo __('privacy_phone'); ?>:</strong> +34 619 929 305</li>
                        </ul>
                    </div>

                    <div class="cookies-cta">
                        <p><?php echo __('cookies_more_info'); ?> <a href="privacidad.php"><?php echo __('privacy_policy_title'); ?></a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cookies Policy Section End -->

<?php
include "includes/footer.php";
?>
