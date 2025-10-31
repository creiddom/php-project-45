<?php

namespace Hexlet\Code\Engine;

use Closure;
use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function detectGameByInvoker(): string
{
    $exe = basename($_SERVER['argv'][0] ?? '');
    switch ($exe) {
        case 'brain-even':
            return 'even';
        case 'brain-calc':
            return 'calc';
        case 'brain-gcd':
            return 'gcd';
        case 'brain-progression':
            return 'progression';
        case 'brain-prime':
            return 'prime';
        case 'brain-games':
        default:
            return '';
    }
}

/**
 * @return array{
 *   description: string,
 *   generateRound: Closure(): array{question: string, correct_answer: string}
 * }
 */
function getGameSpec(string $game): array
{
    switch ($game) {
        case 'even':
            return [
                'description'   => \Hexlet\Code\Games\Even\DESCRIPTION,
                'generateRound' => Closure::fromCallable('\Hexlet\Code\Games\Even\generateRoundData'),
            ];
        case 'calc':
            return [
                'description'   => \Hexlet\Code\Games\Calc\DESCRIPTION,
                'generateRound' => Closure::fromCallable('\Hexlet\Code\Games\Calc\generateRoundData'),
            ];
        case 'gcd':
            return [
                'description'   => \Hexlet\Code\Games\Gcd\DESCRIPTION,
                'generateRound' => Closure::fromCallable('\Hexlet\Code\Games\Gcd\generateRoundData'),
            ];
        case 'progression':
            return [
                'description'   => \Hexlet\Code\Games\Progression\DESCRIPTION,
                'generateRound' => Closure::fromCallable('\Hexlet\Code\Games\Progression\generateRoundData'),
            ];
        case 'prime':
            return [
                'description'   => \Hexlet\Code\Games\Prime\DESCRIPTION,
                'generateRound' => Closure::fromCallable('\Hexlet\Code\Games\Prime\generateRoundData'),
            ];
        default:
            throw new \LogicException('Unknown game: ' . $game);
    }
}

function runGame(): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $game = detectGameByInvoker();
    if ($game === '') {
        // bin/brain-games: только диалог об имени
        return;
    }

    $spec = getGameSpec($game);

    if ($spec['description'] !== '') {
        line($spec['description']);
    }

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $round = ($spec['generateRound'])(); // ['question' => ..., 'correct_answer' => ...]
        line('Question: %s', $round['question']);
        $answer = prompt('Your answer');

        if ($answer === $round['correct_answer']) {
            line('Correct!');
            continue;
        }

        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $round['correct_answer']);
        line("Let's try again, %s!", $name);
        return;
    }

    line('Congratulations, %s!', $name);
}
