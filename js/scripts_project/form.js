/**
 * Created by 1 on 10.01.2015.
 */

$(document).ready(
    function () {

    $('input#submit').submit( function () {

            var login = $('input#login').val();         //получение логина из формы
            var password = $('input#password').val();   //получение пароля из формы

            var error = $('b#error');

            var emptyLogin = '<b id="error">Ваш логин пуст</b>';
            var emptyPassword = '<b id="error">Ваш пароль пуст!</b>';

            var tooLongPass = '<b id="error">Ваш пароль слишком длинный</b>';
            var tooLongLogin = '<b id="error">Ваш логин слишком длинный</b>';

            var tooShortPass = '<b id="error">Ваш пароль слишком короткий</b>';
            var tooShortLogin = '<b id="error">Ваш логин слишком короткий</b>';

            if (login == '') {
                error.html(emptyLogin);
            }

            if (password == '') {
                error.html(emptyPassword);
            }

            if(password.length > 12){
                error.html(tooLongPass);
            }

            if(password.length < 4){
                error.html(tooShortPass);
            }

            if(login.length > 12){
                error.html(tooLongLogin);
            }

            if(login.length < 4){
                error.html(tooShortLogin);
            }

        //проверка данных на валидность

    });

});