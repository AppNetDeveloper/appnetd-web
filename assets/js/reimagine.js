/**
 * BionicEye — Reimagine v1.0
 * Effects: reveal on scroll, bento pointer glow, orbital layout,
 * pricing tabs, counter animations, flow step stagger.
 */

(function () {
  'use strict';

  const ready = (fn) =>
    document.readyState !== 'loading'
      ? fn()
      : document.addEventListener('DOMContentLoaded', fn);

  const prefersReducedMotion =
    window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* --------------------------------------------------------
     1. REVEAL ON SCROLL — generic + flow steps
     -------------------------------------------------------- */
  function initReveal() {
    const revealables = document.querySelectorAll('.re-reveal, .re-flow');
    if (!revealables.length) return;

    const observer = new IntersectionObserver(
      (entries) => {
        for (const entry of entries) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        }
      },
      { threshold: 0.15, rootMargin: '0px 0px -80px 0px' }
    );

    revealables.forEach((el) => observer.observe(el));
  }

  /* --------------------------------------------------------
     2. BENTO POINTER GLOW — follows cursor per cell
     -------------------------------------------------------- */
  function initBentoGlow() {
    const cells = document.querySelectorAll('.re-bento__cell');
    if (!cells.length) return;

    cells.forEach((cell) => {
      cell.addEventListener('pointermove', (e) => {
        const rect = cell.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width) * 100;
        const y = ((e.clientY - rect.top) / rect.height) * 100;
        cell.style.setProperty('--x', `${x}%`);
        cell.style.setProperty('--y', `${y}%`);
      });
    });
  }

  /* --------------------------------------------------------
     3. ORBITAL AGENTS — 8 agents around supervisor
     -------------------------------------------------------- */
  function initOrbital() {
    const orbit = document.querySelector('.re-orbit');
    if (!orbit) return;
    const agents = orbit.querySelectorAll('.re-orbit__agent');
    if (!agents.length) return;

    const total = agents.length;
    const radiusPct = 36; // % of container

    agents.forEach((agent, i) => {
      const angle = (i / total) * Math.PI * 2 - Math.PI / 2;
      const tx = Math.cos(angle) * radiusPct;
      const ty = Math.sin(angle) * radiusPct;
      agent.style.setProperty('--tx', `${tx * (orbit.offsetWidth / 100)}px`);
      agent.style.setProperty('--ty', `${ty * (orbit.offsetHeight / 100)}px`);
    });

    // Recompute on resize (debounced)
    let resizeTimer;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(() => {
        agents.forEach((agent, i) => {
          const angle = (i / total) * Math.PI * 2 - Math.PI / 2;
          const tx = Math.cos(angle) * radiusPct;
          const ty = Math.sin(angle) * radiusPct;
          agent.style.setProperty('--tx', `${tx * (orbit.offsetWidth / 100)}px`);
          agent.style.setProperty('--ty', `${ty * (orbit.offsetHeight / 100)}px`);
        });
      }, 150);
    });
  }

  /* --------------------------------------------------------
     4. PRICING TABS — Cloud / Hybrid / On-Premise
     -------------------------------------------------------- */
  function initPricingTabs() {
    const tabs = document.querySelectorAll('.re-pricing-tab');
    const panels = document.querySelectorAll('[data-pricing-panel]');
    if (!tabs.length || !panels.length) return;

    tabs.forEach((tab) => {
      tab.addEventListener('click', () => {
        const target = tab.getAttribute('data-pricing-target');
        tabs.forEach((t) => t.classList.toggle('is-active', t === tab));
        panels.forEach((p) => {
          const isActive = p.getAttribute('data-pricing-panel') === target;
          p.style.display = isActive ? '' : 'none';
        });
      });
    });
  }

  /* --------------------------------------------------------
     5. COUNTERS — animate ticker numbers
     -------------------------------------------------------- */
  function initCounters() {
    const counters = document.querySelectorAll('[data-count-to]');
    if (!counters.length) return;

    const animate = (el, target) => {
      if (prefersReducedMotion) {
        el.textContent = formatNumber(target);
        return;
      }
      const duration = 1800;
      const start = performance.now();
      const easeOut = (t) => 1 - Math.pow(1 - t, 3);

      const tick = (now) => {
        const elapsed = now - start;
        const progress = Math.min(elapsed / duration, 1);
        const value = Math.round(easeOut(progress) * target);
        el.textContent = formatNumber(value);
        if (progress < 1) requestAnimationFrame(tick);
      };
      requestAnimationFrame(tick);
    };

    const formatNumber = (n) => {
      if (n >= 1000000) return (n / 1000000).toFixed(1).replace('.0', '') + 'M';
      if (n >= 1000) return (n / 1000).toFixed(0) + 'K';
      return String(n);
    };

    const observer = new IntersectionObserver(
      (entries) => {
        for (const entry of entries) {
          if (entry.isIntersecting) {
            const target = parseInt(entry.target.getAttribute('data-count-to'), 10);
            if (!isNaN(target)) animate(entry.target, target);
            observer.unobserve(entry.target);
          }
        }
      },
      { threshold: 0.4 }
    );

    counters.forEach((c) => observer.observe(c));
  }

  /* --------------------------------------------------------
     6. BENTO PROGRESS BARS — animate when in viewport
     -------------------------------------------------------- */
  function initProgressBars() {
    const bars = document.querySelectorAll('.re-bento__progress-fill[data-width]');
    if (!bars.length) return;

    const observer = new IntersectionObserver(
      (entries) => {
        for (const entry of entries) {
          if (entry.isIntersecting) {
            const width = entry.target.getAttribute('data-width');
            entry.target.style.width = `${width}%`;
            observer.unobserve(entry.target);
          }
        }
      },
      { threshold: 0.5 }
    );

    bars.forEach((b) => observer.observe(b));
  }

  /* --------------------------------------------------------
     7. MAGNETIC BUTTONS — subtle pointer follow
     -------------------------------------------------------- */
  function initMagnetic() {
    if (prefersReducedMotion) return;
    const buttons = document.querySelectorAll('.re-btn');
    if (!buttons.length) return;

    buttons.forEach((btn) => {
      btn.addEventListener('pointermove', (e) => {
        const rect = btn.getBoundingClientRect();
        const x = e.clientX - rect.left - rect.width / 2;
        const y = e.clientY - rect.top - rect.height / 2;
        btn.style.transform = `translate(${x * 0.12}px, ${y * 0.18}px)`;
      });
      btn.addEventListener('pointerleave', () => {
        btn.style.transform = '';
      });
    });
  }

  ready(() => {
    initReveal();
    initBentoGlow();
    initOrbital();
    initPricingTabs();
    initCounters();
    initProgressBars();
    initMagnetic();
  });
})();
