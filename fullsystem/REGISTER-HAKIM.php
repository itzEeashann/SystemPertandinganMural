<link rel="stylesheet" href="style/REGISTER.CSS">

<?php include('server.php') ?>

<body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>Sign Up</h3>
          </div>
        </div>
        <form class="login-form" method="POST" action="">
          <input type="number" name="IC" placeholder="Sila taip nombor IC anda" value="<?php echo $IC; ?>">
          <input type="text" name="Nama" placeholder="Nama" value="<?php echo $Nama; ?>">
          <input type="tel" name="Nombor_Telefon" placeholder="Nombor Telefon" name="Nombor Telefon" value="<?php echo $Nombor_Telefon; ?>">
          <input type="password" name="Password" placeholder="Password" value="<?php echo $Password; ?>">
          <button type="submit" class="button" href="REGISTER-HAKIM.php" name="reg_user">Sign Up</button>
        </form>
      </div>
    </div>
</body>

