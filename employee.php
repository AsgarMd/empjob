<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel ="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
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
          <a class="navbar-brand" href="#">Hi Asgar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="home.php">Home</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="employee.php">Employee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="employee.php">Jobs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active ex1" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active ex1" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active ex1" href="help.php">Help</a>
              </li>
       
              </ul>
              
               <form class="d-flex wh">
                <div class="input-group">
                    <input type="search" class="form-control form-control-sm" placeholder="search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-sm btn-success " type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                  </div>
               </form>   
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bg-primary link-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Registration Here
                    </a>
                    <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item list-group-item bg-primary link-light" href="log_in.php">Login</a></li>
                      <li><a class="dropdown-item bg-primary link-light" href="sign_up.php">Sign up</a></li>
                      
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item bg-primary link-light" href="forget.php">Forget Password</a></li>
                    </ul>
                  </li>
                
          </div>
        </div>
      </nav> 
<!-- nav -->
<div class="container-fluid">  
    <div class="row mt-3">
        <div class="col-lg-3 col-md-3">
            <div class="card card-border">
                <div class="card-body">
                    <h4 class="card-title">254<small class="text-muted">   Employees</small></h4>  
                </div>
                <div class="list-group list-group-flush">
                    <a href="view_all.php" class="list-group-item list-group-item-primary">View all</a>
                </div>
            </div>
       </div>   
       <div class="col-lg-3 col-md-3">
        <div class="card card-border">
            <div class="card-body">
                <h4 class="card-title">25<small class="text-muted">   Jobs</small></h4>  
            </div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-primary">View all</a>
            </div>
        </div>
   </div>        

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>