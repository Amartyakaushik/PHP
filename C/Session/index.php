<?php
    session_start();    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
</head>
<body>
    <h2> this is login Page</h2>
    <a href="home.php">Home Page</a>
    <Form action="index.php" method = "post">
        <input type="text" name="username" id="">
        <input type="password" name="password" id="">
        <input type="submit" name="login">
    
</body>
</html>

<?php
    if(isset($_POST['login'])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];

            header("Location: home.php");
        }else{
            echo "Fill both fields";
        }
        
    }
?>