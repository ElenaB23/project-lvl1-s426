<?php
namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\gameEngine;

const RULE = 'Find the greatest common divisor of given numbers.';

function run()
{
    $getData = function () {
        $firstNumber = rand(1, 50);
        $secondNumber = rand(1, 50);
        $question = "{$firstNumber} {$secondNumber}";
        $rightAnswer = greatestCommonDivisor($firstNumber, $secondNumber);

        return [$question, $rightAnswer];
    };

    gameEngine(RULE, $getData);
}
function greatestCommonDivisor($firstNumber, $secondNumber)
{
    $minNumber = min($firstNumber, $secondNumber);
    for ($divisor = $minNumber; $divisor > 0; $divisor--) {
        if ($firstNumber % $divisor === 0 && $secondNumber % $divisor === 0) {
            return $divisor;
        }
    }
}
