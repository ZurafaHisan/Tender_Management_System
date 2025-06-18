<?php

    
    include("database.php"); 

    $sql = " SELECT * FROM `users`";
    $result = mysqli_query($conn , $sql);
    mysqli_close($conn);
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Bidders</title>
    <link rel="stylesheet" href="all_bidder.css">
</head>
<body>
    <header>
        <nav>
            <a href="h_private_admin.php" class="nav-button">Home</a>
            <a href="#" class="nav-button">Back</a>
        </nav>
        <h1>Registered Bidders</h1>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>Bidder ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Address</th>
                    <th>Company Name</th>
                    <th>TIN</th>
                </tr>

            </thead>
            <tbody>
            <?php 
                $username;
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
                ?>
                <tr>
                <td><?php echo $rows['username'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['contact_number'];?></td>
                <td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['company_name'];?></td>
                <td><?php echo $rows['TIN'];?></td>
                 
                </tr>

                <?php
                    }
                ?>

                <!-- Add more bidders as needed -->
            </tbody>
        </table>
    </main>
</body>
</html>
