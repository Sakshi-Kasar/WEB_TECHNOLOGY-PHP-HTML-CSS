<html>
<body>
<form method="post" action="slip9.php">
enter string:
<input type="text" name="t1"><br>
select separator
<select name="op">
<option value="#"> #</option>
<option value=",">,</option>
<option value=".">.</option><option value="/"></option></select>
<br>
a. Split the string into separate words using the given separator. <br>
b. Replace all the occurrences of separator in the given string with some other separator. <br>
c. Find the last word in the given string. enter word<input type="text" name="t3"><br>
enter choice:<input type="text" name="t2"><br>
<input type="submit"></form>
</body></html>

<?php
$s1=$_POST["t1"];
$sep=$_POST["op"];
$ch=$_POST["t2"];
switch($ch)
{
case 1:$s=split($sep,$s1);
                print_r($s);
              break;
case 2:$s=str_replace(",",$sep,$s1);
              echo($s);
                break;
case 3:$s=$_POST["t3"];
             $k=strstr($s1,$s);
              echo($k);
           break;
             
  }
?>
