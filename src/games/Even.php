<?php

namespace Hexlet\Code\Games\Even;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function generateRoundData(): array
{
    $randomNumber = rand(1, 100);
    $question = (string)$randomNumber;
    $correctAnswer = ($randomNumber % 2 === 0) ? 'yes' : 'no';
    return [
        'question' => $question,
        'correct_answer' => $correctAnswer,
    ];
}
