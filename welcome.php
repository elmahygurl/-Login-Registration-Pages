<?php

$name = $_GET["name"]; //getting user's name from query parameter
Echo "<html>";
Echo
"<title>Welcome!</title>";
//ECHO "<head><link rel="stylesheet" href="stylezz.css"></head>"
ECHO "<body ><h1 ><center>Welcome, " . $name . "!</center></h1></body>";
echo "<style>h1{
    position: absolute;
    top: 40px;
    right: 300px;
    font-size: 5vw;
    color: white;
}
body{
    background-image: url(welcome.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    
}</style>"
?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome page</title>
    <link rel="stylesheet" href="stylezz.css">
</head>
<style>
    body{
        background-image: url(welcome.jpg);
    }
</style>
<body>
    <h1>Welcome </h1>
</body> -->