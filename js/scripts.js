/*******************************************
Paulo Henrique Martins — Curriculum Vitae
Vanilla JS — no jQuery, no framework.
*******************************************/
(function () {
  'use strict';

  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /*******************************************
   THEME TOGGLE
  *******************************************/
  function initTheme() {
    var root = document.documentElement;
    var toggle = document.getElementById('theme-toggle');
    var stored = null;
    try { stored = localStorage.getItem('cv-theme'); } catch (e) {}
    if (stored) root.setAttribute('data-theme', stored);

    if (!toggle) return;
    toggle.addEventListener('click', function () {
      var current = root.getAttribute('data-theme');
      if (!current) {
        current = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
      }
      var next = current === 'dark' ? 'light' : 'dark';
      root.setAttribute('data-theme', next);
      try { localStorage.setItem('cv-theme', next); } catch (e) {}
    });
  }

  /*******************************************
   SCROLL PROGRESS BAR
  *******************************************/
  function initScrollProgress() {
    var bar = document.getElementById('scroll-progress');
    if (!bar) return;
    function update() {
      var doc = document.documentElement;
      var max = doc.scrollHeight - doc.clientHeight;
      var pct = max > 0 ? (doc.scrollTop / max) * 100 : 0;
      bar.style.width = pct + '%';
    }
    document.addEventListener('scroll', update, { passive: true });
    window.addEventListener('resize', update);
    update();
  }

  /*******************************************
   MOBILE NAV
  *******************************************/
  function initMobileNav() {
    var toggle = document.getElementById('nav-toggle');
    var links = document.querySelectorAll('.nav-links a');
    if (!toggle) return;
    toggle.addEventListener('click', function () {
      var isOpen = document.body.classList.toggle('nav-open');
      toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
    links.forEach(function (link) {
      link.addEventListener('click', function () {
        document.body.classList.remove('nav-open');
        toggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  /*******************************************
   SCROLLSPY (active nav link)
  *******************************************/
  function initScrollspy() {
    var links = Array.prototype.slice.call(document.querySelectorAll('.nav-links a[href^="#"]'));
    if (!links.length) return;
    var map = {};
    links.forEach(function (link) {
      var id = link.getAttribute('href').slice(1);
      var target = document.getElementById(id);
      if (target) map[id] = link;
    });

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        var link = map[entry.target.id];
        if (!link) return;
        if (entry.isIntersecting) {
          links.forEach(function (l) { l.classList.remove('is-active'); });
          link.classList.add('is-active');
        }
      });
    }, { rootMargin: '-15% 0px -70% 0px', threshold: 0 });

    Object.keys(map).forEach(function (id) {
      observer.observe(document.getElementById(id));
    });
  }

  /*******************************************
   SCROLL REVEAL
  *******************************************/
  function initReveal() {
    var items = document.querySelectorAll('.reveal');
    if (!items.length) return;
    if (reducedMotion || !('IntersectionObserver' in window)) {
      items.forEach(function (el) { el.classList.add('is-visible'); });
      return;
    }
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0, rootMargin: '0px 0px -40px 0px' });
    items.forEach(function (el) { observer.observe(el); });
  }

  /*******************************************
   ACCORDIONS (projects / skill sub-groups)
  *******************************************/
  function initAccordions() {
    document.addEventListener('click', function (e) {
      var trigger = e.target.closest('.accordion-trigger');
      if (!trigger) return;
      var willOpen = trigger.getAttribute('aria-expanded') !== 'true';
      trigger.setAttribute('aria-expanded', willOpen ? 'true' : 'false');
      var label = trigger.querySelector('.accordion-label');
      if (label && trigger.dataset.labelOpen && trigger.dataset.labelClosed) {
        label.textContent = willOpen ? trigger.dataset.labelOpen : trigger.dataset.labelClosed;
      }
    });
  }

  /*******************************************
   SKILLS: bar fill on scroll + JS sub-skills toggle
  *******************************************/
  function initSkills() {
    var fills = document.querySelectorAll('.skill-fill[data-percent]');
    if (fills.length) {
      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          var el = entry.target;
          var pct = parseFloat(el.dataset.percent) * 100;
          requestAnimationFrame(function () { el.style.width = pct + '%'; });
          observer.unobserve(el);
        });
      }, { threshold: 0.4 });
      fills.forEach(function (el) { observer.observe(el); });
    }

    var expandBtn = document.getElementById('js-skills-expand');
    var sub = document.getElementById('skills-js-sub');
    if (expandBtn && sub) {
      expandBtn.addEventListener('click', function () {
        var isOpen = sub.classList.toggle('is-open');
        expandBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        expandBtn.textContent = isOpen ? 'Hide −' : 'Show +';
        if (isOpen) {
          sub.querySelectorAll('.skill-fill[data-percent]').forEach(function (el) {
            var pct = parseFloat(el.dataset.percent) * 100;
            requestAnimationFrame(function () { el.style.width = pct + '%'; });
          });
        }
      });
    }
  }

  /*******************************************
   LIGHTBOX (native <dialog>)
  *******************************************/
  function initLightbox() {
    var dialog = document.getElementById('lightbox');
    if (!dialog) return;
    var img = dialog.querySelector('img');
    var btnPrev = dialog.querySelector('.lightbox-prev');
    var btnNext = dialog.querySelector('.lightbox-next');
    var btnClose = dialog.querySelector('.lightbox-close');

    var currentGroup = [];
    var currentIndex = 0;

    function openAt(index) {
      currentIndex = index;
      var link = currentGroup[currentIndex];
      img.src = link.getAttribute('href');
      img.alt = link.getAttribute('title') || link.querySelector('img') ? (link.querySelector('img').alt || '') : '';
      var multi = currentGroup.length > 1;
      btnPrev.style.display = multi ? 'flex' : 'none';
      btnNext.style.display = multi ? 'flex' : 'none';
    }

    document.addEventListener('click', function (e) {
      var link = e.target.closest('a.lightbox');
      if (!link) return;
      e.preventDefault();
      var group = link.dataset.gallery || '';
      currentGroup = group
        ? Array.prototype.slice.call(document.querySelectorAll('a.lightbox[data-gallery="' + group + '"]'))
        : [link];
      var index = currentGroup.indexOf(link);
      openAt(index < 0 ? 0 : index);
      if (typeof dialog.showModal === 'function') {
        dialog.showModal();
      }
    });

    btnPrev.addEventListener('click', function () {
      openAt((currentIndex - 1 + currentGroup.length) % currentGroup.length);
    });
    btnNext.addEventListener('click', function () {
      openAt((currentIndex + 1) % currentGroup.length);
    });
    btnClose.addEventListener('click', function () { dialog.close(); });
    dialog.addEventListener('click', function (e) {
      if (e.target === dialog) dialog.close();
    });
    dialog.addEventListener('keydown', function (e) {
      if (e.key === 'ArrowRight') btnNext.click();
      if (e.key === 'ArrowLeft') btnPrev.click();
    });
  }

  /*******************************************
   COPY EMAIL TO CLIPBOARD
  *******************************************/
  function initCopyEmail() {
    var el = document.querySelector('[data-copy]');
    var toast = document.getElementById('toast');
    if (!el) return;
    el.addEventListener('click', function () {
      var value = el.dataset.copy;
      var done = function () {
        if (!toast) return;
        toast.textContent = 'Email copied to clipboard';
        toast.classList.add('is-visible');
        setTimeout(function () { toast.classList.remove('is-visible'); }, 2200);
      };
      if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(value).then(done).catch(function () {});
      }
    });
  }

  /*******************************************
   BACK TO TOP
  *******************************************/
  function initBackToTop() {
    var btn = document.getElementById('back-to-top');
    if (!btn) return;
    document.addEventListener('scroll', function () {
      btn.classList.toggle('is-visible', window.scrollY > 480);
    }, { passive: true });
    btn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: reducedMotion ? 'auto' : 'smooth' });
    });
  }

  /*******************************************
   INIT
  *******************************************/
  document.addEventListener('DOMContentLoaded', function () {
    initTheme();
    initScrollProgress();
    initMobileNav();
    initScrollspy();
    initReveal();
    initAccordions();
    initSkills();
    initLightbox();
    initCopyEmail();
    initBackToTop();
  });
})();
