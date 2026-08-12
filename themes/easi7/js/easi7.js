(function () {
  'use strict';

  function initNavToggle() {
    var toggle = document.querySelector('.nav-toggle');
    var nav = document.querySelector('nav.primary');
    if (!toggle || !nav) return;
    toggle.addEventListener('click', function () {
      var open = nav.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    nav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        nav.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  function initAccordion() {
    document.querySelectorAll('.accordion-item').forEach(function (item) {
      var trigger = item.querySelector('.accordion-trigger');
      var panel = item.querySelector('.accordion-panel');
      if (!trigger || !panel) return;
      trigger.addEventListener('click', function () {
        var isOpen = item.getAttribute('data-open') === 'true';
        item.setAttribute('data-open', isOpen ? 'false' : 'true');
        trigger.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
        panel.style.maxHeight = isOpen ? '0px' : panel.scrollHeight + 'px';
      });
    });
  }

  function initStatCounters() {
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var nodes = document.querySelectorAll('[data-count-to]');
    if (!nodes.length) return;

    function animate(node) {
      var target = parseFloat(node.getAttribute('data-count-to'));
      var suffix = node.getAttribute('data-count-suffix') || '';
      var prefix = node.getAttribute('data-count-prefix') || '';
      if (reduceMotion || isNaN(target)) {
        node.textContent = prefix + target + suffix;
        return;
      }
      var duration = 900;
      var start = null;
      function step(ts) {
        if (start === null) start = ts;
        var progress = Math.min((ts - start) / duration, 1);
        var eased = 1 - Math.pow(1 - progress, 3);
        var value = Math.round(target * eased * 10) / 10;
        node.textContent = prefix + value + suffix;
        if (progress < 1) window.requestAnimationFrame(step);
      }
      window.requestAnimationFrame(step);
    }

    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            animate(entry.target);
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.4 });
      nodes.forEach(function (node) { observer.observe(node); });
    } else {
      nodes.forEach(animate);
    }
  }

  document.addEventListener('DOMContentLoaded', function () {
    initNavToggle();
    initAccordion();
    initStatCounters();
  });
})();
