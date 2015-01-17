<?php
//by Sergeev
class captcha
{

    function print_captcha()
    {

        $oneNumber = rand(0, 10);
        $twoNumber = rand(0, 10);

        echo 'Сколько будет ' . $oneNumber . ' + ' . $twoNumber;
        $trueAnswer = $oneNumber + $twoNumber;

        return $trueAnswer;
    }

    function check_captcha($trueAnswer, $answer)
    {

        if ($answer == $trueAnswer) {
            return true;
        }
        else {
            $error = 'Вы ввели не верную капчу';
            return $error;
        }

    }
}