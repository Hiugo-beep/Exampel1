<?php

## 1 - Есть массив с числами и отсортировать его.
echo "<br>1</br>";
$mass1      =   [1, 7, -5, 4, 51, -100];
sort($mass1 );
print_r( $mass1 );


## 2 - Есть массив со строковыми значениями и отсортировать его.
echo "<br>2</br>";
$mass2      =   ["hello","people","aaaaa","hooorey"];
sort($mass2);
print_r( $mass2);


## 3 - Есть массив с числовыми ключами и отсортировать его по ключам.
echo "<br>3</br>";
$mass3      =   [
    100     =>  'arr',
    5       =>  'kar',
    57      =>  'aaa'
];
ksort($mass3);
print_r($mass3);


## 4 - Есть массив со строковыми ключами и отсортировать его ключам.
echo "<br>4</br>";
$mass4      = [
  'zaaae'   =>  'lll',
  'kar'     =>  'asf',
  'pop'     =>  'ppp',
  'aed'     =>  'kkk'
];
ksort($mass4);
print_r($mass4);


## 5 - Есть массив с числовыми значениями и суммировать их.
echo "<br>5</br>";

$mass5      =   [2, 3 , 5 , 8 , 9 , 10, 54, -50];
$sum5       =   array_sum($mass5);
print_r($sum5);


## 6 - Есть массив с числовыми не целочисленными значениями и суммировать их предварительно округлив до 1 знака после запятой.
echo "<br>6<br>";
$mass6      =   [5.45, 4.64, 9.41, 0.65, -10.58];
foreach ($mass6 as &$val6){
    $val6   =   round( $val6, 1);
}
$sum6       =   array_sum($mass6);

print_r($mass6);
print_r($sum6);


## 7 - Есть массив и вывести все его элементы через запятую.
echo "<br>7</br>";
$mass7      =   [1,5,8,7,9,6,3,2,5,7];
echo implode(', ', $mass7);


## 8 - Есть массив и вывести через запятую значения элементов с четными ключами.
echo "<br>8</br>";
$mass8      =   [
    108     =>  'arr1',
    57      =>  'kar2',
    130     =>  'arr3',
    5       =>  'kar4',
    195     =>  'arr5',
    50      =>  'kar6',
    56      =>  'aaa7'
];

$oddElementsMass8   =   [];

while (current($mass8)) {
    $isOddKey   =   key($mass8) % 2 == 0;
    if($isOddKey){
        $oddElementsMass8[] =   current($mass8);
    }
    next($mass8);
}

echo implode(', ', $oddElementsMass8);


## 9 - Создать строку (несколько слов через запятую) и поместить ее содержимое в массив (разделив строку по запятым).
echo "<br>9</br>";

$str9       =   "Hello,world,how,are,you,doing,?";
$mass9      =   explode(",", $str9);
print_r($mass9);


## 10 - Есть массив с 10 элементами. Получить 3 новых массива
# 10.1 - с первыми 4 элементами.
# 10.2 - со средними 4 элементами.
# 10.3 - с последними 4 элементами.
echo "<br>10</br>";

$mass10     =   [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$mass10_1   =   array_slice($mass10, 0, 4);
$mass10_2   =   array_slice($mass10, 3, 4);
$mass10_3   =   array_slice($mass10, -4);
print_r($mass10_1);
echo "<br>";
print_r($mass10_2);
echo "<br>";
print_r($mass10_3);


## 11 - Поменять ключи и значения в массиве местами.
echo "<br>11</br>";
$mass11     =   [
    "str1"  =>  12,
    "str2"  =>  13,
    "str3"  =>  14
];
$mass11     =   array_flip($mass11);
print_r($mass11);

## 12 - Вывести массив в обратном порядке.
echo "<br>12</br>";
$mass12     =   [1, 2, 3, 4, 5];
$reverse_mass_12  =   array_reverse($mass12);
print_r ($reverse_mass_12 );

## 13 - Есть массив с повторяющимися значениями. Получить массив с уникальными значениями.
echo "<br>13</br>";
$mass13     =   [1, 1, 2, 5, 6, 6, "red", "red"];
$unique_mass_13     =   array_unique($mass13);
print_r($unique_mass_13);

## 14 - Есть массив А с 10 элементами и массив B с 5 элементами.
# Заменить в массиве А первые 4 элемента на элементы из массива B.
echo "<br>14</br>";
$mass14_A       =   array_fill(0,10, 1);
$mass14_B       =   array_fill(0,5, 2);

$mass14_A       =   array_replace($mass14_A , array_slice($mass14_B,0,4  ));
print_r ($mass14_A);

## 15 - Найти пересечение массивов А и B.
echo "<br>15</br>";
$mass15_A       =   [
    "GREEN"     =>  "gree1n",
    "RED"       =>  "red",
    "YELLOW"    =>  "yellow",
    "ORANGE"    =>  "orange"
];
$mass15_B       =   [
    "green"     =>  "GREEN",
    "RED"       =>  "red",
    "YELLOW"    =>  "yellow",
    "orange"    =>  "ORA5NGE"
];

print_r(array_uintersect($mass15_A, $mass15_B,"strcasecmp"));

## 16 - Найти чем массив А отличается от массива B.
echo "<br>16</br>";
$mass16_A   =   [
    "ar1"   =>  "red",
    "ar20"  =>  "orange",
    "ar58"  =>  "red"
];
$mass16_B   =   [
    "a8"    =>  "re",
    "ar20"  =>  "orange",
    "ar58"  =>  "RED"
];



###123


print_r( array_diff( $mass16_A, $mass16_B));

## 17 - Преобразовать массив с 20 элементами в двумерный массив,
# где элемент 1 содержит первые 5 элементов,
# 2 элемент содержит следующие 5 элементов и т.д..
echo "<br>17</br>";

$mass17         =   array_fill(0,20,1);
$mass_17_x2     =   [
    "red"       =>  array_slice($mass17, 0,5),
    "yellow"    =>  array_slice($mass17,5,5),
    "purple"    =>  array_slice($mass17, 10, 5),
    "orange"    =>  array_slice($mass17, 15, 5)

];
print_r($mass_17_x2);

## 18 - Есть двумерный массив первый уровень валюты “USD”, “EUR”
#второй уровень “день этой недели => объем продаж”.
#- Получить сумму продаж по каждой валюте.
#- Добавить 1000 объему продаж за каждый день
#- Есть еще один (похожий) двумерный массив
# со значениями объемов продаж за прошлую неделю.
# Объединить два массива.

$mass18         =   









