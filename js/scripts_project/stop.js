/**
 * Created by 1 on 14.01.2015.
 */

onbeforeunload=function(){
    location.reload();
    return "ВНИМАНИЕ! Обнаружена попытка SQL инъекции и DDOS атаки!" +
    "Ваш компьютер заблокирован! Немедленно покиньте наш сайт и не повторяйте попытку " +
    "атаки, в противном случае Ваш компьютер будет заражен вирусом";
};
onload=function(){
    location.reload();
};