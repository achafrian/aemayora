<?php
include "koneksi.php";
$id_kategori = $_POST['id_kategori'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$sql = "INSERT INTO produk (id_kategori,produk,jumlah,harga)
        VALUES ('$id_kategori','$produk','$jumlah','$harga')";
$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Data telah ditambahkan');
        window.location.href=('dataproduk.php');
        </script>";
}else{
    echo "error";
}
?>