<?php

namespace BrainGames\src\games\even;

use function cli\line;
use function cli\prompt;

const CORRECT_ANSWER = 3;

function parityCheck($number)
{
    return $number % 2 === 0;
}
function startGame($userName)
{
    for ($countRound = 0; $countRound < CORRECT_ANSWER; $countRound++) {
        $randomNum = rand(0, 100);
        line("Question: {$randomNum}");
        $answerUser = prompt('Your answer');
        $correctAnswer = parityCheck($randomNum) ? "yes" : "no";
        if ($answerUser == $correctAnswer) {
            line('Correct!');
        } else {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.
Let's try again, {$userName}!");
            return;
        }
    }
    line("Congratulations, {$userName}!");
}
