<?php
    session_start();
    include("database.php");
    include("login_page_bidder.html");
    /*if(isset($_SESSION['username'])){
        header("location: e.php");
      }*/

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
    
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
    $row = mysqli_fetch_assoc($result);

    if(!empty($username) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '{$username}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            
            $db_pass = $row['password'];
            if($password === $db_pass){
               
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                echo "success";

                header("location: e.php");

                /*header('location: ChatApp/users.php');*/
               
            }else{
                echo "Username or Password is Incorrect!";
            }
        }else{
            echo "$username - This username not Exist!";
        }
    }else{
        echo "All input fields are required!";
    }




   /* if(is_array($row) && !empty($row)){
        $_SESSION['valid'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['contact_number'] = $row['contact_number'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['TIN'] = $row['TIN'];
        $_SESSION['company_name'] = $row['company_name'];

        
    }
    else{
        echo "Wrong credentials!";
    }*/

    /*if(isset($_SESSION['valid'])){
        header("Location: home.php");
    }*/

}
?>