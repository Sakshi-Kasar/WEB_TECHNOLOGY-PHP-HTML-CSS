<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
function add($a,$b)
{
   return $a+$b;
}
function sub($a,$b)
{
   return $a-$b;
}
function mul($a,$b)
{
   return $a*$b;
}
function div($a,$b)
{
   return $a/$b;
}

switch($c)
{
  case 1:echo(add($a,$b));
                break;
case 2:echo(sub($a,$b));
                break;
case 3:echo(mul($a,$b));
                break;
case 4:echo(div($a,$b));
                break;
}
?>