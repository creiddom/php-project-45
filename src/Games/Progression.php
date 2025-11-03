<?php

namespace Hexlet\Code\Games\Progression;

use function Hexlet\Code\Engine\runGame as runEngine;

const DESCRIPTION = 'What number is missing in the progression?';
const ROUNDS_COUNT = 3;

function runGame(): void
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $start  = rand(1, 20);
        $step   = rand(2, 10);
        $length = 10;

        $arr = buildProgression($start, $step, $length);

        $hiddenIndex = rand(0, $length - 1);
        $answer = $arr[$hiddenIndex];
        $arr[$hiddenIndex] = '..';

        $rounds[] = [
            'question'       => implode(' ', $arr),
            'correct_answer' => (string) $answer,
        ];
    }

    runEngine($rounds, DESCRIPTION);
}

function buildProgression(int $start, int $step, int $length): array
{
    $res = [];
    for ($i = 0; $i < $length; $i++) {
        $res[] = $start + $i * $step;
    }
    return $res;
}
