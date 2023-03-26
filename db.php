<?php

// Retrieve the JSON data from the request
$data1 = json_decode(file_get_contents("php://input"));
$data2 = json_decode(file_get_contents("php://input"));

// Get the value of the JavaScript variable from the JSON data
$sqft = $data1->sqft;
$cost = $data2->cost;

// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "niwahana";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert the value of the JavaScript variable into the database
$sql = "INSERT INTO details (sqft, cost) VALUES ('$sqft', '$cost')";

if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
