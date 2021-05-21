<?php 

$conc = mysqli_connect("localhost", "root", "", "register");


function query($query){

	global $conc;
	$result = mysqli_query($conc, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}




function registrasi($data) {
	global $conc;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conc, $data["password"]);
	$password2 = mysqli_real_escape_string($conc, $data["password2"]);
	$nama = $data["nama"];
	$email = $data["email"];
	$alamat = $data["alamat"];

	

	
	$result = mysqli_query($conc, "SELECT username FROM user WHERE username = '$username'");
	
	if ($result!=false) {

		if (mysqli_fetch_assoc($result)) {
			echo "<script>
					alert('username sudah terdaftar')
				  </script>
			";
			return false;
		}


		
		if ($password !== $password2) {
			echo"<script>
					alert('konfirmasi password tidak sesusai');
				</script>";
				return false;
		}
	}

	else {

		echo "error";

	}	

	
	$password = password_hash($password, PASSWORD_DEFAULT);


	$query = "INSERT INTO user (username,password,nama,email,alamat)  VALUES('$username','$password','$nama','$email','$alamat')";

	
		return mysqli_query($conc,$query);
		


	return /*mysqli_affected_rows*/($conc);

}



 ?>