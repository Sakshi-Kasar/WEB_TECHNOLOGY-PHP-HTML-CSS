<html>
<body>
<form method="post" action="file1.php">
enter file:
<input  type="text" name="t1">
<br>
<input type="submit" >
</form>
</body>
</html>

<?php
  $f1=$_POST["t1"];
 echo("type=".filetype($f1));
echo("<br> file size=".filesize($f1));

?>

