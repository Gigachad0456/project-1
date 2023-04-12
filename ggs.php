<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySql</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h1>Form</h1>
    <form action="" method="post">
        <label for="name" class="nm">Name:</label><br>
        <input type="text" name="name" class="name" placeholder="Enter Your Name"required><br><br>
         
        <label for="email">Email::</label><br>
        <input type="email" name="email" class="email"placeholder="Enter Your Email"required><br><br>
        
        <label for="pword">Password:</label><br>
        <input type="password" name="pword" class="pword" placeholder="Enter Your Password"required><br><br>
        
        <input type="submit" value="SUBMIT" >
</form>
    <?php
    if(isset($_POST["submit"])){
        $host="localhost";
        $user="root";
        $password="";
        $db="gg";

        $conn= mysqli_connect($host,$user,$password,$db) ;
        if(!$conn){
            die("Database Connection Failed");
        }
        $name=$_POST["name"];
        $email=$_POST["email"];
        $pwd=$_POST["pword"];

        $q1="Insert into gg values(@,'$name', '$email', '$pwd')";
        if(mysqli_query($conn,$q1)){
            echo "Record Inserted";
        }else{
            echo "Failed to insert";
        }
       

    }
    ?>
</body>
</html>