<?php

namespace Hexlet\Code\Games\Calc;

use function Hexlet\Code\Engine\runGame as runEngine;

const DESCRIPTION = 'What is the result of the expression?';
const ROUNDS_COUNT = 3;

function runGame(): void
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $a = rand(1, 10);
        $b = rand(1, 10);
        $ops = ['+', '-', '*'];
        $op  = $ops[array_rand($ops)];

        $question = "{$a} {$op} {$b}";
        $correctAnswer = (string) calculate($a, $b, $op);

        $rounds[] = [
            'question'       => $question,
            'correct_answer' => $correctAnswer,
        ];
    }

    runEngine($rounds, DESCRIPTION);
}

function calculate(int $a, int $b, string $op): int
{
    return match ($op) {
        '+' => $a + $b,
        '-' => $a - $b,
        '*' => $a * $b,
        default => throw new \LogicException('Unknown operator: ' . $op),
    };
}
