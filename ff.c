<?php
$s1="abc1.txt";
$s2="pqr1.txt";
$f1=fopen($s1,"r");
$f2=fopen($s2,"a");
while(!feof($f1))
{
  $s1=fgets($f1);
  fputs($s1,$f2);
}
echo("copy success..........");

 
?>