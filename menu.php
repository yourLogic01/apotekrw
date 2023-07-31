<?php
if(isset($_GET['page'])){
    include 'lib/koneksi.php';
    $page = $_GET['page'];

    switch($page){
        case 'login':
            include 'login.php';
            break;
        case 'login-proses':
            include 'login-proses.php';
            break;
        case 'dashboard':
            include 'admin/index.php';
            break;
        case 'daftar-akun':
            include 'daftar.php';
            break;
        case 'daftar':
            include 'daftar-proses.php';
            break;
        case 'home':
            include 'home.php';
            break;
        case 'obat':
            include 'obat.php';
            break;
        case 'menu-ds':
            include 'admin/menu-ds.php';
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
    include 'home.php';
}
?>