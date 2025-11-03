<?php

namespace Hexlet\Code\Games\Gcd;

use function Hexlet\Code\Engine\runGame as runEngine;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const ROUNDS_COUNT = 3;

function runGame(): void
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);

        $question = "{$num1} {$num2}";
        $correctAnswer = (string) gcd($num1, $num2);

        $rounds[] = [
            'question' => $question,
            'correct_answer' => $correctAnswer,
        ];
    }

    runEngine($rounds, DESCRIPTION);
}

function gcd(int $a, int $b): int
{
    while ($b !== 0) {
        [$a, $b] = [$b, $a % $b];
    }
    return abs($a);
}
