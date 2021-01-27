<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

/* 1. Вызовите ф-цию aloha и передайте ей значение. */
function aloha($name) {
    echo 'Aloha my dear, ' . $name . '!';
}
aloha('Maksym');
echo '<br>', '<br>';
/*
    2. Доработать ф-цию ola и задайте значение по умолчанию, если в аргумент $name нечего не приходит, чтоб подставлялось
    слово friend. Вызовите ф-цию ola.
*/
function ola($name='friend') {
    echo 'Ola my dear, ' . $name . '!';

}
ola('Maksym');
ola();
echo '<br>', '<br>';

/* 3. Доработайте ф-цию salam так чтоб, все что приходило бы в аргумент $name преобразовывалось автоматически в строку. Вызовите ф-цию salam. */
function salam(string $name) {
    echo 'Salam my dear, ' . $name . '!';
}
salam('Ahmed');
echo '<br>', '<br>';


/* 4. Доработать ф-цию: чтоб любое изменение перменной $var в локальном контексте, отразилось на ее состояние в глобальном контексте */
$var = 173;
function plusTen(&$var) {
    $var += 10;
}
plusTen($var);
echo $var;
echo '<br>', '<br>';


/*
    5. Разработать ф-цию для расчета площади квадрата по стороне:
        5.1 Ознакомиться с формулой по ссылке: https://infofaq.ru/ploshhad-kvadrata.html
        5.2 Сделать так чтоб аргумент $a принимал числовые значения
        5.3 Расчитать перменную $result и вернуть ее значение из фу-ции
        5.4 Вызвать функцию squareArea
*/
function squareArea(int $a) {
    $result = 0;
  echo  $result = $a**2;
    return $result;

}
squareArea(5);
echo '<br>', '<br>';


/*
    6. Доработать фу-цию расчета идеального веса по формуле 'Брокка':
        6.1 Ознакомиться с формулой по ссылке: https://aif.ru/health/food/kak_nayti_svoy_idealnyy_ves_5_sposobov_i_formuly_raschyota
        6.2 Расчитать значение перменной $weight для каждого из ветвлений ифа в зависимости от $gender
        6.3 Фу-ция по ее завершению должна возвращать значение из перменной $weight
        6.4 Для аргумента $index задать значение по умолчанию 1.15
        6.5 Аргумент $gender должен принимать строкоые значения, $height целочисленные, $index значения с плавующей точкой
        6.6 Вызвать ф-цию getWeight с набором значений
*/
function getWeight(string $gender, int $height,float $index= 1.15) {
    if ($gender == 'men') {
        $weight = 0;
       echo $weight= ($height - 100)*$index;
        return $weight;
    } elseif ($gender == 'women'){
        $weight = 0;
        echo $gender= ($height - 110)*$index;
        return $weight;
    }

}
getWeight('women',170);
echo '<br>', '<br>';

/* 7. Разработать функцию которая будет считать среднее значение среди суммы всех элементов массива. */
function average(array $data) {
    echo array_sum($data)/count($data);
    return 0;
}
average([1,3,4,5,6,]);
echo '<br>', '<br>';


/* 8. Создайте анонимную ф-цию которая будет выводить на экран Hello World и присвойте ее в переменную $func. Вызовите ф-цию из переменной. */
$func1 = function (){
    echo 'Hello world';
};
$func1();
echo '<br>', '<br>';

/* 9. Создайте анонимную ф-цию которая будет принимать аргумент строковое значение, а возвращать будет количество символов в этом значении.
Вызовите ф-цию из переменной. */
$var = function (string $a){
    echo $a = iconv_strlen($a);
};
$var('Maksym');
echo '<br>', '<br>';

/* 10. Создайте ф-цию multiplication которая будет принимать какоето значение, умножать его на 2 и возвращать.
Эту ф-цию передайте колбэком в ф-цию getTotal. Вызовите ф-цию getTotal и передайте в нее аргументы */

function multiplication($a)
{
   return $a *2;

}

function getTotal($sum, callable $func)
{

    return $func($sum);
}
echo getTotal(50,'multiplication');








