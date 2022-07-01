<?php
  include_once('db.php');
  $query="SELECT * FROM info_peserta;";
  $result= mysqli_query($conn, $query);
?>

<body>
  <link href="style/HOME.CSS" rel="stylesheet">
  <link href="style/header.css" rel="stylesheet">
  <div class="topnav">
      <a class="active" href="HOME-PESERTA.php">Home</a>
      <a href="borang.php">Borang</a>
      <a href="index.php">Keluar</a>
  </div>
  <h2>Borang Informasi</h2>
    <table>
      <tr>
        <th>Nama Peserta</th>
        <th>Aspek</th>
        <th>Markah Penuh</th>
      </tr>
      <?php
        while($row=mysqli_fetch_assoc($result))
        {
      ?>
        <tr>
          <td><?php echo $row['Nama'] ?></td>
          <td><?php echo $row['Aspek'] ?></td>
          <td><?php echo $row['Markah_Penuh'] ?></td>
        </tr>
      <?php  
        }
      ?>
    </table>
</body>