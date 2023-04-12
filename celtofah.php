<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converting celcius to fahrenheit</title>
</head>
<body>
    <form action="" method="post">
    Temperature in Celcius: <input type="nummber" name="celcius">  
      <input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
    $celcius=$_POST["celcius"];
    $fahrenheit=($celcius*9/5)+32;

    echo "$celcius of Celcius after converting to Fahrenheit is:".$fahrenheit;
}
?>
</body>
</html>