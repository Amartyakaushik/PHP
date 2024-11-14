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
$databaseName = "Amartya02";
// $sql = "CREATE DATABASE $databaseName";
$sql = "CREATE DATABASE IF NOT EXISTS $databaseName";

if(mysqli_query($conn, $sql)){
    echo "Database '$databaseName' created successfully " . "<br>"; 
}else{
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_select_db($conn, $databaseName);


// create the table 
$sql =  "CREATE TABLE IF NOT EXISTS employees (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50) NOT NULL,
department VARCHAR(50),
salary DECIMAL(10, 2),
age INT )";

if(mysqli_query($conn, $sql)){
    echo "Table 'employee' created successfully "; 
}else{
    echo "Error creating Table: " . mysqli_error($conn);
}


// //// Insert Data
// $sql = "INSERT INTO employees (name, department, salary, age) 
// VALUES ('Alice', 'HR', 3948.23, 28),
// ('Bob', 'IT', 2323.23, 57),
// ('Divyanshu', 'Finance', 76534.23, 45),
// ('Shagun', 'IT', 3234.23, 23),
// ('Pratik', 'Business', 4321.23, 87),
// ('Rahul', 'IT', 5678.23, 21),
// ('Ravi', 'Real state', 8765.23, 12)";

// if(mysqli_query($conn, $sql)){
//     echo "Inserted into 'employees'  successfully "; 
// }else{
//     echo "Error inserting to  Table: " . mysqli_error($conn);
// }

// SELECT data from the table
echo "<h3> SELECT QUERY with WHERE, LIKE, AND, OR<h3>";
$sql = "SELECT * FROM employees WHERE department LIKE 'IT' AND salary > 3000.99";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Department: " . $row['department'] . " - Salary: " . $row['salary']. "<br>";
}

// ORDER BY 
echo "<h3> ORDER BY Salary DESC </h3>";
$sql = "SELECT * FROM employees ORDER BY salary DESC";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo "Department: " . $row['department'] .  "<br>";
}

// GROUP BY
echo "<h3> ORDER BY Salary DESC </h3>";
$sql = "SELECT department, COUNT(*) AS count FROM employees GROUP BY department";;
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo "Department: " . $row['department'] . " - Count: " . $row['count'] . "<br>";
}


// HAVING clause
echo "<h3> HAVING clause </h3>";
$sql = "SELECT department, AVG(salary) AS avg_salary FROM employees GROUP BY
department HAVING avg_salary > 6000";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo "Department: " . $row['department'] . " - Average Salary: " . $row['avg_salary'] . "<br>";
}


// UPDATE DATA
echo "<h3> UPDATE DATA </h3>";
$sql = "UPDATE employees SET salary = 5000 WHERE name = 'Bob'";
$result = mysqli_query($conn, $sql);
// while($row = mysqli_fetch_assoc($result)){
//     echo "Bob's salary updated successfully " . "salary: " . $row['salary'];
// //         // echo "Department: " . $row['department'] . " - Average Salary: " . $row['avg_salary'] . "<br>";
//     }
//    // $result = mysqli_query($conn, $sql)
//    // while($row =  mysqli_fetch_assoc($result)){
 //       // }
        if(mysqli_query($conn, $sql)){ 
            echo "Bob's salary updated successfully " . "salary: " ;
        }else{
            echo "Bob's salary update status: " . mysqli_error($conn);
        }


// DELETE THE DATA
echo "<h3> DELETE THE DATA </h3>";
$sql = "DELETE FROM employees WHERE name = 'Alice'";
if(mysqli_query($conn, $sql)){
    echo "Eve's record deleted successfully" . "<br>";
}

// Trunctate the data
echo "<h3> Trunctate the data </h3>";
mysqli_query($conn, "TRUNCTATE TABLE employees");

// // Drop the table
// echo "<h3> table Dropped</h3>";
// mysqli_query($conn, "DROP TABLE employees");

// SQL FUNCTIONS : AVG, COUNT, SUM, MIN, MAX, LCASE, UCASE
echo "<h3> SQL FUNCTIONS </h3>";
$sql = "SELECT AVG(salary) AS avg_salary, COUNT(*) AS total_employees, SUM(salary) AS total_salary, MIN(salary) AS min_salary, MAX(salary) AS max_salary FROM employees";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo "Average Salary: " . $row['avg_salary'] . "<br>";
echo "Total Employees: " . $row['total_employees'] . "<br>";
echo "Total salary: " . $row['total_salary'] . "<br>";
echo "Min Salary: " . $row['min_salary'] . "<br>";
echo "Max Salary: " . $row['max_salary'] . "<br>";
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