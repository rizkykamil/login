<?php 
require 'functions.php';
session_start();


if (isset($_SESSION["login"])) {
	header("Location: profile.php");
	exit;
	}


if (isset ($_POST["login"]) ) {
	$username = $_POST["username"];
	// $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
	$password = $_POST["password"];


	$data = mysqli_query($dbc,"SELECT * FROM user WHERE username = '$username' AND password = '$password'");

	// cek username
	if (mysqli_num_rows($data) > 0) {

		$data_user = mysqli_fetch_assoc($data);
        $_SESSION['id'] = $data_user['id'];
        $_SESSION['username'] = $data_user['username'];
		$_SESSION['nama'] = $data_user['name'];
		$_SESSION['email'] = $data_user['email'];
		$_SESSION['alamat'] = $data_user['alamat'];
	
		// cek password
		// $row = mysqli_fetch_assoc($result);
		// if ( password_verify ($password, $row["password"]) ) {
		// 	// set session
		// 	$_SESSION["login"] = true;

			header("Location: profile.php?id=" . $data_user['id']);
			exit;

		} 	else {
			echo "eror";

		}

	}
// }


 ?>





<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
		
	<style type="">
		
		label {
		display: block;
		}
	</style>
	
</head>
<body>

<h1>Halaman Login</h1>

<?php if (isset($error)) : ?>
	<p style=" color: red; font-style: italic;">username / password salah</p>
<?php endif; ?>


<form action="" method="post">
	
		<ul>
		
			<li>
				<label for="username">Username : </label>
				<input type="text" name="username" id="username" > 
			<li>
				<label for="password">Password : </label>
				<input type="password" name="password" id="password" >
			</li>
			<li>
				<button type="login" name="login" id="login">
					Login
				</button>
			</li>
		</ul>

</form>


</body>
</html>