<?php
namespace BrainGames\Games\IsPrime;

use function BrainGames\Engine\gameEngine;

const RULE = 'Answer "yes" if given number is prime. Otherwise answer "no"';

function run()
{
    $getData = function () {
        $question = rand(1, 100);
        $rightAnswer = isPrime($question) ? 'yes' : 'no';
        return [$question, $rightAnswer];
    };
    gameEngine(RULE, $getData);
}

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($divisor = 2; $divisor <= ceil($number / 2); $divisor++) {
        if ($number % $divisor === 0) {
            return false;
        }
    }
    return true;
}
