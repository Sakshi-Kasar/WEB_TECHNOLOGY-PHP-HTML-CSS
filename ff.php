<?php
$s1="abc1.txt";
$s2="pqr11.txt";
$f1=fopen($s1,"r");
$f2=fopen($s2,"w");
while(!feof($f1))
{
  $s1=fgets($f1);
  fputs($f2,$s1);
}
echo("copy success..........");

 
?>