<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "hibat");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;

	$name = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$pesan = htmlspecialchars($data["pesan"]);
	

	$query = "INSERT INTO pesan
				VALUES
			  ('$name', '$email', '$pesan')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
?>
