<?php

namespace BrainGames\src\Cli;

use function BrainGames\src\games\even\startGame;
use function cli\line;
use function cli\prompt;

function run()
{
    line('Welcome to the Brain Games!');
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);
    startGame($userName);
}
