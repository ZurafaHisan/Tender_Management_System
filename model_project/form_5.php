

<?php
    include("database.php"); 
    include("form_5.html");
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
            $item_11 = $_POST["item11"];
            $item_12 = $_POST["item12"];
            $item_13 = $_POST["item13"];
            $item_14 = $_POST["item14"];
            $item_15 = $_POST["item15"];
            $item_16 = $_POST["item16"];
            $item_17 = $_POST["item17"];
            $item_18 = $_POST["item18"];
            $item_19 = $_POST["item19"];
            $item_20 = $_POST["item20"];
            $item_21 = $_POST["item21"];
            $item_22 = $_POST["item22"];
            $item_23 = $_POST["item23"];
            $item_24 = $_POST["item24"];
            $item_25 = $_POST["item25"];
            $item_26 = $_POST["item26"];
            $total = $_POST["total"];

            $sql = "INSERT INTO `গ্রুপ-ঙ (ক্লিনিং সামগ্রী)`
            VALUES('$user_id', 
                    $item_1, 
                    $item_2, 
                    $item_3, 
                    $item_4, 
                    $item_5,
                    $item_6, 
                    $item_7, 
                    $item_8, 
                    $item_9, 
                    $item_10,
                    $item_11, 
                    $item_12, 
                    $item_13, 
                    $item_14, 
                    $item_15,
                    $item_16, 
                    $item_17, 
                    $item_18, 
                    $item_19, 
                    $item_20,
                    $item_21, 
                    $item_22, 
                    $item_23, 
                    $item_24, 
                    $item_25,
                    $item_26, 
                    $total
                    )"; 

    
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

