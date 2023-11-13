<?php
$servername = "localhost";
$username = "root";
//$password = "";
$dbname = "registration";

$conn = new mysqli($servername, $username, "", $dbname); //creating connection
if ($conn->connect_error) { //checking connection
    die("Connection failed: " . $conn->connect_error);
}
$email = $_POST["emailEntered"];
$password = $_POST["passEntered"];

$query = "SELECT * from user where email='$email' AND password='$password'";
$result =$conn->query($query); //mysqli_query($conn, $query); 
//for sql injection
// $stmt = $conn->prepare("SELECT * from user where email=? AND password=?");
// $stmt->bind_param("ss", $email, $password);
// $stmt->execute();
// $result = $stmt->get_result();

// if ($result === false) {
//     echo "Error: " . $stmt->error

if ($result === false) {
    echo "Error: " . $query . "<br>" . $conn->error;
} elseif (mysqli_num_rows($result) > 0) {  //if it exists  //$result->num_rows
    $row = $result->fetch_assoc(); //to retrieve the row as an associative array
    $name = $row['name']; //to hold the name
    header("Location: welcome.php?name=" . urlencode($name)); //to redirect to welcome page with the retrieved name
    //echo "\n Sorry ".$name ."! Email Already Exists";
}else{
    echo "<script>alert('Incorrect email or password'); window.location.href = 'index.html';</script>";
}

$conn->close();
?>