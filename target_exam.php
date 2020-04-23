<?php

$inumber = $_POST['Exam_Number'];
$inum = $_POST['Subject_Name'];
$iname= $_POST['Subject_Number'];



require ('connect.php');
 	
	$sql = "INSERT INTO `Exam` VALUES ('$inumber', '$inum', '$iname');";
	$result = $conn->query($sql);

        header ("Location: exam.php");
?> 