<?php
namespace BrainGames\IsEven;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $ROUNDS = 3;
    $round = 0;

    while ($round < $ROUNDS) {
        $number = rand(1, 100);
        $rightAnswer = isEven($number);
        line("Question: %d", $number);
        $answer = prompt("Your answer");

        if ($answer == $rightAnswer) {
          line("Correct!");
          $round += 1;
        } else {
          line("'%s' is wrong answer. Correct answer was '%s'.", $answer, $rightAnswer);
          line("Let's try again, %s!", $name);
          exit();
        }
    }
    line("Congratulations, %s!", $name);
}

function isEven($number)
{
    return $number % 2 === 0 ? 'yes' : 'no';
}
