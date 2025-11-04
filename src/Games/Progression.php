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

        $progression = [];
        for ($j = 0; $j < $length; $j++) {
            $progression[] = $start + $j * $step;
        }

        $hiddenIndex = rand(0, $length - 1);
        $answer = $progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';

        $rounds[] = [
            'question'       => implode(' ', $progression),
            'correct_answer' => (string) $answer,
        ];
    }

    runEngine($rounds, DESCRIPTION);
}
