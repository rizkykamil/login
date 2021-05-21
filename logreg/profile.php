<?php 
require 'functions.php';
session_start();

$user;

if (isset($_GET['id'])) {
    $user = getuser($_GET['id']);

}



if (isset($_POST["submit"])) {
    


    //cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
       
        echo "
            <script>
                alert('data berhasil diubah!');
                window.location.href = window.location.href ;
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                
            </script>
        ";
        }

}




 ?>





<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>

	<link rel="stylesheet" type="text/css" href="profile.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	

</head>
<body style="">

<div class="container">
<div class="row justify-content-center">
    <div class="col-12 col-lg-10 col-xl-8 mx-auto">
        <h2 class="h3 mb-4 page-title">My Profile</h2>
        <div class="my-4">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Profile</a>
                </li>
            </ul>
            <form action="" method="POST">
                <div class="row mt-5 align-items-center">
                    <div class="col-md-3 text-center mb-5">
                        <div class="avatar avatar-xl">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..." class="avatar-img rounded-circle" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                               
                                <h4 class="mb-1"><?= $user['username']; ?></h4>
                                <p class="small mb-3"><span class="badge badge-dark">New York, USA</span></p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-7">
                                <p class="text-muted">
                                    <!---->
                                </p>
                            </div>
                            <div class="col">
                                <p class="small mb-0 text-muted"></p>
                                <p class="small mb-0 text-muted"></p>
                                <p class="small mb-0 text-muted"><?= $user['alamat'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4" />

                <div class="form-row">
                    <!--  -->
                    <div class="form-group col-md-6">
                         <input type="hidden" name="id" value="<?= $user['id']; ?>">
                        <label for="nama">Name</label>
                        <input type="text" id="nama" name="nama" class="form-control" value="<?= $user['nama'] ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" />
                </div>
                <div class="form-group">
                    <label for="alamat">Address</label>
                    <textarea type="text" class="form-control" id="alamat" name="alamat" ><?= $user['alamat'] ?></textarea>
                                
                </div>
                <!--  -->
                </div>
                <hr class="my-4" />
                <!--  -->
                <button type="submit" id="submit" name="submit" class="btn btn-primary">Save Change</button>
            </form>
        </div>
    </div>
</div>

</div>


</body>
</html>