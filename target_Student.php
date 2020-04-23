<?php

$inumber = $_POST['Student_ID'];
$iname = $_POST['Student_Name'];
$ilocation= $_POST['Address'];
$inum= $_POST['Phone_Number'];
$iemail= $_POST['Email'];

require ('connect.php');
 	
	$sql = "insert into Student values('$inumber', '$iname', '$ilocation','$inum', '$iemail');";
	$result = $conn->query($sql);

        header ("Location: index.php");
?>
