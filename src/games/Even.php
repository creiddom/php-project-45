<?php

namespace Hexlet\Code\Games\Even;

use function cli\line;
use function cli\prompt;

function even($name)
{
    $correctAnswer = '';
    $count = 0;
    $roundsCount = 3;
    line('Answer "yes" if the number is even, otherwise answer "no".');
    while ($count < $roundsCount) {
        $randomNumber = rand(1, 100);
        line('Question: %d', $randomNumber);
        $correctAnswer = ($randomNumber % 2 === 0) ? 'yes' : 'no';
        $answer = prompt('Your answer');
        if ($answer === $correctAnswer) {
            line('Correct!');
            $count += 1;
        } else {
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
