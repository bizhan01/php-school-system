<?php ob_start(); ?>

<h1>This is the Home page</h1>




<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
?>
