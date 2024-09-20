<?php
    require_once("DB.php");

    if(isset($_POST["signup"])){
      $name=$_POST["name"];
      $email=$_POST["email"];
      $pass=$_POST["pass"];
       $q="INSERT INTO `users` (`id`, `name`,  `email`,  `pass`) VALUES (NULL, '$name',  '$email',  '$pass')";

      $insert=mysqli_query($con, $q);
      if($insert){
        header("location:login.php");
      }
      else {
        echo "Not Inserted";
      }
    }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/stylef.css">
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
   </head>
   <body>
     <div class="container ">
       <div class="col-lg-4"> </div>
       <div class="col-lg-4" style="margin-top: 120px">
         <div class="panel panel-info">
           <div class="panel panel-heading">
             <h1 class="text-center">SignUp for Free</h1>
           </div>
           <div class="panel panel-body">
             <form class="form" method="post">

                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="name" value="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Email Address</label>
                  <input type="email" name="email" value="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" name="pass" value="" class="form-control">
                </div>

                <input type="submit" name="signup" value="SignUp" class="btn btn-info">

            </form>
           </div>
         </div>



     </div>
</div>
   </body>
 </html>
