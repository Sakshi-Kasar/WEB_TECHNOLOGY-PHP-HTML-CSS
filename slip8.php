<html>
  <body>
      <form method="post" action="slip8.php">
            enter first  large string:<input type="text"  name="t1"><br>
               enter second string:<input type="text"  name="t2"><br>
               
             a. Find whether the small string appears at the start of the large string. <br>
             b. Find the position of the small string in the big string. <br>
             c. Compare both the string for first n characters, also the comparison
                  shouldnot be case sensitive<br>
 enter choice:<input type="number" name="t3"><br>
                <input type="submit">
      </form>
      </body>
       </html>
  <?php
    $s1=$_POST["t1"];
     $s2=$_POST["t2"];
     $ch=$_POST["t3"];
   switch($ch)
  {
   case 1:if(strstr($s1,$s2))
                    echo("present at the start");
                   else
                      echo("not");
                     break;
case 2:$k=strpos($s1,$s2);
               print($k);
               break;
  case 3: if(strncasecmp ($s1,$s2,6));
                   echo("same");
                    break;                        
 
   }

?>


