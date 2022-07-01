<?php
include_once 'db.php';
$sql = "DELETE FROM hakim WHERE IC='" . $_GET["IC"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record telah dipadam!";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
