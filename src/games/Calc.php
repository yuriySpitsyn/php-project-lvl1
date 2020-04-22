<?php

namespace BrainGames\src\Games\Calc;

use function BrainGames\src\Cli\gameInterface;

const INSTRUCTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function expressionSolution($randNum1, $randNum2, $operation)
{
    switch ($operation) {
        case "+":
            $result = $randNum1 + $randNum2;
            break;
        case "-":
            $result = $randNum1 - $randNum2;
            break;
        case "*":
            $result = $randNum1 * $randNum2;
    }
    return $result;
}

function data()
{
    $randNum1 = rand(0, 100);
    $randNum2 = rand(0, 100);
    $mathOperations = ['+', '-', '*'];

    $randOperation = array_rand(array_flip($mathOperations));

    $MathExpression = $randNum1 . $randOperation . $randNum2;

    $correctAnswer = expressionSolution($randNum1, $randNum2, $randOperation);

    return [
        'question' => $MathExpression,
        'correctAnswer' => $correctAnswer,
    ];
}

function run()
{
    $getData = function () {
        return data();
    };

    gameInterface(INSTRUCTION, $getData);
}
