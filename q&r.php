<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotient and Remainder</title>
</head>
<body>
    <form action="" method="post">
    enter  a dividend: <input type="number" name="dividend"><br>
    enter a divisor:   <input type="number" name="divisor"><br>
    <input type="submit" name="submit">

    </form>
    <?php 
    if(isset($_POST["submit"]))
    {
        $dividend=$_POST["dividend"];
        $divisor=$_POST["divisor"];

        $quotient=(int)($dividend/$divisor);
        $remainder=$dividend%$divisor;

        echo " quotient is: ".$quotient."<br/>";
        echo " remainder is: ".$remainder;
    }
    ?>
</body>
</html>