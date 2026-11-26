<section class="imc-page">
    <div class="imc-container">
        <header class="imc-heading">
            <span class="imc-eyebrow">CALCULE</span>
            <h1>CALCULADORA DE IMC</h1>
            <p>O IMC &eacute; um ponto de partida, n&atilde;o um diagn&oacute;stico.</p>
        </header>

        <div class="imc-layout">
            <form class="imc-form" method="post" action="<?= url('ferramentas/imc') ?>">
                <div class="imc-field">
                    <label for="weight">Peso (kg)</label>
                    <input id="weight" name="weight" type="number" min="1" max="500" step="0.1" inputmode="decimal" placeholder="65" value="<?= e($weight) ?>" required>
                </div>
                <div class="imc-field">
                    <label for="height">Altura (cm)</label>
                    <input id="height" name="height" type="number" min="1" max="300" step="0.1" inputmode="decimal" placeholder="168" value="<?= e($height) ?>" required>
                </div>
                <button class="imc-submit" type="submit">Calcular IMC <span aria-hidden="true">&#8594;</span></button>
                <?php if ($error !== ''): ?>
                    <p class="imc-error" role="alert"><?= e($error) ?></p>
                <?php endif; ?>
            </form>

            <aside class="imc-result" aria-live="polite" aria-atomic="true">
                <span class="imc-result-label">SEU RESULTADO</span>
                <?php if ($result !== null): ?>
                    <strong class="imc-result-value"><?= number_format($result, 1, ',', '.') ?></strong>
                    <p>Este n&uacute;mero &eacute; apenas informativo e n&atilde;o substitui uma avalia&ccedil;&atilde;o profissional.</p>
                <?php else: ?>
                    <strong class="imc-result-value imc-empty">&mdash;&mdash;</strong>
                    <p>Preencha peso e altura</p>
                <?php endif; ?>
            </aside>
        </div>
    </div>
</section>
