// assets/js/main.js

document.addEventListener('DOMContentLoaded', () => {

  // ── Custom quill cursor
  const quill = document.getElementById('quill-cursor');
  const trail = document.getElementById('cursor-trail');
  let mx = 0, my = 0, tx = 0, ty = 0;

  document.addEventListener('mousemove', e => {
    mx = e.clientX; my = e.clientY;
    quill.style.left = mx + 'px';
    quill.style.top  = my + 'px';
  });

  function animTrail() {
    tx += (mx - tx) * 0.14;
    ty += (my - ty) * 0.14;
    trail.style.left = tx + 'px';
    trail.style.top  = ty + 'px';
    requestAnimationFrame(animTrail);
  }
  animTrail();

  document.querySelectorAll('a, button, .book-card, .manuscript, .contact-tile').forEach(el => {
    el.addEventListener('mouseenter', () => {
      quill.style.fontSize = '30px';
      quill.style.filter = 'drop-shadow(0 0 10px rgba(201,151,58,.9))';
    });
    el.addEventListener('mouseleave', () => {
      quill.style.fontSize = '22px';
      quill.style.filter = 'drop-shadow(0 0 4px rgba(201,151,58,.6))';
    });
  });

  // ── Floating dust particles
  const pContainer = document.getElementById('particles');
  if (pContainer) {
    for (let i = 0; i < 18; i++) {
      const p = document.createElement('div');
      p.className = 'particle';
      p.style.left               = Math.random() * 100 + 'vw';
      p.style.animationDuration  = (12 + Math.random() * 20) + 's';
      p.style.animationDelay     = (Math.random() * 15) + 's';
      const size = (1 + Math.random() * 2) + 'px';
      p.style.width = p.style.height = size;
      pContainer.appendChild(p);
    }
  }

  // ── Scroll reveal
  const reveals = document.querySelectorAll('.reveal, .reveal-left');
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        const delay = parseFloat(e.target.dataset.delay || '0');
        setTimeout(() => e.target.classList.add('visible'), delay * 1000);
      }
    });
  }, { threshold: 0.12 });
  reveals.forEach(el => obs.observe(el));

  // ── AJAX Contact Form
  const form = document.getElementById('contactForm');
  if (form) {
    form.addEventListener('submit', async e => {
      e.preventDefault();

      const btn     = form.querySelector('.btn-send');
      const success = document.getElementById('alertSuccess');
      const error   = document.getElementById('alertError');

      // Reset alerts
      success.style.display = 'none';
      error.style.display   = 'none';

      // Loading state
      const origText = btn.textContent;
      btn.textContent  = 'Mengirim...';
      btn.disabled     = true;

      try {
        const res  = await fetch('contact.php', {
          method: 'POST',
          body: new FormData(form),
        });
        const data = await res.json();

        if (data.success) {
          success.textContent  = data.message;
          success.style.display = 'block';
          form.reset();
        } else {
          error.textContent  = data.message;
          error.style.display = 'block';
        }
      } catch (err) {
        error.textContent  = 'Terjadi kesalahan. Silakan coba lagi.';
        error.style.display = 'block';
      } finally {
        btn.textContent = origText;
        btn.disabled    = false;
      }
    });
  }

});
