<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

function runGame(array $rounds, string $description): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    if ($description !== '') {
        line($description);
    }

    foreach ($rounds as $round) {
        line('Question: %s', $round['question']);
        $answer = prompt('Your answer');

        if ($answer === $round['correct_answer']) {
            line('Correct!');
            continue;
        }

        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $round['correct_answer']);
        line("Let's try again, %s!", $name);
        return;
    }

    line('Congratulations, %s!', $name);
}
