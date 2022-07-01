<?php 
    include_once('header.php')
?>

<body>
  <link href="style/HOME.css" rel="stylesheet">
  <link href="style/input.css" rel="stylesheet">
  <h2>Masukkan Markah Penuh dan Aspek Peserta</h2>
  <form action="" method="post">
      <div class="box">
        <label for="ID">ID Peserta: </label>
        <input type="num" id="ID" name="ID" placeholder="Sila taip ID peserta berdasarkan senarai">

        <label for="Nama">Nama Peserta: </label>
        <input type="text" id="Nama" name="Nama" placeholder="Sila taip nama peserta berdasarkan senarai">

        <label for="Aspek">Aspek: </label>
        <input type="text" id="Aspek" name="Aspek" placeholder="Sila taip aspek Peserta">

        <label for="Markah_Penuh">Markah Penuh: </label>
        <input type="num" id="Markah_Penuh" name="Markah_Penuh" placeholder="Sila taip markah penuh peserta">

        <input type="submit"name="update"value="Save"/>
        <?php
          $connection=mysqli_connect("localhost","root","");
          $db=mysqli_select_db($connection,'systempertandinganmural');
          if(isset($_POST['update']))
          {
            
            $ID=$_POST['ID'];

            $query="UPDATE info_peserta SET Nama='$_POST[Nama]', Aspek='$_POST[Aspek]', Markah_Penuh='$_POST[Markah_Penuh]' WHERE ID='$_POST[ID]'";

            $query_run= mysqli_query($connection,$query);

            if($query_run)
            {
              echo '<script type="text/javascript">alert("Data Updated")</script>';
            }
            else
            {
              echo'<script type="text/javascript">alert("Data Not Updated")</script>';                
            }
          }
        ?>
      </div>
  </form> 
</body>


