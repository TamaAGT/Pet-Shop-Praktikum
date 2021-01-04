<?php 
include('includes/functions.php');

// Mengambil Nilai ID Dari Tabel Data
$id = $_GET["id"];

// Memanggil Fungsi Hapus dan Membuat Konfirmasi Hasil
if(hapus($id) > 0){
    echo "
    <script>
    alert('Data Berhasil Dihapus');
    document.location.href = 'index.php';
    </script>
";
} else {
    echo "
        <script>
        alert('Data Gagal Dihapus');
        </script>
    ";
}

?>