/**
 * Created by 1 on 05.01.2015.
 */

$(document).ready(
    function() {
        $('a#toggleForm').click(
            function(){
                $('div#authForm').slideToggle();
            });
    });