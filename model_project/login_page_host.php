<?php
    session_start();
    include("database.php");
    include("login_page_host.html");

?>




<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $result = mysqli_query($conn, "SELECT * FROM `admin` WHERE  email = '$email' AND password = '$password'");
    $row = mysqli_fetch_assoc($result);

    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM `admin` WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            
            $db_pass = $row['password'];
            if($password === $db_pass){
               
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                echo "success";

                header("location: host_profile_personal.php");

                /*header('location: ChatApp/users.php');*/
               
            }else{
                echo "Email or Password is Incorrect!";
            }
        }else{
            echo "$email - This Email not Exist!";
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