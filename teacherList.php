<?php
ob_start();
require_once("DB.php")
 ?>
 <br>
 <div class="col-lg-3">
   <form method="get">
       <div class="input-group">
         <input type="search" name="search" value=""  class="form-control" placeholder="Search Here...">
         <span class="input-group-addon">
           <div class="fa fa-search"></div>
       </div>
      </span>
   </form>
 </div>
 <div class="col-lg-8" style="text-align: right; font-size: 20px">
   <a href="addTeacher.php"><span class="fa fa-plus"> New Record</span></a>
 </div><br></br>

 <div class="panel panel-success">
   <div class="panel panel-heading">
     <h1 class="text-center" style="margin: 0px">Teachers List</h1>
   </div>
   <div class="panel panel-body">
     <table class="table table-bordered table-striped">
       <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Last Name</th>
         <th>Photo</th>
         <th>Edit</th>
         <th>Delete</th>
      <?php
        if(isset($_GET['search'])){
          $searh=$_GET['search'];
          $q="select * from teachers where id like '%$searh%' or name like '%$searh%' or lname like '%$searh%'";
          $s= mysqli_query($con, $q);
          foreach ($s as $show) {?>
           <tr>
            <td> <?php echo $show['id']; ?></td>
            <td> <?php echo $show['name']; ?></td>
            <td> <?php echo $show['lname']; ?></td>
            <td> <img src="upload/<?php echo $show ["photo"]; ?>" width="50px" /></td>

              </tr>
        <?php }} else {?>
       </tr>

       <?php
       $select="select * from teachers";
       $q=mysqli_query($con,$select);
       foreach ($q as $show) {?>
         <tr>
           <td> <?php echo $show['id']; ?></td>
           <td> <?php echo $show['name']; ?></td>
           <td> <?php echo $show['lname']; ?></td>
           <td> <img src="UploadedImages/<?php echo $show ["photo"]; ?>" width="50px" /></td>
           <td><a href="editTeacher.php?id= <?php echo $show ['id'] ?>"> <span class="fa fa-edit" style="color: green"></span> </a> </td>
           <td><a href="deleteTeacher.php?id= <?php echo $show ['id'] ?>" onclick='return confirm("حذف شود؟")'> <span class="fa fa-trash" style="color: red"></span> </a> </td>
         </tr>
       <?php }} ?>
     </table>
   </div>
 </div>

 <?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
?>
