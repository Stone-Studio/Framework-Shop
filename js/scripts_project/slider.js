/**
 * Created by 1 on 27.12.2014.
 */

$(document).ready(
    function () {
    //страница готова

        var height = $(window).height();
        var width = $(window).width();
        //Получаем высоту и ширину окна

        //if(height > 960){
        //    document.write('Вы используете компьютер');
        //} else {
        //    document.write('Вы используете телефон или планшет');
        //}

        $('img#image_slide_two').hide();
        $('img#image_slide_three').hide();
        //скрываем все слайды кроме первого

        $('a#img_one').click(function() {
            $('img#image_slide_one').fadeIn();
            $('img#image_slide_two').hide();
            $('img#image_slide_three').hide();
            //тыкнули на кнопку первого слайда - плавно показать

            $('a#img_one').css('color', 'red');
            $('a#img_two').css('color', 'blue');
            $('a#img_three').css('color', 'blue');
            //Отобразить красным кнопку активного слайда
        });

        $('a#img_two').click(function() {
            $('img#image_slide_two').fadeIn('fast');
            $('img#image_slide_three').hide();
            $('img#image_slide_one').hide();
            //тыкнули на кнопку слайда - плавно показать

            $('a#img_one').css('color', 'blue');
            $('a#img_two').css('color', 'red');
            $('a#img_three').css('color', 'blue');
            //Отобразить красным кнопку активного слайда
        });

        $('a#img_three').click(function() {
            $('img#image_slide_three').fadeIn('fast');
            $('img#image_slide_one').hide();
            $('img#image_slide_two').hide();
            //тыкнули на кнопку слайда - плавно показать

            $('a#img_one').css('color', 'blue');
            $('a#img_two').css('color', 'blue');
            $('a#img_three').css('color', 'red');
            //Отобразить красным кнопку активного слайда

        });

    }
);
