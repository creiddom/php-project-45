<?php

namespace Hexlet\Code\Games\Even;

use function Hexlet\Code\Engine\runGame as runEngine;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';
const ROUNDS_COUNT = 3;

function runGame(): void
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number = rand(1, 100);
        $question = (string) $number;
        $correctAnswer = isEven($number) ? 'yes' : 'no';

        $rounds[] = [
            'question' => $question,
            'correct_answer' => $correctAnswer,
        ];
    }

    runEngine($rounds, DESCRIPTION);
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
