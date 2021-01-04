<?php
include('includes/functions.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');

$jadwal = query("SELECT * FROM jadwal");

?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 pl-10 text-gray-800">Data Jadwal Booking</h1>
        </div>

        <!-- Content Row -->
            <table class="table table-bordered">
                <thead class="text-center bg-primary text-light">
                    <tr>
                        <td>Nomor</td>
                        <td>ID</td>
                        <td>Pemilik</td>
                        <td>Hewan</td>
                        <td>Perawatan</td>
                        <td>Tanggal</td>
                        <td>Opsi</td>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php $i = 1; ?>
                    <?php foreach($jadwal as $row) : ?>
                        <tr>
                            <td class="text-center"><?= $i; ?></td>
                            <td><?= $row["id"]; ?></td>
                            <td><?= $row["pemilik"]; ?></td>
                            <td><?= $row["hewan"]; ?></td>
                            <td><?= $row["perawatan"]; ?></td>
                            <td><?= $row["tanggal"]; ?></td>
                            <td class="text-center"><a class="btn btn-success" href="edit.php?id=<?=$row["id"]; ?>">Edit</a>  
                            <a class="btn btn-danger" href="hapus.php?id=<?=$row["id"]; ?>" onclick="return confirm('Apakah anda ingin menghapus data?');">Hapus</a></td>
                        </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
                
            </table>
        <!-- Content Row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php 
    include('includes/footer.php');
?>

</body>
<?php 
    include('includes/scripts.php');
?>

</html>