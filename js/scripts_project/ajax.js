/**
 * Created by 1 on 10.01.2015.
 */

$(document).ready(
    function () {

        $('input#submit').submit( function () {

            var formData = $(this).serialize();

            var sussesLogin = '<b id="errorLogin">Вы успешно авторизированы</b>';
            var failLogin = '<b id="errorLogin">Произошла ошибка. Вы не авторизированы.</b>';
            var failLenght = '<b id="errorLogin">Произошла ошибка. Вы не авторизированы.</b>';

            var errorLogin = $('b#errorLogin');

            function processData() {

                if(data == true){
                    errorLogin.html(sussesLogin);
                } else {
                    errorLogin.html(failLogin);
                }

                if(errorLogin.lenght == 0){
                    errorLogin.html(failLenght);
                }

            }

            $.get('login.php', formData, processData);

        });
});
