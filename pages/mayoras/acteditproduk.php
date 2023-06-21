<?php
include 'koneksi.php';
$id_produk = $_POST['id_produk'];
$id_kategori = $_POST['id_kategori'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$sql = "UPDATE produk SET id_kategori='$id_kategori', produk='$produk', jumlah='$jumlah', harga='$harga' WHERE id_produk='$id_produk'";
$a = $koneksi->query($sql);
if($a == true){
    header('location: dataproduk.php');
}else{
    echo "error";
}
?>