<?php
    include("database.php");
    include("h_public.html");
?>

<?php

    $sql="SELECT text FROM `posts` ORDER BY text DESC LIMIT 1;";
    $r = mysqli_query($conn , $sql);
    

    while($rows=$r->fetch_assoc())
    {
        $result= $rows['text'];


    }    

?>


<script>
    function call(){
        var a = "<?php echo "$result"?>";
        const p = document.getElementById("post_details");
        p.textContent = a;
    }
</script>


<?php
    
    echo "<script>call();</script>";
    

?>
