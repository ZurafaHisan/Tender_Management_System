

<?php
    include("database.php"); 
    include("form_2.html");
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
        const warning = document.getElementById("p");
        warning.textContent = "Please fill out every field";
    }

    function confirmation(){
        const warning = document.getElementById("p");
        warning.textContent = "Submitted Succesfully";
    }
</script>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $originalPostCount = count($_POST);
        if(count(array_filter($_POST))!=count($_POST)){
            
            echo"<script>warning();</script>";
        
        }
        else{
            $user_id = filter_input(INPUT_POST, "user_id", FILTER_SANITIZE_SPECIAL_CHARS);
            $item_1 = $_POST["item1"];
            $item_2 = $_POST["item2"];
            $item_3 = $_POST["item3"];
            $item_4 = $_POST["item4"];
            $item_5 = $_POST["item5"];
            $item_6 = $_POST["item6"];
            $item_7 = $_POST["item7"];
            $item_8 = $_POST["item8"];
            $item_9 = $_POST["item9"];
            $item_10 = $_POST["item10"];
            $total = $_POST["total"];

            $sql = "INSERT INTO `গ্রুপ-খ (মাছ, মাংস ও পোল্ট্রি)` 
            VALUES('$user_id', $item_1, $item_2, $item_3, $item_4, $item_5, $item_6, $item_7, $item_8, $item_9, $item_10, $total)"; 

    
            try{
                mysqli_query($conn, $sql);
                echo"<script>confirmation();</script>";
            }
            catch(mysqli_sql_exception){
                echo"<script>warning();</script>";
            }
        

             

            

            

        }

   }


   
    
?>

