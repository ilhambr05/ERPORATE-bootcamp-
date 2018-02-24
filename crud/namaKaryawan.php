<?php
	$keyword = strval($_POST['query']);
	$search_param = "%{$keyword}%";
	$conn =new mysqli('localhost', 'root', '' , 'bootcamp');

	$sql = $conn->prepare("SELECT nama_karyawan FROM karyawan WHERE nama_karyawan LIKE ?");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$countryResult[] = $row["nama_karyawan"];
		}
		echo json_encode($countryResult);
	}
	$conn->close();
?>