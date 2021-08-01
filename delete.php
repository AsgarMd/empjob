<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel ="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Signup</title>
  </head>
  <body>
  <style>
body
{
 background-image: url("abc2.jpg");
}
</style>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand ex1" href="#">Hi Asgar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand ex1" href="home.php">Home</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active ex1" aria-current="page" href="employee.php">Employee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ex1 active" href="employee.php">Jobs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active ex1" href="emp_product.php">Employee-Product</a>
              </li>
             
              </ul>
              
               <form class="d-flex">
                <div class="input-group">
                    <input type="search" class="form-control form-control-sm" placeholder="search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-sm btn-success " type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                    <a class="list-group-item bg-primary link-light ex1" href="log_out.php">Log Out</a>
                  </div>
               </form>   
      </div>
        </div>
      </nav> 
     
      <div class="row mt-3">
        <div class="col-lg-2 col-md-2">
             <div class="list-group">
                 <div class="list-group-item active">Employee Data</div>
                 <a href="add_emp.php" class="list-group-item ex1">Add Employee</a>
                 <a href="show_data.php" class="list-group-item ex1"> view all Employee </a>
                 <a href="update.php" class="list-group-item ex1">Update Employee </a>
                 <a href="Delete.php" class="list-group-item ex1">Delete Employee </a>
                 <a href="Search.php" class="list-group-item ex1"> Search Employee </a>
             </div>
          </div>
      </div>
    
<form name = "stud" action ="" method="post" >
<table>
    <tr><td><h1 style =color:red>Delete Data </h1></td></tr>
<tr><td><h2>Employee_ID</h2></td><td><input type='text' name='sid'></td></tr>
  <tr ><td></td><td><input type='submit' class="btn btn-block btn-sm btn-success"  name='sub' value ='Delete_Data' ></td></tr>
  
</table>
<?php
include("db_conn.php");

if(isset($_POST['sub']))
{
	$x=$_POST['sid'];

$sql="delete from Emp_data where Emp_Id=".$x;
$res=mysqli_query($db_conn,$sql);
	if($res)
	{
	echo("<h1><font color='green'>delete successfull</font></h1>");
	}
else
	echo("<h1><font color='red'>data not found</font></h1>");
}
$db_conn->close();
?>
 <!-- O
        ptional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>