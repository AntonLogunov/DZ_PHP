<?php
function checkFunc($parametr){
	if(!is_int($parametr)) print "false";
	else{
		if($parametr > 170) print "Big";
		else print "Small";
	}
};
print (checkFunc("80"));
