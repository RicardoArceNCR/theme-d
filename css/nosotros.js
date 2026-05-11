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
  });

})();
