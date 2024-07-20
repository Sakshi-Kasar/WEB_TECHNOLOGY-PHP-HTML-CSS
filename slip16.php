<html>
<body>
<form method="post" action="slip16.php">
enter sub<input type="text" name="t1">
<br>
   enter  sno<input type="text" name="t2">
  <br>
     enter  marks<input type="text" name="t3">
  <br>
<input type="submit"></form>
</body></html>
<?php
  $s1=$_POST["t1"];
  $s2=$_POST["t2"];
  $s3=$_POST["t3"];
 
$a=explode(" ",$s1);
$b=explode(" ",$s2);
$c=explode(" ",$s3);
$t=0;
echo("<table border=1>");
echo("<tr><th>sub<th>sno<th>marks</tr>");
for($i=0;$i<5;$i++)
{
  echo("<tr><td>".$a[$i]);
  echo("<td>".$b[$i]);
  echo("<td>".$c[$i]);
  echo("</tr>");
  $t=$t+$c[$i];
}
echo("</table>");
$p=$t/5;
echo("per=".$p);

?>