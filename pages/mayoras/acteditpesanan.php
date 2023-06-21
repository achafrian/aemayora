<?php
include 'koneksi.php';
$id_pesanan = $_POST['id_pesanan'];
$id_produk = $_POST['id_produk'];
$id_agen = $_POST['id_agen'];
$jumlah_pesanan = $_POST['jumlah_pesanan'];
$total_harga = $_POST['total_harga'];
$status = $_POST['status'];
 
$sql = "UPDATE pesanan SET id_produk='$id_produk', id_agen='$id_agen', jumlah_pesanan='$jumlah_pesanan', total_harga='$total_harga', status='$status' WHERE id_pesanan='$id_pesanan'";
$a = $koneksi->query($sql);
if($a == true){
    header('location: datapesanan.php');
}else{
    echo "error";
}
?>