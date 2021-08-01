<?Php
//echo("<h1>program to establish connection b/w MYsql and PHP</h1>");
$server ="localhost";
$user="root";
$pwd="";
$db="sign_up";
$db_conn = new mysqli($server,$user,$pwd,$db);
if($db_conn->connect_error)
die("Connection Error".$db_conn->connect_error);
?>