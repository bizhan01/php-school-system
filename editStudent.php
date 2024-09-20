<?php ob_start();
require_once("DB.php");
?>

<?php
$id = $_GET['id'];
$q="select * from students where id =$id";
$select=mysqli_query($con,$q);
foreach ($select as $show){?>

<br></br>
<div class="parnel panel-primary" >
  <div class="panel panel-heading">
    <h1 class="text-center" style="margin:0px; font-family: times new roman">Edit Student's Information</h1>

  </div>
  <div class="panel panel-body">

    <form method="post">
    <div class="form-group">
       <div class="col-lg-12">
        <label for="">Student Name</label>
        <input type="text" name="name" value="<?php echo $show['name']?>" class="form-control">
      </div>
    </div>
    <div class="form-group">
    <div class="col-lg-12">
      <label for="">Student Last Name</label>
      <input type="text" name="lname" value="<?php echo $show['lname']?>" class="form-control">
    </div>
    </div>

    <div class="form-group">
        <div class="col-lg-4">
          <label for="">Gender</label>
            <select class="form-control"  name="gender">
              <option value="<?php echo $show['gender']?>"><?php echo $show['gender']?></option>
              <option>Male</option>
              <option>Female</option>
            </select>
        </div>

        <div class="col-lg-4">
          <label for="">Degree</label>
            <select class="form-control" name="degree">
              <option value="<?php echo $show['degree']?>"><?php echo $show['degree']?></option>
              <option>Coleage</option>
              <option>Bachelor</option>
              <option>Master</option>
              <option>PhD</option>
            </select>
        </div>

      <div class="col-lg-4">
        <label for="">Faclety</label>
        <select class="form-control" name="fielde">
          <option value="<?php echo $show['fielde']?>"><?php echo $show['fielde']?></option>
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
        <input type="submit" name="submit" value="Save" class="btn btn-success">
        <a href="studentList.php"><button type="button" class="btn btn-info">Back</button></a>
      </div>
    </div>
    </form>
  </div>
</div>
<?php } ?>



<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
 ?>


 <?php
   if (isset($_POST['submit'])){
     $name=$_POST["name"];
     $lname=$_POST["lname"];
     $gender=$_POST["gender"];
     $degree=$_POST["degree"];
     $fielde=$_POST["fielde"];
     $q="UPDATE `students` SET `name` = '$name', `lname` = '$lname', `gender` = '$gender', `degree` = '$degree', `fielde` = '$fielde' WHERE `students`.`id` =$id";
      $insert=mysqli_query($con, $q);
      if($insert){
          echo "Successfully Updated";
      }
      else {
        echo "Not Inserted";
      }
   }
?>
