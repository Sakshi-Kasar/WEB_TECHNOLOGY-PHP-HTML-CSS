<?php
$s1=array(12,23,4,5,67,4,5,6,7,7,89,0);
$a=array_chunk($s1,5);
foreach($a as $v)
{
	echo("<br>new array=");
	foreach($v as $v)
	echo("<br>".$v);
}

?>