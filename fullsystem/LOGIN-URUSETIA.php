<link rel="stylesheet" href="style/LOGIN.CSS">

<?php include('server-urusetia.php') ?>

<body>
      <div class="login-page">
        <div class="form">
          <div class="login">
            <div class="login-header">
              <h3>Log In</h3>
            </div>
          </div>
          <form class="login-form" method="POST" action="LOGIN-URUSETIA.php"> 
            <?php include('errors.php'); ?>
            <input type="text" name="ID" placeholder="ID" >
            <input type="password" name="Password" placeholder="Password">
            <button type="submit" class="button" name="login_user">Login</button>
            <p class="message">Belum mendaftar? <a href="REGISTER-URUSETIA.php">Sila tekan sini</a></p>
          </form>
        </div>
      </div>
</body>