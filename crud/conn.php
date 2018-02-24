<?php
require('config.php');
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = mysqli_query($conn, "SELECT * from karyawan");

$rows = array();
while($r = mysqli_fetch_assoc($sql)) {
    $rows[] = $r;
}
print json_encode($rows);

mysqli_close($conn);
?>