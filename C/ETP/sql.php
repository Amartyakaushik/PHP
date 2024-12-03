<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_registration";

$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "connection success <br>";
}

// // Create the "events" table if it doesn't exist

$dbname = "events";
// $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

//     if(mysqli_query($conn, $sql)){
//         echo "Database created successfully <br>";
//     }else{
//         echo "Error creating Database: " . mysqli_error($conn) . "<br>";
//     }

    
    mysqli_select_db($conn, $dbname);
// $sql = "CREATE TABLE IF NOT EXISTS events (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(255) NOT NULL
// )";

// if(mysqli_query($conn, $sql)){
//     echo "Table created successfully";
// }else{
//     echo "Error creating table: " . mysqli_error($conn);
// }

// $sql = "INSERT INTO events (id, name) VALUES (1, 'GoogleEvent'), (2, 'IntelEvent comp'), (3, 'eve')";
// if(mysqli_query($conn, $sql)){
//     echo " inserted successfully";
// }else{
//     echo "Error inserting data: " . mysqli_error($conn);
// }

 ?>
