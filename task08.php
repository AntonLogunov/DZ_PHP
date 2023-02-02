<?php
$days = [
	"1"=> ["en" => "Monday", "ru" => "Понедельник"],
	"2"=> ["en" => "Tuesday", "ru" => "Вторник"],
	"3"=> ["en" => "Wednesday", "ru" => "Среда"],
	"4"=> ["en" => "Thursday", "ru" => "Четверг"],
	"5"=> ["en" => "Friday", "ru" => "Пятница"],
	"6"=> ["en" => "Saturday", "ru" => "Суббота"],
	"7"=> ["en" => "Sunday", "ru" => "Воскресенье"],];
	
foreach ($days as $d => $number)
{
	if($d == "3")
	{
		print $d." => ";
		foreach ($number as $key => $value)
		{
		    print $key." - ".$value;
		    print(" ");
		}
	}
}