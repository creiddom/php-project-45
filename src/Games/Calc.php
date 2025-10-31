<?php

namespace Hexlet\Code\Games\Calc;

const DESCRIPTION = 'What is the result of the expression?';

function calculate(int $a, int $b, string $op): int
{
    switch ($op) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        default:
            throw new \LogicException('Unknown operator: ' . $op);
    }
}

function generateRoundData(): array
{
    $a = rand(1, 10);
    $b = rand(1, 10);
    $ops = ['+', '-', '*'];
    $op  = $ops[array_rand($ops)];

    return [
        'question'       => "{$a} {$op} {$b}",
        'correct_answer' => (string) calculate($a, $b, $op),
    ];
}
