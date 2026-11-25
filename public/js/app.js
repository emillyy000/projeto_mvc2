document.addEventListener("DOMContentLoaded", function () {
  var form = document.querySelector("form[data-validate]");
  if (!form) return;

  form.addEventListener("submit", function (ev) {
    var email = form.querySelector('[name="email"]');
    if (email && email.value.indexOf("@") === -1) {
      ev.preventDefault();
      alert("Informe um e-mail válido.");
      email.focus();
    }
  });
});

// FILTROS DA PÁGINA DE CONTEÚDOS

document.addEventListener('DOMContentLoaded', () => {
    const filtros = document.querySelectorAll('.filtro');
    const cards = document.querySelectorAll('.conteudo-card');

    filtros.forEach(filtro => {
        filtro.addEventListener('click', () => {
            const categoria = filtro.dataset.filter;

            filtros.forEach(f => f.classList.remove('active'));
            filtro.classList.add('active');

            cards.forEach(card => {
                if (categoria === 'todos' || card.dataset.category === categoria) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});