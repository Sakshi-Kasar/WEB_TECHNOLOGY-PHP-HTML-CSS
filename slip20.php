<html>
<body>
a) Split an array into chunks <br>
b) Sort the array by values without changing the keys. <br>
c) Filter the even elements from an array<br>
<form method="post" action="slip20.php">
enter choice
<input type="text" name="t1"><br>
<input type="submit">
</form>
</body>
</html>

<?php
$a=array("om"=>"101","sai"=>"102");
$ch=$_POST["t1"];
switch($ch)
{
case 1:$b=array_chunk($a,1);
              print_r($b);
               break;
case 2:asort($a);
              print_r($a);
             break;
case 3:function check_no($n)
            {
               if($n%2==0)
               return true;
              else
               return false;
          }
          $b=array_filter($a,"check_no");
          print_r($b);
           break;

}
?>
