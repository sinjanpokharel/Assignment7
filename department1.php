s, serif;
 }

</style>
<title> Assignment 3.1 </title>
</head>
<body>

  <div class="container">

<?php
$servername = "localhost";
$username = "root";<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
  table, th, td
   {
 
  border: border-collapse;
  width: 50%;
}

 th, td
{
 padding:15px;
text-align:left;
border-bottom: 1px solid #ddd;
font-family: "Times New Roman", Times, serif;

 }
 p
 {
  font-family: "Times New Roman", Time
$password = "";
$dbname = "company";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT dname from department";


$result = $conn->query($sql);

if ($result && $result->num_rows > 0) 
{
	echo '<table table-hover>';
	echo '<tr>
	<th>Departments</th>
    </tr>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo '<tr>';
    	echo '<td>'. $row["dname"]. '</td>';
      echo'</tr>';

    }
     echo '</table><br/>';

   
} else {
    echo "0 results";
}

echo "<form action = 'a32.php'> <p>
    Add a new Department: <input type='text'> 
    <input type ='submit' value ='Submit'>
    </form></p>" ;

$conn->close();
?>
</div>
</body>
</html>