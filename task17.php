<?php
function checkFunc($parametr){
	if(!is_int($parametr)) print "Error";
	else{
		$number = floor($parametr / 7);
		$sum = ($parametr % 7)*1000;
		echo "Создано $number штук";
		if($sum > 0)
		{
			print "\nOстаток - $sum грамм";
		}
	}
};
print checkFunc(60);
