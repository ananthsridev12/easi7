(function () {
  'use strict';

  function closeAllMega() {
    document.querySelectorAll('.nav-item.has-mega.open').forEach(function (item) {
      item.classList.remove('open');
      var t = item.querySelector('.mega-trigger');
      if (t) t.setAttribute('aria-expanded', 'false');
    });
  }

  function initNavToggle() {
    var toggle = document.querySelector('.nav-toggle');
    var nav = document.querySelector('nav.primary');
    if (!toggle || !nav) return;
    toggle.addEventListener('click', function () {
      var open = nav.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      if (!open) closeAllMega();
    });
    nav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        nav.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
        closeAllMega();
      });
    });
  }

  function positionMegaPanel(item) {
    var panel = item.querySelector('.mega-panel');
    if (!panel || window.matchMedia('(max-width: 900px)').matches) return;
    panel.style.left = '0px';
    var rect = panel.getBoundingClientRect();
    var margin = 16;
    var overflowRight = rect.right - (window.innerWidth - margin);
    if (overflowRight > 0) {
      var shifted = -overflowRight;
      if (rect.left + shifted < margin) shifted = margin - rect.left;
      panel.style.left = shifted + 'px';
    }
  }

  function initMegaMenu() {
    var items = document.querySelectorAll('.nav-item.has-mega');
    if (!items.length) return;

    items.forEach(function (item) {
      var trigger = item.querySelector('.mega-trigger');
      if (!trigger) return;
      item.addEventListener('mouseenter', function () { positionMegaPanel(item); });
      item.addEventListener('focusin', function () { positionMegaPanel(item); });
      trigger.addEventListener('click', function (e) {
        e.preventDefault();
        var isOpen = item.classList.contains('open');
        closeAllMega();
        positionMegaPanel(item);
        item.classList.toggle('open', !isOpen);
        trigger.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
      });
    });

    window.addEventListener('resize', function () {
      items.forEach(function (item) { item.querySelector('.mega-panel').style.left = '0px'; });
    });

    document.addEventListener('click', function (e) {
      var withinAny = false;
      items.forEach(function (item) {
        if (item.contains(e.target)) withinAny = true;
      });
      if (!withinAny) closeAllMega();
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') closeAllMega();
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

  function initScrollReveal() {
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var nodes = document.querySelectorAll(
      '.svc-card, .svc-card-alt, .engagement-card, .framework-card, .cs-card, .pf-card, .kb-card, .persona-card'
    );
    if (!nodes.length) return;
    if (reduceMotion || !('IntersectionObserver' in window)) {
      nodes.forEach(function (node) { node.classList.add('is-visible'); });
      return;
    }
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
    nodes.forEach(function (node, i) {
      node.style.transitionDelay = Math.min(i % 6, 5) * 60 + 'ms';
      observer.observe(node);
    });
  }

  function initHeroSlider() {
    var root = document.querySelector('[data-hero-slider]');
    if (!root) return;
    var slides = root.querySelectorAll('.hero-slide');
    var dots = root.querySelectorAll('.hero-slider-dot');
    if (slides.length < 2) return;
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var index = 0;
    var timer = null;

    function show(i) {
      index = (i + slides.length) % slides.length;
      slides.forEach(function (s, n) { s.classList.toggle('active', n === index); });
      dots.forEach(function (d, n) { d.classList.toggle('active', n === index); });
    }

    function stop() {
      if (timer) { window.clearInterval(timer); timer = null; }
    }

    function start() {
      if (reduceMotion) return;
      stop();
      timer = window.setInterval(function () { show(index + 1); }, 4500);
    }

    dots.forEach(function (dot, n) {
      dot.addEventListener('click', function () { show(n); start(); });
    });
    root.addEventListener('mouseenter', stop);
    root.addEventListener('mouseleave', start);
    root.addEventListener('focusin', stop);
    root.addEventListener('focusout', start);

    start();
  }

  var ATTRIBUTION_KEYS = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', 'gclid', 'fbclid'];
  var ATTRIBUTION_STORAGE_KEY = 'easi7_attribution';

  function initAttributionCapture() {
    // First-touch attribution: capture UTM/click-id params the first time
    // they appear in the URL, then keep them in localStorage untouched (even
    // across separate visits) so a later direct/organic visit that fills out
    // a form still credits the campaign that originally brought them in.
    var stored;
    try {
      stored = JSON.parse(window.localStorage.getItem(ATTRIBUTION_STORAGE_KEY) || 'null');
    } catch (e) {
      stored = null;
    }
    if (!stored) {
      var params = new URLSearchParams(window.location.search);
      var found = {};
      var hasAny = false;
      ATTRIBUTION_KEYS.forEach(function (key) {
        var value = params.get(key);
        if (value) {
          found[key] = value;
          hasAny = true;
        }
      });
      if (hasAny) {
        try { window.localStorage.setItem(ATTRIBUTION_STORAGE_KEY, JSON.stringify(found)); } catch (e) { /* storage unavailable */ }
        stored = found;
      }
    }
    if (!stored) return;

    // Fill in any matching hidden fields already present on the page's forms.
    ATTRIBUTION_KEYS.forEach(function (key) {
      if (!stored[key]) return;
      document.querySelectorAll('input[name="' + key + '"]').forEach(function (input) {
        if (!input.value) input.value = stored[key];
      });
    });
  }

  function initTransparentHeader() {
    if (!document.body.classList.contains('header-transparent')) return;
    var header = document.querySelector('header.site');
    if (!header) return;
    function update() {
      header.classList.toggle('is-scrolled', window.scrollY > 40);
    }
    update();
    window.addEventListener('scroll', update, { passive: true });
  }

  document.addEventListener('DOMContentLoaded', function () {
    initNavToggle();
    initMegaMenu();
    initAccordion();
    initStatCounters();
    initScrollReveal();
    initHeroSlider();
    initTransparentHeader();
    initAttributionCapture();
  });
})();
