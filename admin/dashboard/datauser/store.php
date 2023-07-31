<?php
if (isset($_POST['tambah'])) {
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_lengkap']))));
    $username = htmlentities(htmlspecialchars(strip_tags(trim($_POST['username'])))); 
    $password = htmlentities(htmlspecialchars(strip_tags(trim($_POST['password'])))); 
    $alamat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['alamat'])))); 
    $status = htmlentities(htmlspecialchars(strip_tags(trim($_POST['status'])))); 

    $password = sha1($password);

    $query = mysqli_query($koneksi, "INSERT INTO user VALUES(null,'$nama','$username','$password','$alamat','$status')");

    if ($query) {
        header("Location: index.php?page=menu-ds");
    } else {
        echo "Gagal";
    }
}
