<?php 
  session_start();
  include ("../database.php");
  
  /*if(!isset($_SESSION['username'])){
    header("location: ../login_page_bidder.php");
  }*/
?>
<?php include ("../header.php"); ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = {$_SESSION['username']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          
          <div class="details">
            <span><?php echo $row['name'] ?></span>
            
          </div>
        </div>
        <!--<a href="php/logout.php?logout_id=<?/*php echo $row['username']; */?>" class="logout">Logout</a>-->
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="users.js"></script>

</body>
</html>
