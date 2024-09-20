<?php ob_start(); ?>

<h1>This is the News page</h1>


  <a href="#"> <span class="fa fa-facebook-square"></span>

<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
?>
