<?php
require('config.php');
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$jam_datang = date('Y-m-d H:i:s', strtotime($_POST['tgl'].$_POST['jam_datang']));
$jam_pulang = date('Y-m-d H:i:s', strtotime($_POST['tgl'].$_POST['jam_pulang']));

$query = "INSERT INTO `kehadiran` (`id_kehadiran`, `id_karyawan`, `jam_datang`, `jam_pulang`) VALUES
			('', 
			(select k.id_karyawan from karyawan k where nama_karyawan = '".$_POST['nama']."')
			, '$jam_datang', '$jam_pulang')";

if (mysqli_query($conn, $query)){
	echo json_encode(array("status" => TRUE));
}

mysqli_close($conn);
?>