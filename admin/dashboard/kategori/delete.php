<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM kategori_obat WHERE id_kategori='$id'");

    if ($query) {
        header("Location: index.php?page=kategori");
    } else {
        echo "Gagal";
    }
}
