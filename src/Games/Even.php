<?php

namespace Hexlet\Code\Games\Even;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

/**
 * Генератор данных раунда:
 * создаёт число и формирует вопрос/ответ с использованием чистой функции.
 */
/**
 * @return array{question: string, correct_answer: string}
 */
function generateRoundData(): array
{
    $randomNumber = rand(1, 100);

    return [
        'question'       => (string) $randomNumber,
        'correct_answer' => isEven($randomNumber) ? 'yes' : 'no',
    ];
}
