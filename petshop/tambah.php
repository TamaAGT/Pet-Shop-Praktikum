<?php 
include('includes/functions.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');

// Mengecek Apakah Data Berhasil Ditambahkan
if(isset($_POST["simpan"])){
    if(insert($_POST) > 0){
        echo "
        <script>
        alert('Data Berhasil Ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
            <script>
            alert('Data Gagal Ditambahkan');
            </script>
        ";
    }	
}


?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 pl-10 text-gray-800">Tambah Jadwal</h1>
</div>

<!-- Content Row -->
<div class="container">
<form action="#" method="post">
 		<div class="form-group row">
			<label class="col-md-3 col-form-label" for="pemilik">Nama Pemilik</label>
 			<div class="col-md" >
  				<input class="form-control" type="text" name="pemilik" id="pemilik" placeholder="Nama Pemilik Hewan" required>	
 			</div>
         </div>

         <div class="form-group row">
	 		<label class="col-sm-3 col-form-label" for="hewan">Jenis Hewan</label>
	 		<div class="col-md">
				<select class="form-control" name="hewan" id="hewan">
				<option value="" disabled selected>Jenis Hewan</option>
			      <option value="Kucing">Kucing</option>
			      <option value="Anjing">Anjing</option>
			      <option value="Marmut">Marmut</option>
			      <option value="Sugar Glider">Sugar Glider</option>
			      <option value="Hamster">Hamster</option>
	   		    </select>	 		
           </div>
         </div>

         <div class="form-group row">
			<label class="col-md-3 col-form-label" for="perawatan">Perawatan</label>
 			<div class="col-md" >
  				<input class="form-control" type="text" name="perawatan" id="perawatan" placeholder="Tipe Perawatan" required>	
            </div>
        </div>

        <div class="form-group row">
        <label class="col-md-3 col-form-label" for="tanggal">Tanggal</label>
            <div class="col-md" >
                <input class="form-control" type="date" name="tanggal" id="tanggal" placeholder="Tanggal Perawatan" required>
            </div>
        </div>
         <div class="form-group row">
            <button class="btn btn-success ml-2 mt-3" id="simpan" name="simpan">Simpan</button>
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