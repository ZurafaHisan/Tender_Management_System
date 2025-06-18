<?php
    session_start();
    include("database.php");
    include("bidder_profile_admin_view.html");
    /*include("all_bidder_admin_view.php");*/

?>

<?php

    $_username = $_SESSION["username"];
   /* $_password = $_SESSION["password"];*/

    
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$_username'");
    
    while($rows=$result->fetch_assoc())
    {
        $name = $rows['name'];
        $email = $rows['email'];
        $contact_number = $rows['contact_number'];
        $address = $rows['address'];
        $TIN = $rows['TIN'];
        $company_name = $rows['company_name'];
        
    }  

    /*echo $_username;
    echo $_password;
    echo $name;
    echo $email;
    echo $contact_number;
    echo $address;
    echo $TIN;
    echo $company_name;*/
    

    ?>

    <script>
    function call(){

        var cn = "<?php echo "$company_name"?>";
        const CN = document.getElementById("company_name");
        CN.textContent = cn;

        var tin = "<?php echo "$TIN"?>";
        const TIN = document.getElementById("TIN");
        TIN.textContent = tin;

        var u = "<?php echo "$_username"?>";
        const U = document.getElementById("username");
        U.textContent = u;

        var a = "<?php echo "$name"?>";
        const p = document.getElementById("name");
        p.textContent = a;

        var em = "<?php echo "$email"?>";
        const EM = document.getElementById("email");
        EM.textContent = em;

        var c = "<?php echo "$contact_number"?>";
        const C = document.getElementById("contact_number");
        C.textContent = c;

        var ad = "<?php echo "$address"?>";
        const AD = document.getElementById("address");
        AD.textContent = ad;


        }
    </script>

    <?php
    
    echo "<script>call();</script>";
   
?>