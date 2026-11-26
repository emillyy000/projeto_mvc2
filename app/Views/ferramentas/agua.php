<section class="water-page">
    <div class="water-container">
        <div class="water-heading">
            <span class="water-eyebrow">HIDRATE-SE</span>
            <h1>QUANTA &Aacute;GUA BEBER?</h1>
            <p>Refer&ecirc;ncia geral: 35 ml por kg de peso corporal.</p>
        </div>

        <section class="water-tracker" aria-label="Calculadora e acompanhamento de hidrata&ccedil;&atilde;o">
            <form method="post" action="<?= url('ferramentas/agua') ?>" class="water-weight-form">
                <div class="water-weight-field">
                    <label for="water-weight">Seu peso (kg)</label>
                    <input id="water-weight" name="weight" type="number" min="1" max="300" step="0.1" inputmode="decimal" placeholder="Ex.: 70" value="<?= $weight !== null ? e((string) $weight) : '' ?>" required>
                </div>
                <button class="water-calculate" type="submit" name="action" value="calculate">Calcular &aacute;gua</button>
            </form>

            <?php if ($error !== ''): ?>
                <p class="water-error" role="alert"><?= e($error) ?></p>
            <?php endif; ?>

            <div class="water-goal" aria-live="polite" aria-atomic="true">
                <strong id="water-liters"><?= $liters !== null ? number_format($liters, 1, ',', '.') . ' L' : '&mdash; L' ?></strong>
                <span>POR DIA &asymp; <b><?= $cupGoal > 0 ? (int) $cupGoal : '&mdash;' ?></b> COPOS</span>
            </div>

            <?php if ($cupGoal > 0): ?>
                <div class="water-drink-progress">
                    <p>Copos de hoje: <?= (int) $cupsConsumed ?>/<?= (int) $cupGoal ?></p>
                    <div class="water-cups" aria-label="Copos de &aacute;gua">
                        <?php for ($cup = 0; $cup < $cupGoal; $cup++): ?>
                            <?php $isFilled = in_array($cup, $tracker['cups'], true); ?>
                            <form method="post" action="<?= url('ferramentas/agua') ?>" class="water-cup-form">
                                <input type="hidden" name="action" value="toggle">
                                <input type="hidden" name="cup_index" value="<?= $cup ?>">
                                <button type="submit" class="water-cup<?= $isFilled ? ' is-filled' : '' ?>" aria-pressed="<?= $isFilled ? 'true' : 'false' ?>" aria-label="Copo <?= $cup + 1 ?>: <?= $isFilled ? 'bebido' : 'marcar como bebido' ?>"></button>
                            </form>
                        <?php endfor; ?>
                    </div>
                </div>
            <?php endif; ?>

            <p class="water-note">Estimativa geral, n&atilde;o uma orienta&ccedil;&atilde;o individual. A necessidade varia com idade, clima, atividade e sa&uacute;de. Se voc&ecirc; for menor de idade, converse com um respons&aacute;vel ou profissional de sa&uacute;de.</p>
        </section>
    </div>
</section>
