  
<?php
echo " <style>

* {font-family: arial, sans-serif;}


.delete-btn {
  background-color: #f44336;
    color: white;
    padding: 7px;
    border: none;
    border-radius: 8px;
    width: 80px;
    margin:10px;
}
.delete-btn a {
  text-decoration: none;
  color:white;
  font-weight:bold;
}
.delete-btn:hover {
  cursor: pointer;
  opacity: 0.9;
} 
table {width: 900px; margin: 10px;}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding:4px;
}
</style>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smsexpress";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }


 if(isset($_POST['submit'])) {

  $name = $_POST['name'];
	$email = $_POST['email'];
  $gender = $_POST['radio'];
  $agreement = $_POST['checkbox'];
  foreach ($_POST['country'] as $country);
  foreach ($_POST['city'] as $city);

$sql = "INSERT INTO users (name, country, city, gender, agreement, email)
VALUES ('$name', '$country', '$city', '$gender', '$agreement', '$email')";



if ($conn->query($sql) === TRUE) {
  echo "Successful";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 }
$sqls = "SELECT * FROM users";
$result = $conn->query($sqls);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th><th>Country</th><th>City</th><th>Gender</th><th>Agreement</th><th>Email</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["country"]."</td><td> ".$row["city"]."</td><td> ".$row["gender"]."</td><td> ".$row["agreement"]."</td><td> ".$row["email"]."</td></tr>";
  }
  echo "</table>";
  echo "<br>";
  echo "<button class='delete-btn'><a href='delete.php'>Delete</a></button> ";
} else {
  echo "0 results";
}

// STEP-4 :: REDIRECT YOUR PAGE. 
	header("view_data.php");

$conn->close();
 
?>
