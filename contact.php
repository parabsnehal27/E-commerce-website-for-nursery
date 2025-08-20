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
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into database
// Check if the form has been submitted

  $sql = "INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $name, $email, $message);

  if ($stmt->execute()) {
    //header("Location: success.php");
    echo "Thank you for contacting us!";
  } else {
    echo "Error: " ;
  }

// Close connection
$stmt->close();
$conn->close();
?>