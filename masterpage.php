<?php
session_start();
if(!$_SESSION['check'])
{
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Project</title>
    <link rel="shortcat icon" type="image/x-icon" href="image/logo.png">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header class="col-lg-12">
       <center><h1>My PHP Project</h1></center>
    </header>
    <nav class="col-lg-12">
      <ul>
        <a href="index.php"><li><span class="fa fa-home"></span> Home</li></a>
        <a href="news.php"><li><span class="fa fa-globe"></span> News</li></a>
        <a href="events.php"><li><span class="fa fa-rebel"></span> Event</li></a>
        <a href="history.php"><li><span class="fa fa-info-circle"></span> History</li></a>
        <a href="contact.php"><li><span class="fa fa-book"></span> Contact</li></a>
        <a href="logout.php"><li><span class="fa fa-power-off"></span> Logout</li></a>
      </ul>
    </nav>
    <aside class="col-lg-2">
        <h2>New Articles</h2>
       <a href="addTeacher.php"><h6><span class="fa fa-plus"></span> Add Teacher</h6></a>
       <a href="teacherList.php"><h6><span class="fa fa-list"></span> Teachers List</h6></a>
       <a href="addStudent.php"><h6><span class="fa fa-plus"></span> Add Student</h6></a>
       <a href="studentList.php"><h6><span class="fa fa-list"></span> Students List</h6></a>
       <a href="#"><h6><span class="fa fa-line-chart"></span> Revenue</h6></a>
       <a href="#"><h6><span class="fa fa-money"></span> Expense</h6></a>
       <a href="#"><h6><span class="fa fa-btc"></span> Balance</h6></a>
    </aside>

    <section class="col-lg-10">
      <?php
      if(isset($data)){
        echo $data;
      }
      else {

      }
       ?>
    </section>

    <footer class="col-lg-12">
        <div class="col-lg-4">
          <center>
            <h3>NEWS</h3>
            <p>Afghanistan Peace</p>
            <p>Afghanistan Peace</p>
            <p>Afghanistan Peace</p>
            <p>Afghanistan Peace</p>
            <p>Afghanistan Peace</p>
          </center>
        </div>
        <div class="col-lg-4">
          <center>
            <h3>NEWS</h3>
            <p>Afghanistan Peace</p>
            <p>Afghanistan Peace</p>
            <p>Afghanistan Peace</p>
            <p>Afghanistan Peace</p>
            <p>Afghanistan Peace</p>
          </center>
        </div>
        <div class="col-lg-4">
          <center>
            <h3>NEWS</h3>
            <p>Afghanistan Peace</p>
            <p>Afghanistan Peace</p>
            <p>Afghanistan Peace</p>
            <p>Afghanistan Peace</p>
            <p>Afghanistan Peace</p>
          </center>
        </div>
    </footer>

  </body>
</html>
