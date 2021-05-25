<?php

$fullname = $username = $password = $confpassword = $email = $phone = $dob = $socialsec = "" ;
$fullnameErr = $usernameErr = $passwordErr = $confpasswordErr = $emailErr = $phoneErr = $dobErr = $socialsecErr = "" ;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /////// fullname ///////////////
    if (empty($_POST["fullname"])) {
        $fullnameErr = "Name is required";
    }
    else {
        $fullname = test_input($_POST["fullname"]);
    }
    /////// username ///////////////
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    }
    else {
        $username = test_input($_POST["username"]);
    }
    /////// password ///////////////
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    }
    else {
        $password = test_input($_POST["password"]);
    }
    /////// confirm password ///////////////
    if (empty($_POST["confpassword"])) {
        $confpasswordErr = "Password is required";
    }
    else if ($_POST["confpassword"] !== $_POST["password"]){
        die('Password and Confirm password should match!');
    }
    else {
        $confpassword = test_input($_POST["confpassword"]);
    }
    /////// email ///////////////
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } 
    else {
        $email = test_input($_POST["email"]);
    }
    ///////// phone /////////////
    if (empty($_POST["phone"])) {
        $phoneErr = "phone is required";
    } 
    else {
        $phone = test_input($_POST["phone"]);
    }
    ///////// date of birth /////////////
    if (empty($_POST["dob"])) {
        $dobErr = "date of birth is required";
    } 
    else {
        $dob = test_input($_POST["dob"]);
    }
    ///////// social number /////////////
    if (empty($_POST["socialsec"])) {
        $socialsecErr = "social security number is required";
    } 
    else {
        $socialsec = test_input($_POST["socialsec"]);
    }
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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
    <div class="center">
        <div class="signup">
            <h1>Sign up</h1>
            <div class="textinputs">
                <form class="textinputsform" method="POST" action="home.php">
                    <label for="fullname">FullName:</label>
                    <input type="text" name="fullname" id="fullname">
                    <span class="error"><?php echo $fullnameErr;?></span><br>
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username">
                    <span class="error"><?php echo $usernameErr;?></span><br>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                    <span class="error"><?php echo $passwordErr;?></span><br>
                    <label for="confpassword">Confirm Password:</label>
                    <input type="password" name="confpassword" id="confpassword">
                    <span class="error"><?php echo $confpasswordErr;?></span><br>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                    <span class="error"><?php echo $emailErr;?></span><br>
                    <label for="phone">Phone:</label>
                    <input type="tel" name="phone" id="phone">
                    <span class="error"><?php echo $phoneErr;?></span><br>
                    <label for="dob">Date Of Birth:</label>
                    <input type="text" name="dob" id="dob">
                    <span class="error"><?php echo $dobErr;?></span><br>
                    <label for="socialsec">Social Security Number:</label>
                    <input type="text" name="socialsec" id="socialsec">
                    <span class="error"><?php echo $socialsecErr;?></span><br>   
                    <button type="submit">Sign Up</button> 
                </form>
            </div>
        </div>
        <div class="signin">
            <h1>Sign in</h1>
            <div class="textinputs2">
                <form class="textinputsform" method="POST" action="safe.php">
                    <label for="logusername">Username:</label>
                    <input type="text" name="logusername" id="logusername"><br>
                    <label for="logpassword">Password:</label>
                    <input type="password" name="logpassword" id="logpassword"><br>   
                    <button type="submit">Sign In</button> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>