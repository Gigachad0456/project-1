<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        class-1: <input type="number" name="class1" required><br>
        class-2: <input type="number" name="class2" required><br>
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"])){
        $class1=$_POST["class1"];
        $class2=$_POST["class2"];
        $gcd=gcd($class1,$class2);
        $group1=$class1/$gcd;
        $group2=$class2/$gcd;

        echo "Number of students in each group for class1: $group1 <br>";
        echo "Number of students in each group for class2: $group2 <br>";

    }
    function gcd($a,$b){
        while($b!=0){
            $t=$b;
            $b=$a%$b;
            $a=$t;
        }
        return $a;
    }
    ?>
</body>
</html>