<?php 

$dbc = mysqli_connect("localhost", "root", "", "login");



function query($query){

	global $dbc;
	$result = mysqli_query($dbc, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}



function getuser($id) {
	global $dbc;
	$data = mysqli_query($dbc, "SELECT * FROM user WHERE id = $id");

	// cek username
	if (mysqli_num_rows($data) > 0) {

		return  mysqli_fetch_assoc($data);
	}
}


function ubah($data) {
	global $dbc;

	// ambil data dari tiap elemen dalam form
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$alamat = htmlspecialchars($data["alamat"]);

	// query insert data
	$query = "UPDATE user SET 
				nama = '$nama',
				email = '$email',
				alamat = '$alamat'
			  WHERE id = $id
			";

return	mysqli_query($dbc, $query);

	


}





 ?>