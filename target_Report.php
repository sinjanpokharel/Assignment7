<?php

$inumber = $_POST['Report_Number'];
$inum = $_POST['Student_ID'];
$iname= $_POST['Subject'];
$inume= $_POST['Score'];


require ('connect.php');
 	
	$sql = "INSERT INTO `Report Card` VALUES ('$inumber', '$inum', '$iname','$inume');";
	$result = $conn->query($sql);

        header ("Location: Report.php");
?> 