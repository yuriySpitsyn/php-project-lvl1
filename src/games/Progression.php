<?php

namespace BrainGames\src\Games\Progression;

use function BrainGames\src\Cli\gameInterface;

const INSTRUCTION = 'What number is missing in the progression?';

function run()
{
    $getData = function () {
        $progressionLength = 10;
        $firstNum = rand(0, 100);
        $step = rand(1, 100);
        $endNum = $firstNum + $step * ($progressionLength - 1);

        $progression = range($firstNum, $endNum, $step);

        $hiddenElementIndex = array_rand($progression);

        $correctAnswer = $progression[$hiddenElementIndex];

        $progression[$hiddenElementIndex] = '..';

        $question = implode(' ', $progression);

        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer,
        ];
    };

    gameInterface(INSTRUCTION, $getData);
}
