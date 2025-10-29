<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGame(string $name, callable $gameCallback, string $description)
{
    line($description);

    $correctAnswersCount = 0;
    while ($correctAnswersCount < ROUNDS_COUNT) {
        $roundData = $gameCallback();
        line('Question: %s', $roundData['question']);
        $userAnswer = prompt('Your answer');
        $correctAnswer = $roundData['correct_answer'];
        if ($userAnswer == $correctAnswer) {
            line('Correct!');
            $correctAnswersCount++;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line('Congratulations, %s!', $name);
}
