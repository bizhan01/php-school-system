<?php ob_start();
require_once("DB.php");
?>

<?php
$id = $_GET['id'];
$q="select * from teachers where id =$id";
$select=mysqli_query($con,$q);

foreach ($select as $show){?>

<br></br>
<div class="parnel panel-success" >
  <div class="panel panel-heading">
    <h1 class="text-center" style="margin:0px; font-family: times new roman">Edit teacher's Information</h1>

  </div>
  <div class="panel panel-body">

    <form method="post">
      <div class="col-lg-8">
        <div class="form-group">
           <div class="col-lg-12">
            <label for=""> Name</label>
            <input type="text" name="name" value="<?php echo $show['name']?>" class="form-control" required>
          </div>

        <div class="col-lg-12">
          <label for="">Last Name</label>
          <input type="text" name="lname" value="<?php echo $show['lname']?>" class="form-control" required>
        </div>

        <div class="col-lg-12">
          <label for="">Photo</label>
          <input type="hidden" name="photo" value="<?php echo $show ["photo"]; ?>">
          <input type="file" name="photow"  class="form-control">
        </div>
        </div>
      </div>
      <div class="col-lg-4">
        <label for="">Photo</label><br>
        <img src="UploadedImages/<?php echo $show ["photo"]; ?>" alt="" height="150px" width="50%"/>
      </div>
    <div class="form-group">
      <div class="col-lg-12">
        <br>
        <input type="submit" name="submit" value="Save" class="btn btn-success">
        <a href="teacherList.php"><button type="button" class="btn btn-info">Back</button></a>
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
     $photo=$_POST["photo"];

     
     $q="UPDATE `teachers` SET `name` = '$name', `lname` = '$lname', `photo` = '$photo' WHERE `teachers`.`id` =$id";
      $insert=mysqli_query($con, $q);
      if($insert){
          echo "Successfully Updated";
      }
      else {
        echo "Not Inserted";
      }
   }
?>
