<?php
if (isset($_POST['edit'])) {
    $id = $_POST['id_user'];
    $nama = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];


    if (empty($password)) {
        $query = mysqli_query($koneksi, "UPDATE user SET nama_lengkap='$nama', username='$username',alamat='$alamat', status='$status' WHERE id_user='$id'");
    } else {
        $password = sha1($password);
        $query = mysqli_query($koneksi, "UPDATE user SET nama_lengkap='$nama',password='$password', username='$username',alamat='$alamat', status='$status'  WHERE id_user='$id'");
    }


    if ($query) {
        header("Location: index.php?page=home");
    } else {
        echo "Gagal";
    }
}
