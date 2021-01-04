<?php 
    // Koneksi ke Database
    $conn = mysqli_connect("localhost", "root", "", "pet_shop");

    // Memanggil Data dari Database
    function query($query){
        global $conn; 

        $jadwal = mysqli_query($conn, $query);
        $result = [];
        while($row = mysqli_fetch_assoc($jadwal)){
            $result[] = $row; 
        }

        return $result; 
    }

    // Menambah Data ke Database
    function insert($data){
        global $conn;

        $pemilik = htmlspecialchars($data["pemilik"]);
        $hewan = htmlspecialchars($data["hewan"]);
        $perawatan = htmlspecialchars($data["perawatan"]);
        $tanggal = $data["tanggal"];

        $query = "INSERT INTO jadwal VALUES (
            '', '$pemilik', '$hewan', '$perawatan', '$tanggal' 
        )";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        global $conn;

        mysqli_query($conn, "DELETE FROM jadwal WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function edit($data){
        global $conn;

        $id = $data["jadwal_id"];
        $pemilik = htmlspecialchars($data["pemilik"]);
        $hewan = htmlspecialchars($data["hewan"]);
        $perawatan = htmlspecialchars($data["perawatan"]);
        $tanggal = $data["tanggal"];

        mysqli_query($conn, "UPDATE jadwal SET
                pemilik = '$pemilik',
                hewan = '$hewan',
                perawatan = '$perawatan',
                tanggal = '$tanggal'
                WHERE id = $id;
        ");

        return mysqli_affected_rows($conn);
    }

    function register($data){
        global $conn;

        $username = strtolower(stripslashes($data["username"]));
        $email = $data["email"];
		$password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
        
        //mengecek apakah username sudah terdaftar
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        if( mysqli_fetch_assoc($result) ){
			echo "<script>
					alert('username sudah terdaftar');
				  </script>";
			return false; 		  
        }
        
        //mengecek konfirmasi password sudah sama atau belum
        if( $password !== $password2 ){
            echo "<script>
					alert('konfirmasi password tidak sesuai');
				  </script>";
			return false; 
        }

        //mengenkripsi password yang diinput
        $password = password_hash($password, PASSWORD_DEFAULT);

        //menambahkan user baru ke database
        mysqli_query($conn, "INSERT INTO users VALUE(
            '', '$username', '$email', '$password' 
        )");

        return mysqli_affected_rows($conn);
    }
?>