<!DOCTYPE html>
<html lang="en">
<head>
    <title>User form</title>
</head>
<body>
    <form action="Q2.php" method = "post">
        <label for="user">UserName: </label>
        <input type="text" name="userName" id="user">
        <label for="email">Email: </label>
        <input type="email" name="email" id="email">
        <label for="pass">Password: </label>
        <input type="password" name="password" id="pass">

        <button type="submit" name="submit">submit</button>
    </form>
    
</body>
</html>
<?php
    // if($_SERVER('REQUEST_METHOD')== "post"){
    if(isset($_POST['submit'])){
        if(empty($_POST['userName'])){
            echo "Please enter your name <br>";
        }
        $email = $_POST['email'];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email is valid: $email <br>";
        }else{
            echo "Email is not valid <br>";
        }

        if(strlen($_POST['password']) < 9){
            echo "Password is too short <br>";
        }else{
            echo "Password is valid";
        }
    }
?>