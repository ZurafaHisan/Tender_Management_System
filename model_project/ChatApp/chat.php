<?php 
  session_start();
  include_once "../database.php";
  if(!isset($_SESSION['username'])){
    header("location: ../login_page_bidder.php");
  }
?>
<?php include_once "../header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
         /* $username = mysqli_real_escape_string($conn, $_GET['username']);*/
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = {$_SESSION['username']}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        
        <div class="details">
          <span><?php echo $row['name']?></span>
          
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $username; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="chat.js"></script>

</body>
</html>
