<html>
<body>
<form method="post" action="d7.php">
enter string:
<input type="text" name="t1">
<br>
enter separator
<select name="t2">
<option name="t2">,
<option name="t2">.
</select>
<br>
<input type="submit">
</form>
</body>
</html>

<?php
$s1=$_POST["t1"];
$sep=$_POST["t2"];
$a=split($sep,$s1);
print_r($a);


?>
