<?php

namespace Hexlet\Code\Cli;

use function cli\prompt;

function greeting(): string
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}
