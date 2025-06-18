<?php
    include("database.php");
    include("host_profile_public.html");


    $sql="SELECT * FROM `admin`;";
    $r = mysqli_query($conn , $sql);
    

    while($rows=$r->fetch_assoc())
    {
        $email = $rows["email"];
        $first_name = $rows['first name'];
        $last_name = $rows['last name'];
        $phone_number = $rows['phone number'];
    } 

?>

<script>
    function call(){
        var a = "<?php echo "$first_name"?> ";
        var b = "<?php echo "$last_name"?>";
        const p = document.getElementById("first_n");
        p.textContent = a + " " + b;


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