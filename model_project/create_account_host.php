<?php
    include("database.php"); 
    include("create_account_host.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $password = $_POST["password"];
    

    $sql = "INSERT INTO `admin` 
    VALUES('$email', '$password', '$first_name', '$last_name',  '$phone_number')"; 


    try{
        mysqli_query($conn, $sql);
        header("location: h_admin.php");
        
    }
    catch(mysqli_sql_exception){
        echo "Try again";
    } 

    

}

?>