<?php
// Database connection details
$servername = "localhost";
$uname = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $uname, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$username = $_POST['username'];
$password = $_POST['password'];

// Insert data into database
// Check if the form has been submitted

  $sql = "INSERT INTO singin (email, phoneno, username, password) VALUES (?, ?, ?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("siss", $email, $phoneno, $username, $password);

  if ($stmt->execute()) {
    //header("Location: success.php");
    echo "sign up successful";
  } else {
    echo "Error: " ;
  }

// Close connection
$stmt->close();
$conn->close();
?>