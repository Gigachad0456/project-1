<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year</title>
</head>
<body>
    <form action="" method="post">
    Enter your year: <input type="number" name="year">
    <input type="submit"name="submit">
    </form>
    <?php 
    if(isset($_POST["submit"])){
        $year=$_POST["year"];
        if($year%400==0){
            echo "$year is a leap year";
        }elseif($year%100==0){
            echo "$year is not leap year";
        }
        elseif($year%4==0){
            echo "$year is a leap year";

        }else {
            echo "$year is not a leap year";
        }
    }
    ?>
</body>
</html>