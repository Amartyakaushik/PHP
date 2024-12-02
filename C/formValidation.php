<?php
    if($_SERVER['REQUEST_METHOD'] == 'post'){
        if(empty($_POST['username'])){
            $userError = "Enter userName";
        }
        if(empty($_POST['password'])){
            $passError = "Enter password";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <Form action="" method = "post" auto_complete="off">
        <input type="text" name="username" id="">
        <!-- <span> <?php // echo $userError; ?> </span> -->
        <span> <?php if(isset($userError)) echo $userError; ?> </span>
        <input type="password" name="password" id="">
        <!-- <span> <?php// echo $passError; ?> </span> -->
        <span> <?php if(isset($passError)) echo $passError; ?> </span>
        <input type="submit" name="submit" id="">
</body>
</html>