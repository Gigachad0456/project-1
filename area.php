<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area and Circumference of Rectangle</title>
</head>
<body>
    <form action="" method="post">
        Enter your Length: <input type="number" name="length"><br>
        Enter your Breadth: <input type="number" name="breadth"><br>
        <input type="submit" name="submit">

    </form>
    <?php 
    if(isset($_POST["submit"])){
        $length=$_POST["length"];
        $breadth=$_POST["breadth"];
        $area=$length*$breadth;
        $circumference=$length+$breadth+$length+$breadth;

        echo "Area of rectangle: $length x $breadth=".$area."<br/>";
        echo "Circumference of rectangle: $length+$breadth+$length+$breadth=".$circumference;

    }
    ?>
</body>
</html>