<?php
include_once 'db.php';
$sql = "DELETE FROM info_peserta WHERE ID='" . $_GET["ID"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record telah dipadam!";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

