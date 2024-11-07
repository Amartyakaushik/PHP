<?php
    // $str = array('m','i','s','s','i','s','s','i','p','p','i');
    
    // $count1 = array_count_values($str);
    // foreach($count1 as $char => $count){
    //     echo $char . " appears " . $count . " times.". "</br>";
    // }
    
    // for($i = 0; $i < 4; $i++){
    //     static $count = 1;
    //     for($k = 0; $k<$i; $k++){
    //         echo "&nbsp";
    //     }
        
    //     for($j = 0; $j < $i + 1; $j++){
    //         echo $count;
    //         $count += 1;
    //     }
    //     echo '</br>';
        
    // }
    
    // // for($i = 0; $i <11; $i++){
    // //     $key = $str[i];
    // //     $count = 1;
    // //     for($j = 1; $j < 11; $j++){
    // //         if($str[i] == $str[j]){
    // //             $count += 1;
    // //         }
    // //     }
    // //     echo $str[i] .'appears' . $count . ' times';
    // // }

    // setcookie("userName","John Carter",time()+ 86400 * 30, "/");
    // if(isset($_COOKIE["userName"])){
    //     echo "Hello, " . $_COOKIE["userName"] . "<br>";
    // }else{
    //     echo "Cookie is not set";
    // }

    // setcookie("userName","Divyanshu",time()+11, "/");
    // if(isset($_COOKIE["userName"])){
    //     echo "Cookie updated: " . $_COOKIE["userName"] ."<br>";
    // }else{
    //     echo "not set"."<br>";
    // }

    // // setcookie("userName","Divyanshi",time()-10, "/");

    // session_start();
    // $_SESSION['username'] = 'JohnDoe';
    // $_SESSION['role'] = 'Admin';
    // echo isset($_SESSION['username']) ? $_SESSION['username']."<br>":"Session variable 'username' is not set."."<br>";
    // echo "after session_unset() removing all the session variables"."<br>";
    // session_unset(); // remove all the session variables
    // echo isset($_SESSION['username']) ? $_SESSION['username']:"Session variable 'username' is not set."."<br>";

    // <?php
    
// // Define variables and initialize with empty values
// $name = $email = $address = $gender = "";
// $name_err = $email_err = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
//     if (empty($_POST["name"])) {
//         $name_err = "Name is required";
//     } elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
//         $name_err = "Only letters and white space allowed in name";
//     } else {
//         $name = htmlspecialchars($_POST["name"]);
//     }

//     if (empty($_POST["email"])) {
//         $email_err = "Email is required";
//     } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
//         $email_err = "Invalid email format";
//     } else {
//         $email = htmlspecialchars($_POST["email"]);
//     }

//     $address = htmlspecialchars($_POST["address"]);
//     $gender = htmlspecialchars($_POST["gender"]);

//     if (empty($name_err) && empty($email_err)) {
//         $data = "Name: $name, Email: $email, Address: $address, Gender: $gender\n";
//         file_put_contents('user_data.txt', $data, FILE_APPEND);
        
//         echo "User details submitted successfully!";
//     } else {
//         echo "Error: " . $name_err . "<br>";
//         echo "Error: " . $email_err . "<br>";
//     }
// }

// ?>


 <!-- ?> -->


 <?php
// // Define variables and initialize them with empty values
// $name = $email = $address = $gender = "";
// $name_err = $email_err = "";

// // Process form data when the form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
//     if (empty($_POST["name"])) {
//         $name_err = "Name is required";
//     } elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
//         $name_err = "Only letters and white space allowed in name";
//     } else {
//         $name = htmlspecialchars($_POST["n
//         ame"]);
//     }

//     if (empty($_POST["email"])) {
//         $email_err = "Email is required";
//     } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
//         $email_err = "Invalid email format";
//     } else {
//         $email = htmlspecialchars($_POST["email"]);
//     }

//     $address = htmlspecialchars($_POST["address"]);
//     $gender = htmlspecialchars($_POST["gender"]);

//     // Check for any errors
//     if (empty($name_err) && empty($email_err)) {
//         $data = "Name: $name, Email: $email, Address: $address, Gender: $gender\n";
//         file_put_contents('user_data.txt', $data, FILE_APPEND);
        
//         echo "<p style='color: green;'>User details submitted successfully!</p>";
//     }
// }
?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details Form</title>
</head>
<body>
    <h2>User Details Form</h2>
    <form action="index.php" method="POST">
        <label for="name">Name (required):</label><br>
        <input type="text" id="name" name="name" required><br>
        <span style="color: red;"><?php echo $name_err; ?></span><br>

        <label for="email">Email (required):</label><br>
        <input type="email" id="email" name="email" required><br>
        <span style="color: red;"><?php echo $email_err; ?></span><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br><br>

        <label for="gender">Gender:</label><br>
        <select name="gender" id="gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html> -->

<?php
$servername = "localhost";
$username = "root";
$password = "";

// Establish the connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed". mysqli_connect_error());
}

// create the database
$databaseName = "Amartya";
$sql = "CREATE DATABASE $databaseName";
if(mysqli_query($conn, $sql)){
    echo "Database '$databaseName' created successfully "; 
}else{
    echo "Error creating database: " . mysqli_error($conn);
}
// close the connection
mysqli_close($conn);


?>

<!-- sql queries
 create
 insert
 delete
 drop  -> used to drop the existing database 
 truncate  -> used to delete all data (row and columns) from the table accept the table itself  
 orderby   -> used to extract data in ascending or descending order 
 groupby 
 alter*
 like Operator -> used to retrieve data with particular pattern like (address containg 'aa' in between or starts/end with some particular char)
 AND/ OR operator  -> done
 aggregate function -->