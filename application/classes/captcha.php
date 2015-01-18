<?php
//by Sergeev
class captcha
{

    function print_captcha()
    {
        //вывод капчи

        $oneNumber = rand(0, 10);
        $twoNumber = rand(0, 10);

        echo 'Сколько будет ' . $oneNumber . ' + ' . $twoNumber;
        $trueAnswer = $oneNumber + $twoNumber;
        //генерация чисел, ответа, вывод качи

        return $trueAnswer;
    }

    function check_captcha($trueAnswer, $answer)
    {
        //проверка соответствует-ли правильный ответ введенному

        if ($answer == $trueAnswer) {
            return true;
        }
        else {
            $error = 'Вы ввели не верную капчу';
            return $error;
        }

    }
}