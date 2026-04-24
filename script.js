// ─── TYPING EFFECT ───
const phrases = ['whoami', 'echo $skills', 'cat portfolio.php'];
let pi = 0, ci = 0, deleting = false;
const typedEl = document.getElementById('typed');

function type() {
  const phrase = phrases[pi];
  if (!deleting) {
    typedEl.textContent = phrase.substring(0, ci + 1);
    ci++;
    if (ci === phrase.length) {
      deleting = true;
      setTimeout(type, 1600);
      return;
    }
  } else {
    typedEl.textContent = phrase.substring(0, ci - 1);
    ci--;
    if (ci === 0) {
      deleting = false;
      pi = (pi + 1) % phrases.length;
    }
  }
  setTimeout(type, deleting ? 60 : 90);
}
type();

// ─── SKILL ACCORDION ───
function toggleSkill(header) {
  const body = header.nextElementSibling;
  const isOpen = header.classList.contains('open');

  // Ferme tous les accordéons ouverts
  document.querySelectorAll('.skill-header.open').forEach(h => {
    h.classList.remove('open');
    h.nextElementSibling.classList.remove('open');
  });

  // Ouvre celui cliqué s'il était fermé
  if (!isOpen) {
    header.classList.add('open');
    body.classList.add('open');
  }
}

// ─── FADE-UP AU SCROLL ───
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('visible');
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

// ─── FORMULAIRE DE CONTACT ───
function handleForm(e) {
  e.preventDefault();
  const btn = e.target.querySelector('.form-btn');
  btn.textContent = 'Message envoyé ✓';
  btn.style.background = '#3d3db8';
  setTimeout(() => {
    btn.textContent = 'Envoyer le message →';
    btn.style.background = '';
    e.target.reset();
  }, 3000);
}
