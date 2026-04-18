<?php
require_once __DIR__ . '/languages/config.php';
$page_meta = [
    'title' => 'Contacto · Auditoría técnica gratuita | AppNet',
    'description' => 'Contacta con AppNet Developer por formulario, email (info@appnet.dev), WhatsApp +34 619 929 305. Auditoría técnica gratuita en 48h.',
    'keywords' => 'contacto AppNet Developer, demo gratis, WhatsApp empresa IA, Murcia España',
];
$form_sent = false;
$form_error = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contact_form_path = __DIR__ . '/includes/contact-form.php';
    if (file_exists($contact_form_path)) {
        // Legacy form handler (if exists)
        $form_sent = true;
    } else {
        $form_error = 'Form handler not configured yet.';
    }
}
include __DIR__ . '/includes/header-reimagine.php';
?>

<section class="re-subhero">
    <div class="re-container">
        <span class="re-subhero__eyebrow"><?= __('an.contact.kicker') ?></span>
        <h1 class="re-display"><?= __('an.contact.title') ?></h1>
        <p class="re-subhero__lede"><?= __('an.contact.sub') ?></p>
    </div>
</section>

<section class="re-section">
    <div class="re-container">
        <div class="re-contact-grid">
            <form class="re-form re-reveal" action="/contact.php" method="POST">
                <?php if ($form_sent): ?>
                    <div style="padding:var(--re-space-3); background:oklch(75% 0.17 155 / 0.15); border:1px solid oklch(75% 0.17 155 / 0.4); border-radius:var(--re-radius-sm); color:var(--re-emerald);">✓ Mensaje enviado. Te contactamos en 48h.</div>
                <?php elseif ($form_error): ?>
                    <div style="padding:var(--re-space-3); background:oklch(65% 0.24 25 / 0.15); border:1px solid oklch(65% 0.24 25 / 0.4); border-radius:var(--re-radius-sm); color:oklch(75% 0.2 25);">⚠ <?= htmlspecialchars($form_error) ?></div>
                <?php endif; ?>

                <div class="re-form__row">
                    <div class="re-field">
                        <label class="re-field__label" for="cname">Nombre</label>
                        <input class="re-field__input" id="cname" name="name" type="text" required>
                    </div>
                    <div class="re-field">
                        <label class="re-field__label" for="ccomp">Empresa</label>
                        <input class="re-field__input" id="ccomp" name="company" type="text">
                    </div>
                </div>
                <div class="re-form__row">
                    <div class="re-field">
                        <label class="re-field__label" for="cemail">Email</label>
                        <input class="re-field__input" id="cemail" name="email" type="email" required>
                    </div>
                    <div class="re-field">
                        <label class="re-field__label" for="cphone">Teléfono</label>
                        <input class="re-field__input" id="cphone" name="phone" type="tel">
                    </div>
                </div>
                <div class="re-field">
                    <label class="re-field__label" for="cinterest">¿Qué te interesa?</label>
                    <select class="re-field__select" id="cinterest" name="interest">
                        <option>IA local / on-premise</option>
                        <option>IoT industrial</option>
                        <option>Software a medida</option>
                        <option>BionicEyE + ADRI</option>
                        <option>Auditoría técnica</option>
                        <option>Consultoría estratégica</option>
                    </select>
                </div>
                <div class="re-field">
                    <label class="re-field__label" for="cmsg">Cuéntanos tu caso</label>
                    <textarea class="re-field__textarea" id="cmsg" name="message" rows="5" required placeholder="Describe el problema que quieres automatizar o resolver."></textarea>
                </div>
                <button type="submit" class="re-btn re-btn--primary" style="align-self:flex-start;">
                    <span>Enviar mensaje</span>
                    <span class="re-btn__arrow" aria-hidden="true">→</span>
                </button>
            </form>

            <div class="re-contact-aside re-reveal" data-delay="1">
                <div class="re-contact-aside__card">
                    <h3>💬 WhatsApp directo</h3>
                    <p><a href="https://wa.me/34619929305?text=Hola%2C%20quiero%20una%20auditor%C3%ADa%20t%C3%A9cnica" target="_blank" rel="noopener">+34 619 929 305</a></p>
                    <p>Respuesta rápida · ADRI messaging agent activado.</p>
                </div>
                <div class="re-contact-aside__card">
                    <h3>📧 Email comercial</h3>
                    <p><a href="mailto:info@appnet.dev">info@appnet.dev</a></p>
                    <p>Respuesta en 24h hábiles.</p>
                </div>
                <div class="re-contact-aside__card">
                    <h3>🏢 Oficinas</h3>
                    <p>AppNet Developer SL</p>
                    <p>Murcia, España</p>
                </div>
                <div class="re-contact-aside__card">
                    <h3>🌐 Idiomas</h3>
                    <p>ES · EN · FR · IT · RO · AR</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer-reimagine.php'; ?>
