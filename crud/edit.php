<?php
require('config.php');
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$query = "UPDATE karyawan SET 
	nama_karyawan='".$_POST['nama']."',
	jenis_kelamin='".$_POST['jk']."',
	jabatan='".$_POST['jabatan']."',
	no_hp='".$_POST['noHp']."',
	alamat='".$_POST['alamat']."'
	WHERE id_karyawan='".$_POST['id']."'";

if (mysqli_query($conn, $query)){
	echo json_encode(array("status" => TRUE));
}

mysqli_close($conn);
?>