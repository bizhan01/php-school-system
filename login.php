<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stylef.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>

    <?php
      require_once("DB.php");
      if (isset($_POST['login'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];

            $q="select * from users where email='$email' AND pass='$pass'";
          $result=mysqli_query($con,$q);
          if(mysqli_num_rows($result)>0){
            session_start();
            $_SESSION['check']=$email;
            header("location:index.php");
          }
          else {
             header("location.login.php?login=invalid");
          }
      }
     ?>
 <div class="col-lg-4"></div>
  <div class="col-md-4" style="margin-top: 100px">
    <div class="panel panel-info">
     <div class="panel panel-heading">
       <center><h3>Please Login Here</h3></center>
     </div>
     <div class="panel panel-body">
         <form class="form"  method="post">
           <div class="form-group">
             <label for="">User Name</label>
             <input type="email" name="email" value="" class="form-control">
           </div>
           <div class="form-group">
             <label for="">Password</label>
             <input type="password" name="pass" value="" class="form-control">
           </div>
           <?php
            if(isset($_POST['login'])){?>
             <div class="alert alert-danger">
               <a href="#" class="close" data-dismiss="alert" arira-lable="alart" >&times;</a>
               <p>Incerrect Username or Password!</p>
             </div>
           <?php } ?>
           <input type="submit" name="login" value="LogIn" class="btn btn-success"> <br> </br>
           <a href="#" class="text-center">Forget Your Password?</a> <br> </br>
            <h5>Don't You Have an Account?</h5>
            <a href="register.php" class="btn btn-info">SignUp</a>
         </form>
        </div>
      </div>
    </div>

  </body>
</html>
