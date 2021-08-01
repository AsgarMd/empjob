<?php
session_start();
?>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel ="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Login</title>
  </head>
  <body>
  <style>
body
{
 background-image: url("abc2.jpg");
}
</style>

  <?php

          include('db_conn.php');
          if(isset($_POST['submit']))
          {
              
              $email=$_POST['email'];           
              $password=$_POST['password'];
             
              $emailqury="select * from registration where email='$email'";
              $pass="select * from registration where password='$password'";
              $query=mysqli_query($db_conn,$emailqury);
              $qpas=mysqli_query($db_conn,$pass);
              $emailcount=mysqli_num_rows($query);
              $qpass=mysqli_num_rows($qpas);
              if($emailcount)
              {
                  $email_pass=mysqli_fetch_assoc($query);
                  
                  $_SESSION['username']=$email_pass['username'];
                  
                  if($qpass)
                  {
                    
                    ?> <script>
                    alert ("Login successful");
                       </script>  
                       <?php   
                       header('location:employee_list.php');                      
                   }  
                
               else{
                        ?> <script>
              alert ("password are not matched");
                 </script>  
                 <?php   
                     }                     
                } else {
                ?> <script>
                alert ("invalid email id");
                   </script>  
                   <?php  
                }              
            }
        
         
                  
         ?>

       
        <div class="row justify-content-center mt-4">
            <div class="col-lg-4 col-md-4">
                <div class="card bx">
                    <div class="card-body">
                        <div class="card-title">
                           <artical class ="card-body mx-auto" style="max-width:400;" >
                           <h4 class="card-title mt-3 text-3 text-center">Creat An Account</h4>
                           <p class="text-center">Get started with your free account</p>
                           <p>
                              <a href="#" class="btn btn-block google btn"><i class="fa fa-google fa-fw"></i>Login via Google</a>
                              <a href="#" class="btn btn-block twitter btn"><i class="fa fa-twitter fa-fw"></i>Login with twiter</a>
                              <a href="#" class=" btn btn-block fb btn"><i class="fa fa-facebook fa-fw"></i>Login via Facebook</a> 
                           </p>
                           <p class="divider-text">
                               <span class="bg-light">OR</span>
                           </p>   
                           <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                               
                              <div class="form-group input-group">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fa fa-envelope"></i></span>  
                                  </div>   
                                <input type="text" placeholder="Enter Email ID" class="form-control" name="email" required>
                              </div> 
                              
                              <div class="form-group input-group">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fa fa-key icon"></i></span>
                                  </div>
                                 <input type="password" placeholder="Enter Password" class="form-control" name="password" required>
                              </div>
                              
                          
                          <input type="checkbox" checked="checked"> Remember me
                        
                          
                          <div class="clearfix">
                          
                         
                          <input type="submit" name="submit" class="btn  btn-sm btn-success" value="Login"> 
                          <p> Don't have a Account <a href="sign_up.php" style="color:dodgerblue">Sign up Here</a></p>             
                        </form>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>                            
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html> 