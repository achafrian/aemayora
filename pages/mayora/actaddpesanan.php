<?php
include "koneksi.php";
$id_produk = $_POST['id_produk'];
$id_agen = $_POST['id_agen'];
$jumlah_pesanan = $_POST['jumlah_pesanan'];
$total_harga = $_POST['total_harga'];


$sql = "INSERT INTO pesanan (id_produk,id_agen,jumlah_pesanan,total_harga)
        VALUES ('$id_produk','$id_agen','$jumlah_pesanan','$total_harga')";

$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Data telah ditambahkan');
        window.location.href=('datapesanan.php');
        </script>";
}else{
    echo "error";
}
?>