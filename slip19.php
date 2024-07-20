<html>
<body>
<form method="post" action="slip19.php">
enter first  large string<input type="text" name="t1">
<br>
enter  word<input type="text" name="t2">
<br>
enter choice:
a. Delete a small part from first string after accepting position and number of characters to 
remove. <br>
enter position <input type="text" name="p1">
<br>
enter no of chars <input type="text" name="c1">
b. Insert the given small string in the given big string at specified position without removing 
any characters from the big string. <br>
c. Replace some characters/ words from given big string with the given small string at 
specified position.<br>
<input type="text" name="t3">
<br>
<input type="submit">
</form></body></html>

<?php
$ch=$_POST["t3"];
$s=$_POST["t1"];
$w=$_POST["t2"];
switch($ch)
{
  case 1:$p=$_POST["p1"];
                 $c=$_POST["c1"];
                $s1=substr($s,$p,$c);
                 echo("$s1");
                  break;
case 2:$p=$_POST["p1"];
               $s1=substr_replace($s,$w,$p,0);
                echo("$s1");
            break;
case 3:$p=$_POST["p1"];
               $s1=substr_replace($s,$w,$p,5);
                echo("$s1");
            break;



}
?>























