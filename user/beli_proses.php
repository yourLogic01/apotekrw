<?php
$conn = mysqli_connect("localhost", "root", "", "apotek");

// Choose a function depends on value of $_POST["action"]
if($_POST["action"] == "insert"){
  insert();
}

  

// Function
function insert(){
  global $conn;

//resi
$query_resi = mysqli_query($conn, "SELECT max(resi) as maxResi FROM jual");
$data = mysqli_fetch_array($query_resi);
$koderesi = $data['maxResi'];
 
$urutan = (int) substr($koderesi, 4, 3);
 

$urutan++;
 
$huruf = "APTK";
$koderesi = $huruf . sprintf("%03s", $urutan);


  $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id']))));
  $id_user = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_user']))));
  $jum_item = htmlentities(htmlspecialchars(strip_tags(trim($_POST["jum_item"]))));
  $total = htmlentities(htmlspecialchars(strip_tags(trim($_POST["total"]))));
  $alamat = htmlentities(htmlspecialchars(strip_tags(trim($_POST["alamat"]))));
  $bayar = htmlentities(htmlspecialchars(strip_tags(trim($_POST["bayar"]))));
  $tanggal = htmlentities(htmlspecialchars(strip_tags(trim(date("Y-m-d H:i:s")))));
  //if empty
  if(empty($jum_item) || empty($alamat) || empty($bayar)){
    // Output
    echo "";
    exit;
  }
  // Insert value to database
  $query = "INSERT INTO jual VALUES('$koderesi','$id','$tanggal','$jum_item','$total','$alamat','$bayar','$id_user')";
  mysqli_query($conn, $query);
  //update stok
  $query_stok = mysqli_query($conn, "SELECT stok FROM obat where id=$id");
  $data1 = mysqli_fetch_array($query_stok);
  $stokupdate = $data1['stok'];
  $result = $stokupdate - $jum_item;
  $query2 = "UPDATE obat SET stok='$result' where id=$id";
  mysqli_query($conn, $query2);
  // Output
  echo 1;
}
?>