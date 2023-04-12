<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Password</title>
</head>
<body>
   <h1>Password Generator</h1> 
   <form action="" method="post">
    First Name: <input type="text" name="fname"><br>
    DOB:        <input type="date" name="dob"><br>
    <input type="submit" name="submit" value="Generate Password">

   </form>
   <?php
    if(isset($_POST["submit"])){
        $fname=$_POST["fname"];
        $dob=$_POST["dob"];
        function generate_password($fname,$DOB){
            $reverse_first_name=strrev(substr($fname,0,3));
            $day=substr($DOB,0,2);
            $random_string=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^7*()_=-+{}[]|"),0,5);
            $capital_position=rand(0,9);

            $password_array=str_split($reverse_first_name.$day.$random_string);
            $password_array[$capital_position] = strtoupper($password_array[$capital_position]);
            $password_array[rand(0, 9)] = '@';
            $password_array[rand(0, 9)] = rand(0, 9);
          
            // Convert the array to a string
            $password = implode('', $password_array);
          
            return $password;
          }
          
          $password = generate_password($fname, $dob);
          echo "Your generated password is: " . $password;
        }
   ?>
</body>
</html>