<?php
include 'koneksi.php';
$id_kategori = $_POST['id_kategori'];
$kategori = $_POST['kategori'];

$sql = "UPDATE kategori SET kategori='$kategori' WHERE id_kategori='$id_kategori'";
$a = $koneksi->query($sql);
if($a == true){
    header('location: datakategori.php');
}else{
    echo "error";
}
?>