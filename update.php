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
      
         <h1 style =color:green class="">Update Data</h1>
          <form name = "stud" action ="" method="post">
          <table class='regform'>
            <tr><td><h2>Employee Id</h2></td><td><input type='number' name='id' ></td></tr>
          <tr ><td></td><td><input type='submit'  name='sub' value ='search' ></td></tr>
  
         </table>
          </form>
      
<?php
include("db_conn.php");
if(isset($_POST['sub']))
{
$x=$_POST['id'];
$sql="select * from emp_data where Emp_Id=".$x;
$sql_row=$db_conn->query($sql);
if($sql_row->num_rows) {
	$row_data=$sql_row->fetch_assoc();
//echo $row_data;
echo "<table class='result'>
<form name ='frm' action='' method='post' >
<tr><td>Id</td><td> <input type='number' name='id'  value='".$row_data['Emp_Id']."'></td></tr>
<tr><td>First Name</td><td> <input type='text' name='f_nm' value='".$row_data['Emp_Name']."'  ></td></tr>
<tr><td>Last Name</td><td> <input type='text' name='l_nm' value='".$row_data['Mobile_No']."'></td></tr>
<tr><td>father name</td><td> <input type='text' name='ft_nm' value='".$row_data['Join_date']."'></td></tr>
<tr><td>Mother Name</td><td> <input type='text' name='m_nm' value='".$row_data['Job']."'></td></tr>
<tr><td>gender</td><td> <input type='radio' name='Gender'>male <input type='radio' name='Gender'>female</td></tr>";
 if($row_data['Gender']=="male")
	{
	 
	echo "<script>

		 document.frm.Gender[0].checked=true
		 </script>";
	}
else
   echo "<script> document.frm.Gender[1].checked=true </script>";

echo"
<tr><td>Update Data</td><td> <input type='submit' class='btn btn-block btn-sm btn-success' name='upd' value='Update' ></td></tr>
</form></table>";

}
else
	{
	echo "<h1><font color='red'>data not found</font></h1>";
	}
}

if(isset($_POST['upd']))
{
  $Emp_id=$_POST['Emp_Id'];
  $Emp_name=$_POST['Emp_Name'];
  $Email_id=$_POST['Email_Id'];
  $Mobile_no=$_POST['Mobile_No'];
  $Join_d=$_POST['Join_date'];
  $job=$_POST['Job'];
  $gender=$_POST['Gender'];
  $sql="UPDATE Emp_data  SET Emp_Id='$Emp_id',Emp_Name='$Emp_name',Email_id='$Emp_Id',Mobile_No='$Mobile_no',Join_date='$Join_d',
  job='$Job,Gender='$gender' where Emp_Id=".$Emp_Id;
//echo $sql;
$exe=mysqli_query($db_conn,$sql);

if($exe)
echo"<h1><font color ='green'>update succcessfull...</h1></font>";
else
echo "not update data";
}
?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>