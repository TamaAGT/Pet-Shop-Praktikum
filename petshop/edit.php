<?php 

include('includes/functions.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');

$jadwal_id = $_GET["id"];

$jadwal = query("SELECT * FROM jadwal WHERE id = $jadwal_id")[0];

if( isset($_POST["simpan"]) ){
    if( edit($_POST) > 0 ){
        echo "<script>
        alert('Data Berhasil Diubah');
        document.location.href='index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Diubah');
        </script>";
    }
}

?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 pl-10 text-gray-800">Edit Jadwal</h1>
</div>

<!-- Content Row -->
<div class="container">
<form action="#" method="post">
        <input type="hidden" name="jadwal_id" id="jadwal_id" value="<?=$jadwal_id ?>">
 		<div class="form-group row">
			<label class="col-md-3 col-form-label" for="pemilik">Nama Pemilik</label>
 			<div class="col-md" >
  				<input class="form-control" type="text" name="pemilik" id="pemilik" placeholder="Nama Pemilik Hewan" value="<?= $jadwal["pemilik"]; ?>" required>	
 			</div>
         </div>

         <div class="form-group row">
	 		<label class="col-sm-3 col-form-label" for="hewan">Jenis Hewan</label>
	 		<div class="col-md">
				<select class="form-control" name="hewan" id="hewan">
				<option value="<?= $jadwal["hewan"]; ?>" ><?= $jadwal["hewan"]; ?></option>
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
  				<input class="form-control" type="text" name="perawatan" id="perawatan" placeholder="Tipe Perawatan" value="<?= $jadwal["perawatan"]; ?>" required>	
            </div>
        </div>

        <div class="form-group row">
        <label class="col-md-3 col-form-label" for="tanggal">Tanggal</label>
            <div class="col-md" >
                <input class="form-control" type="date" name="tanggal" id="tanggal" placeholder="Tanggal Perawatan" value="<?= $jadwal["tanggal"]; ?>" required>
            </div>
        </div>
         <div class="form-group row">
            <a class="btn btn-danger ml-2 mt-3" id="batal" name="batal" href="index.php">Batal</a>
            <button class="btn btn-success ml-3 mt-3" id="simpan" name="simpan">Simpan</button>
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