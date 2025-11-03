<?php

namespace Hexlet\Code\Games\Prime;

use function Hexlet\Code\Engine\runGame as runEngine;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const ROUNDS_COUNT = 3;

function runGame(): void
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $num = rand(1, 100);
        $question = (string) $num;
        $correctAnswer = isPrime($num) ? 'yes' : 'no';

        $rounds[] = [
            'question' => $question,
            'correct_answer' => $correctAnswer,
        ];
    }

    runEngine($rounds, DESCRIPTION);
}

function isPrime(int $n): bool
{
    if ($n < 2) {
        return false;
    }
    if ($n === 2) {
        return true;
    }
    if ($n % 2 === 0) {
        return false;
    }

    $limit = (int) floor(sqrt($n));
    for ($i = 3; $i <= $limit; $i += 2) {
        if ($n % $i === 0) {
            return false;
        }
    }

    return true;
}
