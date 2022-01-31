<?php

//Ex1
echo "<strong>Ex1 <br></strong>";

function upper_Case($string)
{
    return ucwords($string);
}
echo upper_Case("'london is the capital of great britain'");


echo "<hr>";
//Ex2
echo "<strong>Ex2 <br></strong>";

function stripTags($string)
{

    return (explode(" ", strip_tags($string)));
}
echo "<pre>" . print_r(stripTags('html <b>css</b> php'), true) . "</pre>";

echo "<hr>";
//Ex3
echo "<strong>Ex3 <br></strong>";

function string_stir($string)
{

    return str_shuffle($string);
}

echo string_stir('i love you');
echo "<hr>";
//Ex4
echo "<strong>Ex4 <br></strong>";

function getDays()
{

    return cal_days_in_month(CAL_GREGORIAN, date('m'), date('y'));
}
echo getDays();

echo "<hr>";
//Ex5
echo "<strong>Ex5 <br></strong>";

function showDates()
{

    $date  = date_create(date(""));
    return (date_format($date, "'Y-m-d'") . "<br>" .
        date_format($date, "'d.m.y'") . "<br>" .
        date_format($date, "'H:i:s'") . "<br>" .
        "The current timestamp is " . strtotime("now") . " seconds"
    );
}
echo showDates();

echo "<hr>";
//Ex6
echo "<strong>Ex6 <br></strong>";

function sub_Add_Todate($original_date)
{

    $date = date_create($original_date);
    date_add($date, date_interval_create_from_date_string("400 days"));
    return  removeFromdate(date_format($date, "Y-m-d"));
}
function removeFromdate($new_date)
{

    $date = date_create($new_date);
    date_sub($date, date_interval_create_from_date_string("3 days"));
    return date_format($date, "Y-m-d");
}

echo sub_Add_Todate("2025-12-31");


echo "<hr>";
//Ex7
echo "<strong>Ex7 <br></strong>";
echo "<hr>";

function eraseNumbers($string)
{
    for ($i = 0; $i < strlen($string) - 1; $i++) {
        if (preg_match("/[0-9]/", $string[$i]) == true) continue;
        echo $string[$i];
    }
}

eraseNumbers('a2b3c4b5d6e7f8g9h0');

echo "<hr>";
//Ex8
echo "<strong>Ex8 <br></strong>";

$series = '4, -2, 5, 19, -130, 0, 10';

function getMaxMin($series)
{

    $array = explode(",", $series);

    $n = count($array);
    $max = $array[0];
    $min = $array[0];
    for ($i = 0; $i < $n - 1; $i++)
        if ($max < $array[$i])
            $max = $array[$i];
    echo $max . "<br>";

    for ($i = 0; $i < $n - 1; $i++)
        if ($min > $array[$i])
            $min = $array[$i];
    echo $min;
}
getMaxMin($series);

echo "<hr>";
//Ex9
echo "<strong>Ex9 <br></strong>";

echo rand(1, 100);

echo "<hr>";
//Ex10
echo "<strong>Ex10 <br></strong>";

$arr = array(1 => 'пн', 2 => 'вт', 3 => 'ср', 4 => 'чт', 5 => 'пт', 6 => 'сб', 7 => 'вс');
echo $arr[6] . '<br>';

echo "<hr>";
//Ex11
echo "<strong>Ex11 <br></strong>";

$array = [[1, 2, 4], [1, 2, 3], [4, 5], [6]];

function arraySum($array)
{
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 1; $j < count($array); $j++) {
            for ($k = 2; $k < count($array); $k++) {
                for ($l = 3; $l < count($array); $l++) {
                    $newarray = array_merge($array[$i], $array[$j], $array[$k], $array[$l]);
                    echo "<pre>" . print_r($newarray, true) . "</pre>";;
                    return "sum of array = " . array_sum($newarray);
                }
            }
        }
    }
}
echo "<pre>" . print_r(arraySum($array), true) . "</pre>";

echo "<hr>";
//Ex12
echo "<strong>Ex12 <br></strong>";


$array = array(1, 1, 1, 2, 2, 2, 2, 3);

for ($i[] = 0; $i <= count($array); $i++) {

    if($i = $i+$i)
    echo $i;
}


echo "<hr>";
//Ex13
echo "<strong>Ex13 <br></strong>";

$header = array(

    "Home" => "index.php",
    "About" => "about.php",
    "Services" => "services.php",
    "Catalog" => "catalog.php",
    "Contacts" => "contacts.php"
);

foreach ($header as $key => $value) {

    echo "<a style = 'text-decoration:none;' href=" . $value . ">" . $key . "</a><br>";
}
echo "<hr>";


//Ex14
echo "<strong>Ex14 <br></strong>";

$n = 80;
$rand1 = rand(0, 50);
$rand2 = rand(0, 50);
echo "<div style = 'background:black; display : flex; flex-flow: wrap; '>";
for ($i = 1; $i <= $n; $i++) {
    echo $i . "<div style = 'margin:20px; width : $rand1; height : $rand2; background: red'></div>";
}
echo "</div>";

//Ex15
echo "<strong>Ex15 <br></strong>";

