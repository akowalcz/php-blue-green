<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>


<?php 
$ip = $_SERVER['REMOTE_ADDR']; 
  
echo "Server IP Address is: $ip", "<br>"; 
  
?> 

<?php 
$ip = $_SERVER['SERVER_ADDR']; 
  
echo "POD IP Address is: $ip", "<br>"; 
  
?> 

</br>

<?php
$deployment = getenv("COLOR");

$deployment = getenv("COLOR");
$color=$deployment;

echo '<i style="color:';
echo $color;
echo ';font-size:30px;font-family:calibri ;">
      Hello World today is Feb 2 at 12:30, in color ';
echo $color;
echo ' </i> ';


?>


 </body>
</html>
