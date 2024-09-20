<?php
ob_start();
require_once("DB.php");
 ?>

 <?php
 if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $lname=$_POST['lname'];

   $target="UploadedImages/".basename($_FILES['photo']['name']);

   $photo=$_FILES['photo']['name'];

   $q="insert into teachers values (null, '$name', '$lname', '$photo')";
   mysqli_query($con,$q);

   if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)){

     header("location:teacherList.php");
 }
 else {
   echo "Not Uploaded";
 }
 }
  ?>

<div class="panel panel-success" style="margin-top: 50px">
  <div class="panel panel-heading">
    <h1 class="text-center" style="margin: 0px">Rgister Yourself</h1>
  </div>

  <div class="panel panel-body">
    <form  method="post" enctype="multipart/form-data">
      <div class="from-group">
        <input type="text" name="name" value="" placeholder="Your Name"class="form-control" required> <br>
      </div>
      <div class="from-group">
        <input type="text" name="lname" value="" placeholder="Your Last Name"class="form-control" required> <br>
      </div>
      <div class="from-group">
        <input type="file" name="photo" value=""> <br>
      </div>
      <input type="submit" name="submit" value="Register" class="btn btn-success">

    </form>

  </div>

</div>




<?php
$data=ob_get_contents();
ob_get_clean();
require_once("masterpage.php");
 ?>
