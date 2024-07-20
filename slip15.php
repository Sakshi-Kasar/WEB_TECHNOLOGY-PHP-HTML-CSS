<html>
<body>
<form method="post" action="slip15.php">
enter string:
<input type="text" name="t1">
<br>
enter choice:<input type="text" name="t2">
a. To select first 5 words from the string <br>
b. Convert the given string to lowercase and then to Title case.<br>
c. Pad the given string with “*” from left and right both the sides. <br>
d. Remove the leading whitespaces from the given string. <br>
e. Find the reverse of given string.<br>
<input type="submit">
</form>
</body>
</html> 

<?php
$s1=$_POST["t1"];
$ch=$_POST["t2"];
switch($ch)
{
  case 1:$s=substr($s1,5);
                 echo($s);
                break;
case 2:$s1=strtolower($s1);
               echo($s1);
               $s1=ucwords($s1);
               echo($s1);
               break;
case 3:$s=str_pad($s1,20,"*",STR_PAD_BOTH);
               echo($s);
               break;
case 4:$s=trim($s1);
               print($s1);
                break;
case 5:$s=strrev($s1);
                echo($s);
               break;
}
?>
