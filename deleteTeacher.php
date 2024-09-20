<?php
  require_once("DB.php");
  $id=$_GET['id'];
  $q="delete from teachers where id =$id";

  $delete=mysqli_query($con,$q);

  if($delete){
    header("location:teacherList.php");
  }
  else {
    echo "Not deleted";
  }
?>
