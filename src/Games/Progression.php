<?php

namespace Hexlet\Code\Games\Progression;

const DESCRIPTION = 'What number is missing in the progression?';

/**
 * @return int[]  Массив элементов прогрессии
 */
function buildProgression(int $start, int $step, int $length): array
{
    $res = [];
    for ($i = 0; $i < $length; $i++) {
        $res[] = $start + $i * $step;
    }
    return $res;
}

/**
 * @return array{question: string, correct_answer: string}
 */
function generateRoundData(): array
{
    $start  = rand(1, 20);
    $step   = rand(2, 10);
    $length = 10;

    $arr = buildProgression($start, $step, $length);

    $hiddenIndex = rand(0, $length - 1);
    $answer = $arr[$hiddenIndex];
    $arr[$hiddenIndex] = '..';

    return [
        'question'       => implode(' ', $arr),
        'correct_answer' => (string) $answer,
    ];
}
