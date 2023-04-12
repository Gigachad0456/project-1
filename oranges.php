<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oranges Farm Calculator</title>
</head>
<body>
    <h1>Orange Farm Calculator</h1>
    <form action="" method="post">
         Number of Spot: <input type="number" name="spot" min="1" max="50">
        <input type="submit" name="submit" >
    </form>
    <?php
    if(isset($_POST["submit"])){
        $spot=$_POST["spot"];
        $total_oranges=0;
        for($i=1;$i<=$spot;$i++){
          $total_oranges+=$i;
        }
        echo "Total oranges for $spot spots: $total_oranges";   
    }
    ?>
</body>
</html>