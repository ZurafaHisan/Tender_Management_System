
<?php
    include("database.php");
    include("create_post.html");
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

    $post = $_POST["post"];

     

    try{
        $sql = "INSERT INTO `posts`(text) 
        VALUES('$post')";
        mysqli_query($conn, $sql);
    }
    catch(mysqli_sql_exception){
        echo"Could not submit post";
    }

}


?>