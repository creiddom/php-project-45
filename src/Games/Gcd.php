<?php

namespace Hexlet\Code\Games\Gcd;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function gcd(int $a, int $b): int
{
    while ($b !== 0) {
        [$a, $b] = [$b, $a % $b];
    }
    return abs($a);
}

/**
 * @return array{question: string, correct_answer: string}
 */
function generateRoundData(): array
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);

    return [
        'question'       => "{$num1} {$num2}",
        'correct_answer' => (string) gcd($num1, $num2),
    ];
}
