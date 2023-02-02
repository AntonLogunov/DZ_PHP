<?php
$lang = 'en';
$arrayRu = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
$arrayEn = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];


if($lang == 'ru')
{
	$array = $arrayRu;
}
if($lang == 'en')
{
	$array = $arrayEn;
	print $array;
}


switch ($lang) {
    case 'ru':
        $array = $arrayRu;
        break;
	case 'en':
        $array = $arrayEn;
        break;
}


$arrayLang = [
	'ru' => ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'],
	'en' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday']];