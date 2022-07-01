<?php 
    include_once('header.php')
?>

<body>
    <link href="style/HOME.css" rel="stylesheet">
    <link href="style/input.css" rel="stylesheet">
    <?php
        include_once('db.php');
        $query="SELECT * FROM info_peserta;";
        $result= mysqli_query($conn, $query);
    ?>
        <h2>Senarai Nama, ID, Aspek, Markah Penuh Peserta </h2>
        <table>
        <tr>
            <th>ID</th>
            <th>Nama Peserta</th>
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
