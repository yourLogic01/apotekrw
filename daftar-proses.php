<?php
if (isset($_POST['daftar'])) {
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_lengkap']))));
    $username = htmlentities(htmlspecialchars(strip_tags(trim($_POST['username'])))); 
    $password = htmlentities(htmlspecialchars(strip_tags(trim($_POST['password'])))); 
    $alamat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['alamat'])))); 

    $password = sha1($password);

    $query = mysqli_query($koneksi, "INSERT INTO user VALUES(null,'$nama','$username','$password','$alamat',default)");

    if ($query) {
        // header("Location:index.php?page=login");
        echo "<script>alert('Daftar akun berhasil! silahkan untuk login');window.location.replace('index.php?page=login');</script>";
    } else {
        $_SESSION['error'] = "Daftar Gagal";
        header("Location:index.php?page=daftar-akun");
    }
}
?>