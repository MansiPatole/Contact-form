<?php
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername,$username,$password);

if(!$con) {
  die("Connection failed:" . mysqli_connect_error());
}
 echo "Connection Successful!\n\n";

 if(!mysqli_select_db($con,'contactdb')){
   echo "Database not selected";
 }
  else {
    echo "Database connect Successfully!";
  }

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO client (Name,Email,Message) VALUES ('$name','$email','$message')";

if(mysqli_query($con,$sql)){
  echo "Data is inserted Successfully!";
  header("refresh:2, url = index.html");
}
else{
  echo "Data not inserted!". $sql."<br>". mysqli_error($con);
}

mysqli_close($con);
?>
