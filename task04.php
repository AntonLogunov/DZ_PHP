<?php
$text = array('мир, ', 'труд', 'май' , '!');
$phrase = ($text[0].$text[1]." ".$text[2].$text[3]);
$result = ucfirst($phrase);
print $result;