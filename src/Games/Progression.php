<?php

namespace Hexlet\Code\Games\Progression;

const DESCRIPTION = 'What number is missing in the progression?';

function generateRoundData(): array
{
    $start = rand(1, 100);
    $step = rand(1, 5);
    $length = rand(5, 10);
    $progression = [];
    $currentElement = 0;
    $question = '';
    for ($i = 0; $i < $length; $i++) {
        $currentElement = $start + $i * $step;
        $progression[] = $currentElement;
    }
    $hiddenIndex = rand(1, $length - 1);
    $result = $progression[$hiddenIndex];
    $progression[$hiddenIndex] = '..';
    $question = implode(' ', $progression);
    return [
        'question' => $question,
        'correct_answer' => (string)$result,
    ];
}
