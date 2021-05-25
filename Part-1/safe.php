<?php

$fullname = $username = $password = $confpassword = $email = $phone = $dob = $socialsec = "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $fullname=htmlspecialchars($_POST["fullname"]);
    $username=htmlspecialchars($_POST["username"]);
    $password=htmlspecialchars($_POST["password"]);
    $confword=htmlspecialchars($_POST["confpassword"]);
    $email=htmlspecialchars($_POST["email"]);
    $phone=htmlspecialchars($_POST["phone"]);
    $dob=htmlspecialchars($_POST["phone"]);
    $socialsec=htmlspecialchars($_POST["socialsec"]);
 
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Part-1</title>
</head>
<body>
    <p>Your fullname is : <?php echo $fullname ?></p><br><br>
    <p>Your username is : <?php echo $username ?></p><br><br>
    <p>Your password is : <?php echo $password ?></p><br><br>
    <p>Your email is : <?php echo $email ?></p><br><br>
    <p>Your phone is : <?php echo $phone ?></p><br><br>
    <p>Your date of birth is : <?php echo $dob ?></p><br><br>
    <p>Your social security number is : <?php echo $socialsec ?></p><br><br>
</body>
</html>