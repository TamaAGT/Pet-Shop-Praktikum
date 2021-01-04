<?php 

include('includes/functions.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');

// Mengecek Apakah Data Berhasil Ditambahkan
if(isset($_POST["register"])){
    if(register($_POST) > 0){
        echo "
        <script>
        alert('Admin Baru Berhasil Ditambahkan');
        document.location.href = 'register.php';
        </script>
        ";
    } else {
        echo "
            <script>
            alert('Registrasi Admin Gagal');
            </script>
        ";
    }	
}


?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 pl-10 text-gray-800">Registrasi Akun Admin</h1>
</div>

<!-- Content Row -->
<div class="container">
<form action="#" method="post">
 		<div class="form-group row">
			<label class="col-md-3 col-form-label" for="username">Username</label>
 			<div class="col-md" >
  				<input class="form-control" type="text" name="username" id="username" placeholder="Nama Akun" required>	
 			</div>
         </div>

         <div class="form-group row">
			<label class="col-md-3 col-form-label" for="email">Email</label>
 			<div class="col-md" >
  				<input class="form-control" type="email" name="email" id="email" placeholder="Alamat Email" required>	
            </div>
        </div>

        <div class="form-group row">
        <label class="col-md-3 col-form-label" for="password">Password</label>
            <div class="col-md" >
                <input class="form-control" type="password" name="password" id="password" placeholder="Password Akun" required>
            </div>
        </div>

        <div class="form-group row">
        <label class="col-md-3 col-form-label" for="password2">Konfirmasi Password</label>
            <div class="col-md" >
                <input class="form-control" type="password" name="password2" id="password2" placeholder="Ketik Ulang Password" required>
            </div>
        </div>
         <div class="form-group row">
            <button class="btn btn-success ml-2 mt-3" id="register" name="register">Daftar</button>
        </div>
    </form>
</div>

</div>
   
<!-- Content Row -->
</div>

<?php 
include('includes/footer.php');
?>

</body>
<?php 
include('includes/scripts.php');
?>

</html>