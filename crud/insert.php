<?php
require('config.php');
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$query = "INSERT INTO `karyawan` 
			(`id_karyawan`, `nama_karyawan`, `jenis_kelamin`, `jabatan`, `no_hp`, `alamat`) VALUES
			('', '".$_POST['nama']."', '".$_POST['jk']."', '".$_POST['jabatan']."', '".$_POST['noHp']."', '".$_POST['alamat']."')";
echo $query;

if (mysqli_query($conn, $query)){
	echo json_encode(array("status" => TRUE));
}

mysqli_close($conn);
?>