<!DOCTYPE html>
<html lang="en">
<head>
  <title>ExamScheduling</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<style>
table, th, td {
  border: 2px solid black;
  border-spacing: 1px;
  }
  th, td {
  padding: 5px;
}
th {
  text-align: left;
}
table{
  width: 80%;    
  background-color: white ;
  
}
table {
  border-spacing: 2px;
}
</style>
</head>

<body>

</nav>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
<a class="navbar-brand" href="login.php"> Webster Exam Scheduling</a>
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="index.php">Student Info</a>
</li>
<li class="nav-item">
<a class="nav-link" href="Report.php">Report Card</a>
</li>
<li class="nav-item">
<a class="nav-link" href="exam.php">Exam</a>
</li>
<li class="nav-item">
<a class="nav-link" href="describtion.php">About Us</a>
</li>
<li class="nav-item">
<a class="nav-link" href="Add_Student.html">Add New Student</a>
</li>
</ul>
</nav>
  
</div>

<?php
    
require('connect.php');

$sql = "SELECT * from Student;  ";
$result = $conn->query($sql);
if ($result->num_rows > 0)
 
{
    echo'
    <div class="container">
    <table class="table table-dark table-hover">
    <br><br><br><br>
<h2 style="color:Black"; align="center" class="w3-myfont">Student Info</h2>
<br/>
<th>Student Id</th>
<th>Student Name</th>
<th>Address</th>
<th>Phone Number</th>
<th>Email</th>

</tr>';


// output data of each row

    while($row = $result->fetch_assoc())
 {

echo "<tr>
<td>" . $row["Student_ID"]. "</td>
<td>" . $row["Student_Name"]. "</td>
<td>" . $row["Address"]. "</td>
<td>" . $row["Phone_Number"]. "</td>
<td>" . $row["Email"]. "</td>


</tr>";

    }
 echo "</table>";
} else {
    echo "0 results";
}  
$conn->close();
?>
</body>
</html>