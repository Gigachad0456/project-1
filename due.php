<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amount of Due</title>
</head>
<body>
   <h1> Weekend Outing Expenses Calculator</h1>
    <form action="" method="post">
    Mister Sam: <input type="number" name="sam"><br>
    Miss Linda: <input type="number" name="linda"><br>
    Mister James: <input type="number" name="james"><br>
    <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"])){
        $sam=$_POST["sam"];
        $linda=$_POST["linda"];
        $james=$_POST["james"];
        $total_expense=$sam + $linda + $james+ 1200 + 250 + 600 + 1800;
        
        $amount_due=$total_expense/3;
        $sam_due=number_format($amount_due-$sam,0);
        $linda_due=number_format($amount_due-$linda,0);
        $james_due= number_format($amount_due-$james,0);

        echo "total expense: Rs. $total_expense <br>";
        echo "amount due on mister sam: Rs. $sam_due <br>";
        echo "amount due on miss linda: Rs. $linda_due <br>";
        echo "amount due on mister james: Rs. $james_due <br>";

    }
    ?>
</body>
</html>