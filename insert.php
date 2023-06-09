<?php session_start(); ?>
<?php
// Retrieve form data
$i1 = $_POST['i1'];
$l1 = $_POST['l1'];
$w1 = $_POST['w1'];
$client = $_SESSION['name'];
$clientmail = $_SESSION['email'];

// Insert data into the database (use your own database connection code here)
// Example:
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'niwahana';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

$sql = "INSERT INTO details2 (Name, email, Quantity1, Length1, Width1) VALUES ('$client', '$clientmail', '$i1', '$l1', '$w1')";

if ($conn->query($sql) === true) {
  echo 'Data inserted successfully';
} else {
  echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();
?>
