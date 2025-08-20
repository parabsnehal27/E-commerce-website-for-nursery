<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$uname = $_POST['username'];
$pass = $_POST['password'];

$sel = "SELECT * FROM singin WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sel);
$stmt->bind_param("ss", $uname, $pass);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $uname;
    header("location:index.html");
    //echo "login successful";
} else {
    echo "Invalid username or password.";
}

$stmt->close();
$conn->close();
?>