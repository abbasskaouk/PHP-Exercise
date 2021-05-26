<?php

$salary = $duration = $taxfree = $final_salary = $abbass = $tax_number = $social_number = $month = $year = "" ;
$tax_amount ; $social_security ;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $salary = $_POST["salary"];
    $taxfree = $_POST["taxfree"];
}

if(isset($_POST['duration'])){
	$duration= $_POST ['duration'];
} else {
	$abbass = "abbass";
}

if($duration == "monthly"){
    $month = $salary ;
    $salary = $salary * 12 ;
    $year = $month * 12 ;
}
if($duration == "yearly"){
    $year = $salary ;
    $month = $year / 12 ;
}




if ($salary < 10000){
    $tax_amount = 0 ;
    $social_security = 0;
}
elseif ($salary >= 10000 && $salary < 25000){
    $tax_amount = 11 ;
    $social_security = 4;
} 
elseif ($salary >= 25000 && $salary < 50000){
    $tax_amount = 30 ;
    $social_security = 4;
}
else {
    $tax_amount = 45 ;
    $social_security = 4;
}






if ($duration == "yearly"){
    if($salary < 10000){
        $final_salary = $salary ;
        $final_salary = $final_salary + $taxfree;
    }
    elseif($salary >= 10000 && $salary < 25000){
        $tax_number = ($tax_amount / 100) * $salary ;
        $social_number = ($social_security / 100 ) * $salary ;
        $final_salary = $salary - $tax_number - $social_number + $taxfree;
    }
    elseif($salary >= 25000 && $salary < 50000){
        $tax_number = ($tax_amount / 100) * $salary ;
        $social_number = ($social_security / 100 ) * $salary ;
        $final_salary = $salary - $tax_number - $social_number + $taxfree;
    }
    else {
        $tax_number = ($tax_amount / 100) * $salary ;
        $social_number = ($social_security / 100 ) * $salary ;
        $final_salary = $salary - $tax_number - $social_number + $taxfree;
    }
}
elseif ($duration == "monthly"){
    if($salary < 10000){
        $final_salary = $salary ;
        $final_salary = $final_salary + $taxfree;
    }
    elseif($salary >= 10000 && $salary < 25000){
        $tax_number = ($tax_amount / 100) * $salary ;
        $social_number = ($social_security / 100 ) * $salary ;
        $final_salary = $salary - $tax_number - $social_number + $taxfree;
    }
    elseif($salary >= 25000 && $salary < 50000){
        $tax_number = ($tax_amount / 100) * $salary ;
        $social_number = ($social_security / 100 ) * $salary ;
        $final_salary = $salary - $tax_number - $social_number + $taxfree;
    }
    else {
        $tax_number = ($tax_amount / 100) * $salary ;
        $social_number = ($social_security / 100 ) * $salary ;
        $final_salary = $salary - $tax_number - $social_number + $taxfree;
    }
}

$total_salary = $salary ;

/*echo "duration is : " . $duration . "<br>";
echo "tax free is : " . $taxfree . "<br>";
echo "total salary is : " . $total_salary . "<br>";
echo "tax amount is : " .$tax_amount . "<br>";
echo "social security tax is : " .$social_security . "<br>";
echo "final salary is : " . $final_salary . "<br>";*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="calculator">
        <h1>Salary Calculator</h1>
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <fieldset>
                    <legend>Salary information: </legend>
                    <label for="salary">Please enter your salary : </label>
                    <input type="number" id="salary" name="salary"><span>$</span><br><br>
                    <input type="radio" id="monthly" name="duration" value="monthly">
                    <label for="monthly">Monthly</label>
                    <input type="radio" id="yearly" name="duration" value="yearly">
                    <label for="yearly">Yearly</label><br><br>
                    <label for="taxfree">Tax Free Allowance : </label>
                    <input type="number" id="taxfree" name="taxfree"><span>$</span><br><br>
                    <input type="submit" name="submit" value="Submit">
                </fieldset>
            </form>
        </div>
    </div>

    <div class="results">
        <h1>Results</h1>
        <div>
            <table id="t01">
                <tr>
                    <th></th>
                    <th>Monthly</th>
                    <th>Yearly</th> 
                </tr>
                <tr>
                    <td>Total Salary</td>
                    <td><?php echo $month;?></td>
                    <td><?php echo $year;?></td>
                </tr>
                <tr>
                    <td>Tax Amount</td>
                    <td><?php echo $tax_number;?></td>
                    <td><?php echo $tax_number;?></td>
                </tr>
                <tr>
                    <td>Social Security Fee</td>
                    <td><?php echo $social_number;?></td>
                    <td><?php echo $social_number;?></td>
                </tr>
                <tr>
                    <td>Salary After Tax</td>
                    <td><?php echo $final_salary;?></td>
                    <td><?php echo $final_salary;?></td>
                </tr>
              </table>
        </div>
    </div>
</body>
</html>