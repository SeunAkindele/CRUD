<?php include("include/header.php"); ?>
<?php
	$session->logout();
	redirect("index.php");
?>