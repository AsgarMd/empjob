<?php
ob_start();
session_start();
include("db_conn.php");
if(isset($_GET['y']))
{
$y1=$_GET['y'];

$sql_q="select * from emp_data where Emp_Name='$y1'";


$result=$db_conn->query($sql_q);
$sn=1;
if ($result->num_rows > 0) 
{
  $row_data=$result->fetch_assoc();
	//echo"<form method='post'>";
  echo"<table border='2' cellpadding='10' bordercolor='red' class='regform'>
  <tr><td>S.no</td><td>Employee_ID</td><td>Employee Name</td>
  <td>Emp email ID</td><td>Mobile No</td><td>Join Date</td><td>Job</td><td>Gender</td></tr>";

       while($row_data)
	  {
        echo"<tr><td>".$sn."</td><td>".$row_data['Emp_Id']."</td><td>".$row_data['Emp_Name']."</td><td>".$row_data['Email_Id']."</td>
        <td>".$row_data['Mobile_No']."</td><td>".$row_data['Join_date']."</td><td>".$row_data['Job']."</td><td>".$row_data['Gender']."</td></tr>";
        
     $sn++;
	}
}
}
	echo"</table>";
	
?>
