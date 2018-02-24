<?php
require('config.php');
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = mysqli_query($conn, "select k.id_kehadiran, kar.nama_karyawan, 
CONCAT_WS(', ', DAYNAME(jam_datang), DATE_FORMAT(jam_datang, '%d %b %Y')) AS hari_tgl, 
DATE_FORMAT(jam_datang, '%H:%i') as jam_datang,
DATE_FORMAT(jam_pulang, '%H:%i') as jam_pulang,
timediff(jam_pulang, jam_datang) as jam_kerja from kehadiran k join karyawan kar where k.id_karyawan = kar.id_karyawan order by k.id_kehadiran DESC;
");

$rows = array();
while($r = mysqli_fetch_assoc($sql)) {
    $rows[] = $r;
}
print json_encode($rows);

mysqli_close($conn);
?>