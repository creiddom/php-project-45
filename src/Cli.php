<?php

namespace Hexlet\Code\Cli;

use function cli\prompt;
use function cli\line;

function greeting(): string
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}
