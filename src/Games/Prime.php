<?php

namespace Hexlet\Code\Games\Prime;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function generateRoundData(): array
{
    $num = rand(1, 100);
    $question = (string)$num;
    $result = '';
    $limit = sqrt($num);

    if ($num < 2) {
        $result = 'no';
    } elseif ($num === 2) {
        $result = 'yes';
    } elseif ($num % 2 === 0) {
        $result = 'no';
    } else {
        $result = 'yes';
        for ($i = 3; $i <= $limit; $i += 2) {
            if ($num % $i === 0) {
                $result = 'no';
                break;
            }
        }
    }

    return [
        'question' => $question,
        'correct_answer' => $result,
    ];
}
