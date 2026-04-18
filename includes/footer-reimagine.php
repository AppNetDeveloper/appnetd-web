    </main>
    <?php /* ------ Reimagine footer ------ */ ?>

    <footer style="background:linear-gradient(180deg, var(--re-bg-0), var(--re-bg-1)); border-top:1px solid var(--re-border); padding:var(--re-space-6) 0 var(--re-space-4); margin-top:var(--re-space-6);">
        <div class="re-container">
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(220px, 1fr)); gap:var(--re-space-4); margin-bottom:var(--re-space-5);">
                <!-- Brand -->
                <div>
                    <a href="/" style="display:inline-flex; align-items:center; gap:0.7rem; text-decoration:none; color:var(--re-ink); font-weight:700; font-family:'Space Grotesk',system-ui,sans-serif; margin-bottom:var(--re-space-2);">
                        <img src="/assets/img/logo/header-logo1.png" alt="AppNet Developer" width="36" height="36" style="border-radius:6px;">
                        <span>AppNet<span class="re-ink-gradient">Developer</span></span>
                    </a>
                    <p style="color:var(--re-ink-muted); font-size:var(--re-text-sm); line-height:1.55; margin-top:var(--re-space-2);">
                        <?= __('footer.description') ?>
                    </p>
                    <div style="display:flex; gap:0.7rem; margin-top:var(--re-space-3);">
                        <a href="https://twitter.com/appnetdev" target="_blank" rel="noopener" aria-label="AppNet Developer en Twitter" style="display:inline-flex; width:36px; height:36px; align-items:center; justify-content:center; background:var(--re-surface); border:1px solid var(--re-border); border-radius:50%; color:var(--re-ink-muted); text-decoration:none; transition:all 0.2s;" onmouseover="this.style.borderColor='var(--re-iris)';this.style.color='var(--re-iris-bright)'" onmouseout="this.style.borderColor='var(--re-border)';this.style.color='var(--re-ink-muted)'">
                            <span aria-hidden="true">𝕏</span><span class="sr-only">Twitter</span>
                        </a>
                        <a href="https://www.linkedin.com/company/appnet-developer" target="_blank" rel="noopener" aria-label="AppNet Developer en LinkedIn" style="display:inline-flex; width:36px; height:36px; align-items:center; justify-content:center; background:var(--re-surface); border:1px solid var(--re-border); border-radius:50%; color:var(--re-ink-muted); text-decoration:none;" onmouseover="this.style.borderColor='var(--re-iris)';this.style.color='var(--re-iris-bright)'" onmouseout="this.style.borderColor='var(--re-border)';this.style.color='var(--re-ink-muted)'">
                            <span aria-hidden="true">in</span><span class="sr-only">LinkedIn</span>
                        </a>
                        <a href="https://github.com/appnet-developer" target="_blank" rel="noopener" aria-label="AppNet Developer en GitHub" style="display:inline-flex; width:36px; height:36px; align-items:center; justify-content:center; background:var(--re-surface); border:1px solid var(--re-border); border-radius:50%; color:var(--re-ink-muted); text-decoration:none;" onmouseover="this.style.borderColor='var(--re-iris)';this.style.color='var(--re-iris-bright)'" onmouseout="this.style.borderColor='var(--re-border)';this.style.color='var(--re-ink-muted)'">
                            <span aria-hidden="true">⌨</span><span class="sr-only">GitHub</span>
                        </a>
                    </div>
                </div>

                <!-- Product -->
                <div>
                    <h4 style="font-family:'Space Grotesk',system-ui,sans-serif; font-size:var(--re-text-sm); font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:var(--re-ink-dim); margin-bottom:var(--re-space-2);"><?= __('we_offer') ?></h4>
                    <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="/service.php" style="color:var(--re-ink-muted); text-decoration:none; font-size:var(--re-text-sm);"><?= __('our_services') ?></a></li>
                        <li><a href="/proyectos.php" style="color:var(--re-ink-muted); text-decoration:none; font-size:var(--re-text-sm);"><?= __('projects') ?></a></li>
                        <li><a href="/about.php" style="color:var(--re-ink-muted); text-decoration:none; font-size:var(--re-text-sm);"><?= __('about') ?></a></li>
                        <li><a href="https://bioniceye.app" target="_blank" rel="noopener" style="color:var(--re-ink-muted); text-decoration:none; font-size:var(--re-text-sm);">BionicEyE + ADRI</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h4 style="font-family:'Space Grotesk',system-ui,sans-serif; font-size:var(--re-text-sm); font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:var(--re-ink-dim); margin-bottom:var(--re-space-2);"><?= __('about_us') ?></h4>
                    <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="/blog.php" style="color:var(--re-ink-muted); text-decoration:none; font-size:var(--re-text-sm);"><?= __('blog') ?></a></li>
                        <li><a href="/contact.php" style="color:var(--re-ink-muted); text-decoration:none; font-size:var(--re-text-sm);"><?= __('contact_us') ?></a></li>
                        <li><a href="/sitemap.php" style="color:var(--re-ink-muted); text-decoration:none; font-size:var(--re-text-sm);">Sitemap</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div>
                    <h4 style="font-family:'Space Grotesk',system-ui,sans-serif; font-size:var(--re-text-sm); font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:var(--re-ink-dim); margin-bottom:var(--re-space-2);"><?= __('legal') ?></h4>
                    <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="/privacidad.php" style="color:var(--re-ink-muted); text-decoration:none; font-size:var(--re-text-sm);"><?= __('privacy') ?></a></li>
                        <li><a href="/terminos.php" style="color:var(--re-ink-muted); text-decoration:none; font-size:var(--re-text-sm);"><?= __('terms') ?></a></li>
                        <li><a href="/cookies.php" style="color:var(--re-ink-muted); text-decoration:none; font-size:var(--re-text-sm);"><?= __('cookies') ?></a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 style="font-family:'Space Grotesk',system-ui,sans-serif; font-size:var(--re-text-sm); font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:var(--re-ink-dim); margin-bottom:var(--re-space-2);"><?= __('contact_us') ?></h4>
                    <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:0.5rem; font-size:var(--re-text-sm); color:var(--re-ink-muted);">
                        <li>📧 <a href="mailto:info@appnet.dev" style="color:var(--re-iris-bright); text-decoration:none;">info@appnet.dev</a></li>
                        <li>📞 <a href="tel:+34619929305" style="color:var(--re-iris-bright); text-decoration:none;">+34 619 929 305</a></li>
                        <li>💬 <a href="https://wa.me/34619929305" target="_blank" rel="noopener" style="color:var(--re-iris-bright); text-decoration:none;">WhatsApp</a></li>
                        <li>📍 Murcia, España</li>
                    </ul>
                </div>
            </div>

            <div style="padding-top:var(--re-space-3); border-top:1px solid var(--re-border); text-align:center; color:var(--re-ink-dim); font-size:var(--re-text-xs);">
                <p>© <?= date('Y') ?> AppNet Developer SL · <?= __('footer.rights') ?></p>
                <p style="margin-top:0.4rem;">
                    <?= __('footer.madeWith') ?> ❤️ <?= __('footer.inSpain') ?> 🇪🇸
                </p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp float -->
    <a href="https://wa.me/34619929305?text=Hola%2C%20me%20interesa%20AppNet%20Developer" target="_blank" rel="noopener" class="whatsapp-float" aria-label="Contactar por WhatsApp con AppNet Developer" style="position:fixed;bottom:24px;right:24px;z-index:999;width:56px;height:56px;background:#25d366;border-radius:50%;display:grid;place-items:center;box-shadow:0 6px 20px rgba(37,211,102,0.4);transition:transform 0.2s;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
        <span class="sr-only">Abrir conversación por WhatsApp</span>
        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="width:28px;height:28px;fill:white" aria-hidden="true"><path d="M16.004 0h-.008C7.174 0 0 7.176 0 16c0 3.5 1.134 6.742 3.06 9.374L1.058 31.37l6.204-1.964A15.89 15.89 0 0016.004 32C24.826 32 32 24.822 32 16S24.826 0 16.004 0zm9.31 22.608c-.39 1.096-1.924 2.006-3.162 2.27-.846.18-1.95.322-5.67-1.218-4.762-1.97-7.826-6.81-8.064-7.124-.23-.314-1.924-2.562-1.924-4.888 0-2.326 1.218-3.466 1.65-3.94.39-.428 1.03-.624 1.642-.624.198 0 .376.01.536.018.47.02.706.048 1.016.786.39.926 1.34 3.252 1.456 3.49.118.238.236.554.078.868-.148.322-.278.466-.516.738-.238.27-.464.478-.702.77-.22.256-.466.53-.196.998.27.47 1.2 1.976 2.576 3.2 1.77 1.576 3.26 2.064 3.73 2.292.47.228.744.192 1.016-.116.278-.314 1.192-1.388 1.51-1.864.314-.476.632-.394 1.06-.236.432.156 2.75 1.296 3.22 1.532.47.236.786.354.904.55.116.194.116 1.134-.274 2.23z"/></svg>
    </a>

    <!-- Reimagine JS -->
    <script src="/assets/js/reimagine.js?v=2"></script>
</body>
</html>
