<?php
$array = array("Петя" => 100, "Коля" => 200, "Иван" => 300);
function sum($array)
{
    $res = 0;
    foreach($array as $sum)
    {
    	$res += $sum;
    }
    return $res;
}
echo(sum($array));