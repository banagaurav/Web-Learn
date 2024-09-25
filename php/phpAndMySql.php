<?php
//create database
$sql = "CREATE DATABASE webTech";
if (mysqli_query($conn, $sql)) {
    echo "Database create successfully";
} else {
    echo "Error creating database:" . mysqli_error($conn);
}
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "webTech";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
//Inserting multiple data
$sql = "INSET INTO student(firstname,lastname,email) VALUES ('John','Doe','john@gmail.com');";
$sql = "INSET INTO student(firstname,lastname,email) VALUES ('Marry','Moe','marry@gmail.com');";

if (mysqli_multi_query($conn, $sql)) {
    echo "Records inserted successfully";
} else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
