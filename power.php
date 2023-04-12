<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power of Any Number</title>
</head>
<body>
    <form action="" method="post">
    Enter a number: <input type="number" name="num"><br>
    Enter exponentiation: <input type="number" name="exponent"><br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
    $num=$_POST["num"];
    $exponent=$_POST["exponent"];
    $power=pow($num,$exponent);
    echo "$num to the power of  $exponent is:".$power;
}
?>
</body>
</html>