<?php
$array = [-10,-20,30,50,60,80,-77,-44,2,-1];
$true = 0;
$false = 0;
foreach($array as $sum)
{
	if($sum > 0) { $true += $sum; }
	else $false += $sum;
}
echo "+ : $true \n- : $false";