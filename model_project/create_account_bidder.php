<?php
    include("database.php");
    include("create_account_bidder.html");
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

<script>
    function warning(){
        const warning = document.getElementById("warning");
        warning.textContent = "This username has been used, please try another one";
    }
    function confirmation(){
        const warning = document.getElementById("warning");
        warning.textContent = "Registered Succesfully";
    }
</script>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

            $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
            /*$hash = password_hash($password, PASSWORD_DEFAULT);*/

            $name = $_POST["name"];
            $email = $_POST["email"];
            $contact = $_POST["contact_number"];
            $address = $_POST["address"];
            $TIN = $_POST["TIN"];
            $company = $_POST["company_name"];

            
            //Verifying the unique username

            $verify_query =  mysqli_query($conn, "Select username from users where username = '$username'");

            if(mysqli_num_rows($verify_query) != 0){
                echo "<script>warning();</script>";
            }
            else{

            $sql = "INSERT INTO `users` ( username, password, name, email, contact_number, address, TIN, company_name) 
            VALUES('$username', '$password', '$name', '$email', '$contact', '$address', '$TIN', '$company')";  

            mysqli_query($conn, $sql);

            echo"<script>confirmation();</script>";

            }
        
}
        
        

    
    ?>