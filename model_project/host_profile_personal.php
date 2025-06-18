<?php

session_start();
include("database.php"); 
include("host_profile_personal.html");



?>

<?php

    $email = $_SESSION["email"];
    $password = $_SESSION["password"];

    
    $result = mysqli_query($conn, "SELECT * FROM `admin` WHERE email = '$email'");
    
    while($rows=$result->fetch_assoc())
    {
        $first_name = $rows['first name'];
        $last_name = $rows['last name'];
        $phone_number = $rows['phone number'];
        
    } 

    
    /*echo $first_name;
    echo $last_name;
    echo $phone_number;
    echo $email;
    echo $password;*/


    ?>

    <script>
    function call(){
        var a = "<?php echo "$first_name"?> ";
        const p = document.getElementById("first_n");
        p.textContent = a;

        var b = "<?php echo "$last_name"?>";
        const ln = document.getElementById("last_n");
        ln.textContent = b;

        var c = "<?php echo "$email"?>";
        const e = document.getElementById("email");
        e.textContent = c;

        var d = "<?php echo "$phone_number"?>";
        const ph = document.getElementById("phone_n");
        ph.textContent = d;
        
        }
    </script>

    <?php
    
    echo "<script>call();</script>";
  

?>