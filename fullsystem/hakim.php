<?php
  include_once('db.php');
  $query="SELECT * FROM hakim;";
  $result= mysqli_query($conn, $query);
?>

<link href="style/HOME.CSS" rel="stylesheet">
<link href="style/input.css" rel="stylesheet">

<?php include('header.php') ?>

<body>
  <h2>Senarai Nama Hakim</h2>
    <table>
      <tr>
        <th>IC</th>
        <th>Nama</th>
        <th>Nombor Telefon</th>
        <th>Password</th>
      </tr>
      <?php
        while($row=mysqli_fetch_assoc($result))
        {
      ?>
        <tr>
          <td><?php echo $row['IC'] ?></td>
          <td><?php echo $row['Nama'] ?></td>
          <td><?php echo $row['Nombor_Telefon'] ?></td>
          <td><?php echo $row['Password'] ?></td>
        </tr>
      <?php  
        }
      ?>
    </table>
</body>

<?php
  include_once('db.php');
  $query="SELECT * FROM hakim;";
  $result= mysqli_query($conn, $query);
?>

<body>
  <h2>Remove Hakim</h2>
    <table>
      <tr>
        <th>IC</th>
        <th>Nama</th>
        <th>Nombor Telefon</th>
        <th>Password</th>
        <th>Remove</th>
      </tr>
      <?php
        $i=0;
        while($row=mysqli_fetch_array($result))
        {
      ?>
        <tr>
            <td><?php echo $row['IC'] ?></td>
            <td><?php echo $row['Nama'] ?></td>
            <td><?php echo $row['Nombor_Telefon'] ?></td>
            <td><?php echo $row['Password'] ?></td>
          <td><a href="delete-process-hakim.php?IC=<?php echo $row["IC"]; ?>">Delete</a></td>
        </tr>
      <?php
      $i++;
        }
      ?>
    </table>
</body>