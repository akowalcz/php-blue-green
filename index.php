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
if ( $deployment == 'blue') {
  $color = 'blue';
} elseif ($deployment == 'green')  {
  $color = 'green';
} else {
  $color = 'blue';
} 

echo '<i style="color:';
echo $color;
echo ';font-size:30px;font-family:calibri ;">
      Hello World in color ';
echo $color;
echo ' </i> ';


?>


 </body>
</html>
