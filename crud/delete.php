<?php
require('config.php');
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$query='';
if($_POST['bag'] === 'data'){
	$query = "DELETE from karyawan
	WHERE id_karyawan='".$_POST['id']."'";	
}else if($_POST['bag'] === 'absen'){
	$query = "DELETE from kehadiran
	WHERE id_kehadiran='".$_POST['id']."'";	
}

echo $query;
if (mysqli_query($conn, $query)){
	echo json_encode(array("status" => TRUE));
}

mysqli_close($conn);
?>