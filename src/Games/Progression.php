<?php
namespace BrainGames\Games\Progression;

use function BrainGames\Engine\gameEngine;

const RULE = 'What number is missing in the progression?';
const SIZE_OF_PROGRESSION = 10;

function run()
{
    $getData = function () {
        $firstElement = rand(1, 20);
        $step = rand(3, 10);
        $progression[0] = $firstElement;
        for ($i = 1; $i < SIZE_OF_PROGRESSION; $i++) {
            $progression[$i] = $progression[$i - 1] + $step;
        }
        $keyOfHideElem = array_rand($progression);

        $question = hideElem($progression, $keyOfHideElem);
        $rightAnswer = $progression[$keyOfHideElem];

        return [$question, $rightAnswer];
    };

    gameEngine(RULE, $getData);
}
function hideElem($progression, $keyOfHideElem)
{
    $progression[$keyOfHideElem] = '..';
    return implode(' ', $progression);
}
