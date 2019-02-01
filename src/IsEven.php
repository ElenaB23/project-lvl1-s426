<?php
namespace BrainGames\IsEven;

use function \cli\line;
use function \cli\prompt;

const ROUNDS = 3;

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".' . PHP_EOL);
    $name = prompt('May I have your name?');
    line("Hello, %s!" . PHP_EOL, $name);

    for ($currentRound = 0; $currentRound < ROUNDS; $currentRound++) {
        $question = rand(1, 100);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
        line("Question: %d", $question);
        $answer = prompt("Your answer");

        if ($answer == $rightAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer. Correct answer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}

function isEven($number)
{
    return $number % 2 === 0;
}
