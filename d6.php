<html>
<body>
<form method="post" action="d6.php">
enter first strng:
<input type="text" name="t1">
enter second string:
<input type="text" name="t2">
<input type="submit">
</form>
</body></html>

<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
if(strncasecmp($s1,$s2,6));
echo("same upto n");
?>
