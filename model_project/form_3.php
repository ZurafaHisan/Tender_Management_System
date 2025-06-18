<?php
    include("database.php"); 
    include("form_3.html");
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
            $item_27 = $_POST["item27"];
            $item_28 = $_POST["item28"];
            $item_29 = $_POST["item29"];
            $item_30 = $_POST["item30"];
            $item_31 = $_POST["item31"];
            $item_32 = $_POST["item32"];
            $item_33 = $_POST["item33"];
            $item_34 = $_POST["item34"];
            $item_35 = $_POST["item35"];
            $item_36 = $_POST["item36"];
            $item_37 = $_POST["item37"];
            $item_38 = $_POST["item38"];
            $item_39 = $_POST["item39"];
            $item_40 = $_POST["item40"];
            $item_41 = $_POST["item41"];
            $item_42 = $_POST["item42"];
            $item_43 = $_POST["item43"];
            $item_44 = $_POST["item44"];
            $item_45 = $_POST["item45"];
            $item_46 = $_POST["item46"];
            $item_47 = $_POST["item47"];
            $item_48 = $_POST["item48"];
            $item_49 = $_POST["item49"];
            $item_50 = $_POST["item50"];
            $item_51 = $_POST["item51"];
            /*$item_52 = $_POST["item52"];*/
            


            $total = $_POST["total"];

            $sql = "INSERT INTO `গ্রুপ-গ (শুকনা মসলা ও খাবার)` 
            VALUES('$user_id', $item_1, $item_2, $item_3, $item_4, $item_5, $item_6, $item_7, $item_8, $item_9, $item_10, $item_11, $item_12, $item_13, $item_14, $item_15, $item_16, $item_17, $item_18, $item_19, $item_20, $item_21, $item_22, $item_23, $item_24, $item_25, $item_26, $item_27, $item_28, $item_29, $item_30, $item_31, $item_32, $item_33, $item_34, $item_35, $item_36, $item_37, $item_38, $item_39, $item_40, $item_41, $item_42, $item_43, $item_44, $item_45, $item_46, $item_47, $item_48, $item_49, $item_50, $item_51, 
            $total)"; 

    
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

