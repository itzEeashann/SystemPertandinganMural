<link rel="stylesheet" href="style/REGISTER.CSS">

<?php include('server-urusetia.php') ?>

<body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>Sign Up</h3>
          </div>
        </div>
        <form class="login-form" method="POST" action="REGISTER-URUSETIA.php">
          <input type="number" name="ID" placeholder="Sila taip nombor ID anda" value="<?php echo $ID; ?>">
          <input type="text" name="Nama" placeholder="Nama" value="<?php echo $Nama; ?>">
          <input type="tel" name="Nombor_Telefon" placeholder="Nombor Telefon" name="Nombor Telefon" value="<?php echo $Nombor_Telefon; ?>">
          <input type="password" name="Password" placeholder="Password" value="<?php echo $Password; ?>">
          <button type="submit" class="button" href="REGISTER-HAKIM.php" name="reg_user">Sign Up</button>
        </form>
      </div>
    </div>
</body>

