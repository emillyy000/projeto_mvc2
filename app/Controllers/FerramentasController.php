<?php
declare(strict_types=1);

namespace App\Controllers;

class FerramentasController
{
    public function index()
    {
        $title = 'Ferramentas';

        ob_start();
        require __DIR__ . '/../Views/ferramentas/index.php';
        $content = ob_get_clean();

        require __DIR__ . '/../Views/layouts/main.php';
    }

    public function imc(): void
    {
        $title = 'Calculadora de IMC';
        $weightInput = $_POST['weight'] ?? '';
        $heightInput = $_POST['height'] ?? '';
        $weight = is_string($weightInput) ? trim($weightInput) : '';
        $height = is_string($heightInput) ? trim($heightInput) : '';
        $result = null;
        $error = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $weightValue = filter_var($weight, FILTER_VALIDATE_FLOAT);
            $heightValue = filter_var($height, FILTER_VALIDATE_FLOAT);

            if ($weightValue === false || $heightValue === false || $weightValue <= 0 || $heightValue <= 0) {
                $error = 'Informe um peso e uma altura válidos.';
            } elseif ($weightValue > 500 || $heightValue > 300) {
                $error = 'Confira os valores informados e tente novamente.';
            } else {
                $heightInMeters = $heightValue / 100;
                $result = $weightValue / ($heightInMeters * $heightInMeters);
            }
        }

        ob_start();
        require __DIR__ . '/../Views/ferramentas/imc.php';
        $content = ob_get_clean();

        require __DIR__ . '/../Views/layouts/main.php';
    }

    public function agua(): void
    {
        $title = 'Quanta agua beber?';
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        $today = date('Y-m-d');
        if (!isset($_SESSION['water_tracker']) || ($_SESSION['water_tracker']['date'] ?? '') !== $today) {
            $_SESSION['water_tracker'] = ['date' => $today, 'weight' => null, 'cups' => []];
        }

        $tracker = $_SESSION['water_tracker'];
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $actionInput = $_POST['action'] ?? '';
            $action = is_string($actionInput) ? $actionInput : '';

            if ($action === 'calculate') {
                $weightInput = $_POST['weight'] ?? '';
                $weightText = is_string($weightInput) ? str_replace(',', '.', trim($weightInput)) : '';
                $weight = filter_var($weightText, FILTER_VALIDATE_FLOAT);

                if ($weight === false || $weight < 1 || $weight > 300) {
                    $error = 'Informe um peso valido entre 1 e 300 kg.';
                } else {
                    $cupGoal = (int) ceil(($weight * 35) / 250);
                    $tracker['weight'] = (float) $weight;
                    $tracker['cups'] = array_values(array_filter(
                        $tracker['cups'],
                        static fn (int $cup): bool => $cup >= 0 && $cup < $cupGoal
                    ));
                    $_SESSION['water_tracker'] = $tracker;
                    header('Location: ' . url('ferramentas/agua'));
                    exit;
                }
            } elseif ($action === 'toggle' && $tracker['weight'] !== null) {
                $cupInput = $_POST['cup_index'] ?? '';
                $cup = is_string($cupInput) ? filter_var($cupInput, FILTER_VALIDATE_INT) : false;
                $cupGoal = (int) ceil(($tracker['weight'] * 35) / 250);

                if ($cup !== false && $cup >= 0 && $cup < $cupGoal) {
                    if (in_array($cup, $tracker['cups'], true)) {
                        $tracker['cups'] = array_values(array_diff($tracker['cups'], [$cup]));
                    } else {
                        $tracker['cups'][] = $cup;
                        sort($tracker['cups']);
                    }
                    $_SESSION['water_tracker'] = $tracker;
                    header('Location: ' . url('ferramentas/agua'));
                    exit;
                }
            }
        }

        $weight = $tracker['weight'];
        $cupGoal = $weight === null ? 0 : (int) ceil(($weight * 35) / 250);
        $liters = $weight === null ? null : ($weight * 35) / 1000;
        $cupsConsumed = count($tracker['cups']);

        ob_start();
        require __DIR__ . '/../Views/ferramentas/agua.php';
        $content = ob_get_clean();

        require __DIR__ . '/../Views/layouts/main.php';
    }
    public function prato(): void
    {
        $title = 'Monte seu prato';

        ob_start();
        require __DIR__ . '/../Views/ferramentas/prato.php';
        $content = ob_get_clean();

        require __DIR__ . '/../Views/layouts/main.php';
    }

    public function checklist(): void
    {
        $title = 'Checklist de hábitos';

        ob_start();
        require __DIR__ . '/../Views/ferramentas/checklist.php';
        $content = ob_get_clean();

        require __DIR__ . '/../Views/layouts/main.php';
    }

    public function quiz(): void
    {
        $title = 'Quiz nutricional';
        $questions = [
            [
                'title' => 'Quantas porções de frutas e verduras você come por dia?',
                'answers' => [
                    ['label' => 'Nenhuma ou quase nenhuma', 'score' => 0, 'tip' => 'Experimente incluir uma fruta ou um vegetal em uma refeição ou lanche que você já costuma fazer.'],
                    ['label' => '1 a 2 porções', 'score' => 1, 'tip' => 'Se estiver ao seu alcance, acrescente mais uma fruta ou vegetal em algum momento do dia.'],
                    ['label' => '3 ou mais porções', 'score' => 2],
                ],
            ],
            [
                'title' => 'Quanta água você bebe por dia?',
                'answers' => [
                    ['label' => 'Menos de 1 litro', 'score' => 0, 'tip' => 'Deixar água por perto e beber ao longo do dia pode ajudar. A necessidade varia de pessoa para pessoa.'],
                    ['label' => 'Entre 1 e 2 litros', 'score' => 2],
                    ['label' => 'Mais de 2 litros', 'score' => 2],
                ],
            ],
            [
                'title' => 'Com que frequência você come ultraprocessados (salgadinhos, fast food, refrigerante)?',
                'answers' => [
                    ['label' => 'Todos os dias', 'score' => 0, 'tip' => 'Se quiser, experimente alternar alguns lanches com opções de que você goste, sem precisar mudar tudo de uma vez.'],
                    ['label' => 'Algumas vezes por semana', 'score' => 1, 'tip' => 'Uma troca pequena em alguns lanches pode ser um começo possível para sua rotina.'],
                    ['label' => 'Raramente', 'score' => 2],
                ],
            ],
            [
                'title' => 'Você costuma pular refeições, como o café da manhã?',
                'answers' => [
                    ['label' => 'Sim, com frequência', 'score' => 0, 'tip' => 'Se você costuma pular refeições, converse com alguém responsável por você sobre opções que caibam na sua rotina.'],
                    ['label' => 'Às vezes', 'score' => 1, 'tip' => 'Ter um lanche prático disponível pode ajudar nos dias mais corridos, se isso funcionar para você.'],
                    ['label' => 'Não, faço todas', 'score' => 2],
                ],
            ],
            [
                'title' => 'Suas refeições têm proteínas e grãos integrais (feijão, ovos, arroz integral)?',
                'answers' => [
                    ['label' => 'Raramente', 'score' => 0, 'tip' => 'Quando estiverem disponíveis, feijão e ovos são exemplos de alimentos que podem fazer parte das refeições.'],
                    ['label' => 'Em algumas refeições', 'score' => 1, 'tip' => 'Você pode variar as refeições incluindo opções como feijão, ovos ou grãos integrais quando estiverem disponíveis.'],
                    ['label' => 'Na maioria das refeições', 'score' => 2],
                ],
            ],
        ];

        $selectedAnswers = [];
        $error = '';
        $result = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $postedAnswers = $_POST['answers'] ?? [];
            if (is_array($postedAnswers)) {
                foreach ($questions as $index => $question) {
                    $value = $postedAnswers[$index] ?? null;
                    $answerIndex = is_string($value) ? filter_var($value, FILTER_VALIDATE_INT) : false;
                    if ($answerIndex === false || !isset($question['answers'][$answerIndex])) {
                        $error = 'Responda todas as perguntas para ver o resultado.';
                        break;
                    }
                    $selectedAnswers[$index] = $answerIndex;
                }
            }

            if ($error === '' && count($selectedAnswers) === count($questions)) {
                $score = 0;
                $tips = [];
                foreach ($selectedAnswers as $index => $answerIndex) {
                    $answer = $questions[$index]['answers'][$answerIndex];
                    $score += $answer['score'];
                    if (!empty($answer['tip'])) {
                        $tips[] = ['score' => $answer['score'], 'text' => $answer['tip']];
                    }
                }

                usort($tips, static fn (array $first, array $second): int => $first['score'] <=> $second['score']);
                $tips = array_column(array_slice($tips, 0, 3), 'text');

                if ($score >= 8) {
                    $result = [
                        'score' => $score,
                        'title' => 'BOAS ESCOLHAS NO DIA A DIA',
                        'message' => 'Você já tem hábitos positivos. Continue cuidando de si sem buscar perfeição.',
                        'tips' => $tips,
                    ];
                } elseif ($score >= 5) {
                    $result = [
                        'score' => $score,
                        'title' => 'NO CAMINHO CERTO',
                        'message' => 'Alguns ajustes que façam sentido para você podem ajudar na sua rotina.',
                        'tips' => $tips,
                    ];
                } else {
                    $result = [
                        'score' => $score,
                        'title' => 'UM PASSO DE CADA VEZ',
                        'message' => 'Pequenas mudanças possíveis na sua rotina já podem ser um começo.',
                        'tips' => $tips,
                    ];
                }
            } elseif ($error === '') {
                $error = 'Responda todas as perguntas para ver o resultado.';
            }
        }

        ob_start();
        require __DIR__ . '/../Views/ferramentas/quiz.php';
        $content = ob_get_clean();

        require __DIR__ . '/../Views/layouts/main.php';
    }
}
