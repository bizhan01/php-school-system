<?php ob_start();
require_once("DB.php");
?>
<?php
if (isset($_POST['submit'])){
  $name=$_POST["name"];
  $lname=$_POST["lname"];
  $gender=$_POST["gender"];
  $degree=$_POST["degree"];
  $faclety=$_POST["faclety"];

  $q="INSERT INTO `students` ( `name`, `lname`,`gender`, `degree`, `faclety`) VALUES ( '$name', '$lname','$gender', '$degree', '$faclety')";
   $insert=mysqli_query($con, $q);
   if($insert){
     header("location:studentList.php");
   }
   else {
     echo "Not Inserted";
   }
}
 ?>
<br>
<div class="parnel panel-info" >
  <div class="panel panel-heading">
    <h1 class="text-center" style="margin:0px; font-family: times new roman">Register New Student</h1>
  </div>
  <div class="panel panel-body">
    <form method="post">
    <div class="form-group">
      <div class="col-lg-12">
        <label for="">Student Name</label>
        <input type="text" name="name" value="" required="required" class="form-control">
     </div>
    </div>
    <div class="form-group">
     <div class="col-lg-12">
        <label for="">Student Last Name</label>
        <input type="text" name="lname" value="" required="required" class="form-control">
     </div>
    </div>
    <div class="form-group">
      <div class="col-lg-4">
        <label for="">Gender</label>
        <select class="form-control" name="gender" required="required">
          <option value=""></option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
      <div class="col-lg-4">
        <label for="">Degree</label>
        <select class="form-control" name="degree" required="required">
          <option value=""></option>
          <option>Coleage</option>
          <option>Bachelor</option>
          <option>Master</option>
          <option>PhD</option>
        </select>
      </div>
      <div class="col-lg-4">
        <label for="">Faclety</label>
        <select class="form-control" name="faclety" required="required">
          <option value=""></option>
          <option>Computer Secince</option>
          <option>Law</option>
          <option>Acenomic</option>
          <option>English</option>
          <option>Politacle Secinse</option>
          <option>Medical Secinse</option>
          <option>Civil Engeering</option>
          <option>IT</option>
          <option>Web Engeenaring</option>
        </select>
      </div>
    </div>
    <div class="form-group">
       <div class="col-lg-12">
         <br>
          <input type="submit" name="submit" value="Register" class="btn btn-success">
       </div>
    </div>
  </form>
  </div>
</div>
<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
 ?>
