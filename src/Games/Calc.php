<?php

namespace Hexlet\Code\Games\Calc;

const DESCRIPTION = 'What is the result of the expression?';

function generateRoundData(): array
{
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);
    $operators = ['+', '-', '*'];
    $operator = $operators[array_rand($operators)];
    $question = "{$num1} {$operator} {$num2}";
    $result = 0;
    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
    }
    return [
        'question' => $question,
        'correct_answer' => $result,
    ];
}
