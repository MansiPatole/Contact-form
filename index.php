<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = "contactdb";

$conn = new mysqli("localhost",$username,$password,$conn);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


if(isset($_POST['submit'])){
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO visitor-table (id, Name, Email Id,Message)
VALUES ('1', '$name', '$visitor_email','$message')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();



?>
