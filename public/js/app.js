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

// CALCULADORA E ACOMPANHAMENTO DE AGUA
document.addEventListener('DOMContentLoaded', () => {
    const weightInput = document.getElementById('water-weight');
    const weightValue = document.getElementById('water-weight-value');
    const litersValue = document.getElementById('water-liters');
    const cupGoalValue = document.getElementById('water-cup-goal');
    const cupCountValue = document.getElementById('water-cup-count');
    const cupsContainer = document.getElementById('water-cups');

    if (!weightInput || !cupsContainer) return;

    const today = new Date();
    const dateKey = [today.getFullYear(), String(today.getMonth() + 1).padStart(2, '0'), String(today.getDate()).padStart(2, '0')].join('-');
    const storageKey = `nutriup-water-${dateKey}`;
    let consumedCups = new Set();

    try {
        const savedCups = JSON.parse(localStorage.getItem(storageKey) || '[]');
        if (Array.isArray(savedCups)) consumedCups = new Set(savedCups.filter(Number.isInteger));
    } catch (_) {
        consumedCups = new Set();
    }

    const renderWaterTracker = () => {
        const weight = Number(weightInput.value);
        const dailyMilliliters = weight * 35;
        const cupGoal = Math.ceil(dailyMilliliters / 250);
        const liters = (Math.round(dailyMilliliters / 100) / 10).toFixed(1).replace('.', ',');

        weightValue.value = String(weight);
        weightValue.textContent = String(weight);
        litersValue.textContent = `${liters} L`;
        cupGoalValue.textContent = String(cupGoal);
        consumedCups = new Set([...consumedCups].filter((cup) => cup >= 0 && cup < cupGoal));
        cupCountValue.textContent = `Copos de hoje: ${consumedCups.size}/${cupGoal}`;
        cupsContainer.replaceChildren();

        for (let cup = 0; cup < cupGoal; cup += 1) {
            const button = document.createElement('button');
            const isFilled = consumedCups.has(cup);
            button.type = 'button';
            button.className = `water-cup${isFilled ? ' is-filled' : ''}`;
            button.setAttribute('aria-pressed', String(isFilled));
            button.setAttribute('aria-label', `Copo ${cup + 1}: ${isFilled ? 'bebido' : 'marcar como bebido'}`);
            button.addEventListener('click', () => {
                if (consumedCups.has(cup)) consumedCups.delete(cup);
                else consumedCups.add(cup);
                try {
                    localStorage.setItem(storageKey, JSON.stringify([...consumedCups]));
                } catch (_) {
                    // O acompanhamento funciona mesmo sem armazenamento local.
                }
                renderWaterTracker();
            });
            cupsContainer.append(button);
        }
    };

    weightInput.addEventListener('input', renderWaterTracker);
    renderWaterTracker();
});

// CHECKLIST DE HABITOS, SALVO NO NAVEGADOR PARA O DIA ATUAL
document.addEventListener('DOMContentLoaded', () => {
    const list = document.getElementById('habit-list');
    const progress = document.getElementById('habit-progress');
    const progressFill = document.getElementById('habit-progress-fill');
    const progressLabel = document.getElementById('habit-progress-label');
    if (!list || !progress || !progressFill || !progressLabel) return;

    const today = new Date();
    const dateKey = [today.getFullYear(), String(today.getMonth() + 1).padStart(2, '0'), String(today.getDate()).padStart(2, '0')].join('-');
    const storageKey = `nutriup-habits-${dateKey}`;
    const habits = [...list.querySelectorAll('input[type="checkbox"][data-habit]')];
    let savedHabits = new Set();

    try {
        const saved = JSON.parse(localStorage.getItem(storageKey) || '[]');
        if (Array.isArray(saved)) savedHabits = new Set(saved.filter((id) => typeof id === 'string'));
    } catch (_) {
        savedHabits = new Set();
    }

    habits.forEach((habit) => {
        habit.checked = savedHabits.has(habit.dataset.habit);
    });

    const updateProgress = () => {
        const completed = habits.filter((habit) => habit.checked).length;
        const percentage = habits.length ? Math.round((completed / habits.length) * 100) : 0;
        progressFill.style.width = `${percentage}%`;
        progress.setAttribute('aria-valuenow', String(percentage));
        progressLabel.textContent = `${percentage}% do dia conclu\u00eddo`;
    };

    habits.forEach((habit) => {
        habit.addEventListener('change', () => {
            const completedIds = habits.filter((item) => item.checked).map((item) => item.dataset.habit);
            try {
                localStorage.setItem(storageKey, JSON.stringify(completedIds));
            } catch (_) {
                // As marcacoes continuam ativas ate a pessoa sair da pagina.
            }
            updateProgress();
        });
    });

    updateProgress();
});

