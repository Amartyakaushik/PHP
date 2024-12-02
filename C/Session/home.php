<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>

    <h3> This is Home Page </h3>
    <a href="index.php">Login page</a>
    <Form action = "home.php" method="post">
        <br>
        <input type="submit" name="logout" value="Log Out">
    </Form>
</body>
</html>

<?php 
    echo $_SESSION['username'];
    echo "<br>";
    echo $_SESSION['password'];
    echo "<br>";
    if(isset($_POST['logout'])){
        session_destroy();
        header("Location: index.php");
    }
?>