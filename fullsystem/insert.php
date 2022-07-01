<?php
include_once 'db.php';
if(isset($_POST['save']))
{	 
	$Nama = $_POST['Nama'];
	$Aspek = $_POST['Aspek'];
	 $sql = "INSERT INTO info_peserta (Nama,Aspek)
	 VALUES ('$Nama','$Aspek')";
	 if (mysqli_query($conn, $sql)) {
		header('location: peserta.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>