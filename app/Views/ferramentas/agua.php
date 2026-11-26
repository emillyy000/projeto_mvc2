<section class="water-page">
    <div class="water-container">
        <div class="water-heading">
            <span class="water-eyebrow">HIDRATE-SE</span>
            <h1>QUANTA &Aacute;GUA BEBER?</h1>
            <p>Refer&ecirc;ncia comum: 35 ml por kg de peso corporal.</p>
        </div>

        <section class="water-tracker" aria-label="Calculadora e acompanhamento de hidrata&ccedil;&atilde;o">
            <div class="water-weight-row">
                <label for="water-weight">Seu peso: <output id="water-weight-value" for="water-weight">45</output> kg</label>
                <input id="water-weight" type="range" min="20" max="150" step="1" value="45">
            </div>

            <div class="water-goal" aria-live="polite" aria-atomic="true">
                <strong id="water-liters">1,6 L</strong>
                <span>POR DIA &asymp; <b id="water-cup-goal">7</b> COPOS</span>
            </div>

            <div class="water-drink-progress">
                <p id="water-cup-count">Copos de hoje: 0/7</p>
                <div class="water-cups" id="water-cups" aria-label="Marque os copos de água que você bebeu"></div>
            </div>

            <p class="water-note">Estimativa geral baseada em 35 ml/kg. A necessidade pode variar com idade, clima, atividade e saúde. Em caso de dúvida, converse com um profissional de saúde.</p>
        </section>
    </div>
</section>
