<!-- Formulario de Contacto Extraído de contact.php -->
<section class="contact-modern py-5" id="contact-form">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-duration="800">
        <div class="section-header">
          <div class="section-badge">
            <span><?php echo __('contact_section_title', 'Contact Us'); ?></span>
          </div>
          <h2 class="section-title"><?php echo __('contact_main_title', 'Let\'s Work Together'); ?></h2>
          <p class="section-description"><?php echo __('contact_main_description', 'Have a project in mind? We\'d love to hear about it. Send us a message and we\'ll respond as soon as possible.'); ?></p>
        </div>
      </div>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-lg-8" data-aos="fade-up" data-aos-duration="800">
        <div class="contact-form-modern">
          <form action="/contact.php" method="post" id="contactFormService" class="contact-form">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-group-modern">
                  <label for="nombre" class="form-label"><?php echo __('contact_form_first_name', 'First Name'); ?></label>
                  <div class="input-group">
                    <span class="input-icon"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group-modern">
                  <label for="apellido" class="form-label"><?php echo __('contact_form_last_name', 'Last Name'); ?></label>
                  <div class="input-group">
                    <span class="input-icon"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group-modern">
                  <label for="email" class="form-label"><?php echo __('contact_form_email', 'Email'); ?></label>
                  <div class="input-group">
                    <span class="input-icon"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group-modern">
                  <label for="telefono" class="form-label"><?php echo __('contact_form_phone', 'Phone'); ?></label>
                  <div class="input-group">
                    <span class="input-icon"><i class="fas fa-phone"></i></span>
                    <input type="tel" class="form-control" id="telefono" name="telefono">
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group-modern">
                  <label for="asunto" class="form-label"><?php echo __('contact_form_subject', 'Subject'); ?></label>
                  <div class="input-group">
                    <span class="input-icon"><i class="fas fa-heading"></i></span>
                    <input type="text" class="form-control" id="asunto" name="asunto" required>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group-modern">
                  <label for="mensaje" class="form-label"><?php echo __('contact_form_message', 'Message'); ?></label>
                  <div class="input-group">
                    <span class="input-icon"><i class="fas fa-comment-alt"></i></span>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group-modern">
                  <label for="captcha" class="form-label"><?php echo $current_captcha_question; ?></label>
                  <div class="input-group">
                    <span class="input-icon"><i class="fas fa-shield-alt"></i></span>
                    <input type="text" class="form-control" id="captcha" name="captcha" required>
                  </div>
                  <small class="form-text text-muted"><?php echo __('contact_captcha_help', 'Answer in lowercase and without accents'); ?></small>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-modern btn-lg w-100 ripple-effect hover-lift">
                  <span><?php echo __('contact_form_submit', 'Send Message'); ?></span>
                  <i class="fas fa-paper-plane ms-2"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
