<?php
$servername = "localhost";
$username = "root";
//$password = "";
$dbname = "registration";
$conn = new mysqli($servername, $username, "", $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["newName"];
$email = $_POST["newEmail"];
$password = $_POST["newPass"];
$conf = $_POST["newPass2"];
//$sql = ""; // Initialize $sql variable - so no fatal error when pass and email are wrong

if ($password == $conf) {
  //$hashedPassword = md5($password); // Hash the password using md5()
  $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
}
//$sql = "INSERT INTO user (name,email,password) VALUES ('.$POST["name"].','.$POST["email"].','.$POST["password"].');

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
  header("Location: welcome.php?name=" . urlencode($name)); //function to redirect the user to welcome PHP file 
  exit();
} else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
  echo "\n Sorry " . $name . "! Email Already Exists";
}

$conn->close();
?>