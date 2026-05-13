/**
 * DIVERGENTES — Nosotros page JS
 * Activa el link del sidenav según la sección visible en pantalla.
 * Cargado solo en page-nosotros.php via functions.php (depende de jQuery del padre).
 */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    var sections = document.querySelectorAll('.nos-dept');
    var navLinks = document.querySelectorAll('.nos-sidenav a');

    if (!sections.length || !navLinks.length) return;

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          navLinks.forEach(function (a) { a.classList.remove('is-active'); });
          var href = '#' + entry.target.id;
          var match = document.querySelector('.nos-sidenav a[href="' + href + '"]');
          if (match) match.classList.add('is-active');
        }
      });
    }, { rootMargin: '-25% 0px -70% 0px' });

    sections.forEach(function (s) { io.observe(s); });

    // Hero stats: count-up editorial
    var statValues = document.querySelectorAll('[data-nos-count]');

    if (statValues.length) {
      var easeOutCubic = function (t) {
        return 1 - Math.pow(1 - t, 3);
      };

      var formatValue = function (value, prefix, pad) {
        var rounded = Math.round(value);
        var output = String(rounded);

        if (pad > 0) {
          output = output.padStart(pad, '0');
        }

        return prefix + output;
      };

      var animateCount = function (el) {
        var target = Number(el.getAttribute('data-nos-count')) || 0;
        var prefix = el.getAttribute('data-nos-prefix') || '';
        var pad = Number(el.getAttribute('data-nos-pad')) || 0;
        var duration = 1100;
        var startTime = null;

        var step = function (timestamp) {
          if (!startTime) startTime = timestamp;

          var progress = Math.min((timestamp - startTime) / duration, 1);
          var eased = easeOutCubic(progress);
          var current = target * eased;

          el.textContent = formatValue(current, prefix, pad);

          if (progress < 1) {
            window.requestAnimationFrame(step);
          } else {
            el.textContent = formatValue(target, prefix, pad);
          }
        };

        window.requestAnimationFrame(step);
      };

      var statsObserver = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry, index) {
          if (!entry.isIntersecting) return;

          var stat = entry.target;
          var value = stat.querySelector('[data-nos-count]');

          window.setTimeout(function () {
            stat.classList.add('is-visible');

            if (value && !value.hasAttribute('data-nos-counted')) {
              value.setAttribute('data-nos-counted', 'true');
              animateCount(value);
            }
          }, index * 120);

          observer.unobserve(stat);
        });
      }, {
        threshold: 0.45
      });

      document.querySelectorAll('.nos-stat').forEach(function (stat) {
        statsObserver.observe(stat);
      });
    }

    // Inyectar fotos desde window.AUTHORS
    if (window.AUTHORS && window.AUTHORS.length) {
      var themeUrl = (window.NosotrosConfig && window.NosotrosConfig.themeUrl) ? window.NosotrosConfig.themeUrl : '';

      window.AUTHORS.forEach(function (author) {
        // Buscar la tarjeta por el slug en data-author-slug
        var card = document.querySelector('[data-author-slug="' + author.slug + '"]');
        if (!card) return;

        var wrap = card.querySelector('.nos-card__photo-wrap');
        var initials = card.querySelector('.nos-card__initials');
        if (!wrap || !author.photo) return;

        var img = document.createElement('img');
        img.className = 'nos-card__photo';
        img.src = themeUrl + '/' + author.photo;
        img.alt = author.name;
        img.loading = 'lazy';
        img.decoding = 'async';

        // Reemplazar iniciales con la foto
        if (initials) {
          wrap.replaceChild(img, initials);
        } else {
          wrap.insertBefore(img, wrap.firstChild);
        }
      });
    }

    // ── HERO: grid background con máscara cursor ──────────────────────
    var heroSection = document.getElementById('nos-hero-bg');
    var heroMask    = document.getElementById('nos-hero-mask');

    if (heroSection && heroMask) {
      var hx = 50, hy = 50;   // posición actual (interpolada)
      var tx = 50, ty = 50;   // posición destino
      var heroRaf = null;
      var heroActive = false;

      var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

      if (!prefersReducedMotion) {

        var lerp = function(a, b, t) { return a + (b - a) * t; };

        var updateMask = function() {
          hx = lerp(hx, tx, 0.09);
          hy = lerp(hy, ty, 0.09);
          heroMask.style.webkitMaskImage =
            'radial-gradient(circle 180px at ' + hx + '% ' + hy + '%, transparent 0%, black 100%)';
          heroMask.style.maskImage =
            'radial-gradient(circle 180px at ' + hx + '% ' + hy + '%, transparent 0%, black 100%)';
          heroRaf = window.requestAnimationFrame(updateMask);
        };

        heroSection.addEventListener('mousemove', function(e) {
          var r = heroSection.getBoundingClientRect();
          tx = ((e.clientX - r.left) / r.width)  * 100;
          ty = ((e.clientY - r.top)  / r.height) * 100;

          if (!heroActive) {
            heroActive = true;
            heroRaf = window.requestAnimationFrame(updateMask);
          }
        });

        heroSection.addEventListener('mouseleave', function() {
          tx = 50; ty = 50;
        });

        heroSection.addEventListener('touchmove', function(e) {
          var touch = e.touches[0];
          var r = heroSection.getBoundingClientRect();
          tx = ((touch.clientX - r.left) / r.width)  * 100;
          ty = ((touch.clientY - r.top)  / r.height) * 100;
        }, { passive: true });
      }
    }
    // ── /HERO: grid background ─────────────────────────────────────────
  });

})();
