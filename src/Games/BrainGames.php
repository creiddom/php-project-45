<?php

namespace Hexlet\Code\Games\BrainGames;

const DESCRIPTION = '';  // ничего не выводится

/**
 * @return array{question: string, correct_answer: string}
 */
function generateRoundData(): array
{
    return [
        'question' => '',
        'correct_answer' => '',
    ];
}
// Я не нашла способа, как сделать, чтобы в bin не было никакой логики,
// но при этом по команде brain-games происходил диалог и вопрос об имени.
// Поэтому вот такой вариант.
