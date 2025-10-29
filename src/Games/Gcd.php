<?php

namespace Hexlet\Code\Games\Gcd;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function generateRoundData(): array
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $result = 0;
    $temp = 0;
    $question = "{$num1} {$num2}";
    $a = $num1;
    $b = $num2;
    while ($b !== 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    $result = $a;
    return [
        'question' => $question,
        'correct_answer' => $result,
    ];
}
