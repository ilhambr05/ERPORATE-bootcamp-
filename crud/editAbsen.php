<?php
require('config.php');
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$jam_datang = date('Y-m-d H:i:s', strtotime($_POST['date'].$_POST['jam_datang']));
$jam_pulang = date('Y-m-d H:i:s', strtotime($_POST['date'].$_POST['jam_pulang']));

$query = "UPDATE kehadiran SET 
	jam_datang='".$jam_datang."',
	jam_pulang='".$jam_pulang."'
	WHERE id_kehadiran='".$_POST['id']."'";
echo $query;
if (mysqli_query($conn, $query)){
	echo json_encode(array("status" => TRUE));
}

mysqli_close($conn);
?>