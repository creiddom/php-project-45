<?php

namespace Hexlet\Code\Games\Prime;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

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

function generateRoundData(): array
{
    $num = rand(1, 100);

    return [
        'question'       => (string) $num,
        'correct_answer' => isPrime($num) ? 'yes' : 'no',
    ];
}
