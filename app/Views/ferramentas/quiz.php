<section class="nutrition-quiz-page">
    <div class="nutrition-quiz-container">
        <div class="quiz-card">
            <div class="quiz-intro">
                <span class="quiz-eyebrow">QUIZ NUTRICIONAL</span>
                <h1>COMO EST&Aacute; SUA ROTINA?</h1>
                <p>Responda &agrave;s cinco perguntas e veja algumas ideias para sua rotina.</p>
            </div>

            <?php if ($error !== ''): ?>
                <p class="quiz-error" role="alert"><?= e($error) ?></p>
            <?php endif; ?>

            <form method="post" action="<?= url('ferramentas/quiz') ?>" class="quiz-form">
                <?php foreach ($questions as $questionIndex => $question): ?>
                    <fieldset class="quiz-question-block">
                        <legend class="quiz-question-title">
                            <span class="quiz-question-number"><?= str_pad((string) ($questionIndex + 1), 2, '0', STR_PAD_LEFT) ?></span>
                            <span><?= e($question['title']) ?></span>
                        </legend>
                        <div class="quiz-answers">
                            <?php foreach ($question['answers'] as $answerIndex => $answer): ?>
                                <label class="quiz-answer">
                                    <input
                                        type="radio"
                                        name="answers[<?= $questionIndex ?>]"
                                        value="<?= $answerIndex ?>"
                                        <?= (($selectedAnswers[$questionIndex] ?? null) === $answerIndex) ? 'checked' : '' ?>
                                        required
                                    >
                                    <span><?= e($answer['label']) ?></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </fieldset>
                <?php endforeach; ?>

                <button type="submit" class="quiz-submit">Ver minhas sugest&otilde;es <span aria-hidden="true">&#8594;</span></button>
            </form>

            <?php if ($result !== null): ?>
                <section class="quiz-result" aria-labelledby="quiz-result-title">
                    <span class="quiz-score"><?= (int) $result['score'] ?> de 10 pontos</span>
                    <h2 class="quiz-result-title" id="quiz-result-title"><?= e($result['title']) ?></h2>
                    <p class="quiz-result-message"><?= e($result['message']) ?></p>
                    <div class="quiz-suggestions">
                        <strong>Ideias para experimentar:</strong>
                        <?php if ($result['tips']): ?>
                            <ul>
                                <?php foreach ($result['tips'] as $tip): ?>
                                    <li><?= e($tip) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p>Mantenha os hábitos que fazem bem para você e sua rotina.</p>
                        <?php endif; ?>
                    </div>
                    <p class="quiz-disclaimer">Este quiz &eacute; apenas educativo e n&atilde;o avalia sua sa&uacute;de. Cada pessoa tem necessidades diferentes.</p>
                    <div class="quiz-result-footer">
                        <a class="quiz-restart" href="<?= url('ferramentas/quiz') ?>">&#8634; &nbsp; Refazer o quiz</a>
                    </div>
                </section>
            <?php endif; ?>
        </div>
    </div>
</section>
