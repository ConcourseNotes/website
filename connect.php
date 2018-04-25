<?php
$connection = mysqli_connect('localhost', 'root', 'b-E9GQ4z_8-xK7wJ');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'ConcourseNotes');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
} 

$servername = "localhost";
$username = "root";
$password = "b-E9GQ4z_8-xK7wJ";
$dbName = "ConcourseNotes";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>