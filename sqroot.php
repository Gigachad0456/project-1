<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square Root</title>
</head>
<body>
    <form action=""method="post">
        Enter your number: <input type="number"name="num">
        <input type="submit" name="submit">
    </form>
    <?php 
    if(isset($_POST["submit"])){
        $num=$_POST["num"];
        $sqroot=sqrt($num);

        echo "Your square root of $num is:".$sqroot;
    }
    ?>
</body>
</html>