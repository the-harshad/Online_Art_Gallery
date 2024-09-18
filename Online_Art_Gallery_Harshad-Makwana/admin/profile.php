<?php include 'include/header.php'; ?>
        <!-- start -->
  <div class="nameofhead">
   <h1> PROFILE </h1>
  </div>
  <div class="inernav">     
     <p><a href="index.php">DASHBOARD</a>/PROFILE</p>
  <div>

<div>      
  <div class="login-container">
    <h2>Profile</h2>
    <form class="login-form" action="update_pass.php" method="post" autocomplete="off">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="email" id="username" name="username" value=" <?php echo $_SESSION["admindata"]; ?>">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value=" <?php echo $_SESSION["admindata"]; ?>">
      </div>
      <div class="form-group">
        <label for="password">new Password</label>
        <input type="text" id="" name="newpassword" placeholder="new password">
      </div>
      <button type="update" name="update" class="login-btn">update</button>
    </form>
  </div>
</div>
  
    <!-- finish -->
  
  </div> 
  <!-----end------ hero-----dive fior body-->
</body>
</html>