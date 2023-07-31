<?php
if(isset($_GET['page'])){
    include '../lib/koneksi.php';
    $page = $_GET['page'];

    switch($page){
        case 'home':
            include 'home-user.php';
            break;
        case 'logout':
            include 'logout.php';
            break;
        case 'profile':
            include 'profile/index.php';
            break;
        case 'transaksi':
            include 'profile/transaksi.php';
            break;
        case 'updateProfile':
            include 'profile/profile.php';
            break;
        case 'update-proses':
            include 'profile/update.php';
            break;
        case 'obat':
            include 'obat.php';
            break;
        case 'beli':
            include 'beli.php';
            break;
        case 'beli-proses':
            include 'beli_proses.php';
            break;
        case 'invoice':
            include 'invoice.php';
            break;
        case 'checkup':
            include 'checkup.php';
            break;
        case 'delivery':
            include 'delivery.php';
            break;
        case 'vaksinasi':
            include 'vaksinasi.php';
            break;
        case 'whychoseus':
            include 'whychoseus.php';
            break;
        case 'about':
            include 'about.php';
            break;
        default:
            echo"halaman tidak ditemukan";
            break;
    }
}else{
    include 'home-user.php';
}
?>