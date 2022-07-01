<?php
  include_once('db.php');
  $query="SELECT * FROM info_peserta;";
  $result= mysqli_query($conn, $query);
?>

<link href="style/HOME.CSS" rel="stylesheet">
<link href="style/input.css" rel="stylesheet">

<?php include('header.php') ?>

<body>
  <h2>Senarai Nama dan Keputusan Peserta</h2>
    <table>
      <tr>
        <th>ID</th>
        <th>Peserta</th>
        <th>Aspek</th>
        <th>Markah Penuh</th>
      </tr>
      <?php
        while($row=mysqli_fetch_assoc($result))
        {
      ?>
        <tr>
          <td><?php echo $row['ID'] ?></td>
          <td><?php echo $row['Nama'] ?></td>
          <td><?php echo $row['Aspek'] ?></td>
          <td><?php echo $row['Markah_Penuh'] ?></td>
        </tr>
      <?php  
        }
      ?>
    </table>
</body>

<?php
  include_once('db.php');
  $query="SELECT * FROM info_peserta;";
  $result= mysqli_query($conn, $query);
?>

<body>
<h2>Tambah Peserta Baru</h2>
  <form action="insert.php" method="post">
      <div class="box">
        <label for="Peserta">Nama Peserta: </label>
        <input type="text" id="Nama" name="Nama" placeholder="Sila tekan nama peserta">
        <label for="Aspek">Aspek: </label>
        <input type="text" id="Aspek" name="Aspek" placeholder="Sila tekan aspek peserta">
        <input type="submit" name="save" value="Save">
      </div>
  </form>
</body>

<body>
  <h2>Tolak Peserta</h2>
    <table>
      <tr>
        <th>ID</th>
        <th>Peserta</th>
        <th>Aspek</th>
        <th>Markah Penuh</th>
        <th>Tolak</th>
      </tr>
      <?php
        $i=0;
        while($row=mysqli_fetch_array($result))
        {
      ?>
        <tr>
          <td><?php echo $row['ID'] ?></td>
          <td><?php echo $row['Nama'] ?></td>
          <td><?php echo $row['Aspek'] ?></td>
          <td><?php echo $row['Markah_Penuh'] ?></td>
          <td><a href="delete-process.php?ID=<?php echo $row["ID"]; ?>">Tolak</a></td>
        </tr>
      <?php
      $i++;
        }
      ?>
    </table>
</body>
