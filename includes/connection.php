<?php  
$host = 'localhost';  
$un = 'root';  
$pwd = '';  
$dbname = "ngo";
$conn = mysqli_connect($host, $un, $pwd, $dbname);  
if(! $conn )  
{  
  die('Connection Failed: ' . mysqli_connect_error());  
} 
?>  