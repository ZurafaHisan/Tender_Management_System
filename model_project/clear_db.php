<?php
    include("database.php");

    $s1 = " Delete FROM `গ্রুপ-ক (কাচাবাজার / সাধারণ বাজার)`";
    $r1 = mysqli_query($conn , $s1);

    $s2 = " Delete FROM `গ্রুপ-খ (মাছ, মাংস ও পোল্ট্রি)`";
    $r2 = mysqli_query($conn , $s2);

    $s3 = " Delete FROM `গ্রুপ-গ (শুকনা মসলা ও খাবার)`";
    $r3 = mysqli_query($conn , $s3);

    $s4 = " Delete FROM `গ্রুপ-ঘ (বিশেষ)`";
    $r4 = mysqli_query($conn , $s4);

    $s5 = " Delete FROM `গ্রুপ-ঙ (ক্লিনিং সামগ্রী)`";
    $r5 = mysqli_query($conn , $s5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout Page</title>
  <link rel="stylesheet" href="logout_host.css">
</head>
<body>
  <div class="logout-container">
    <div class="logout-box">
      <!--<h1 class="logout-title">Logout</h1>-->
      <p class="logout-message">Database has been cleared</p>
      <button class="logout-button" onclick="confirmLogout()">View Database</button>
    </div>
  </div>

  <script>
    function confirmLogout() {
      
      window.location.href = "display.php"; 
    }
  </script>
</body>
</html>