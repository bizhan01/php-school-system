<?php
  require_once("DB.php");
  $id=$_GET['id'];
  $q="delete from students where id =$id";

  $delete=mysqli_query($con,$q);

  if($delete){
    header("location:studentList.php");
  }
  else {
    echo "Not deleted";
  }
?>
