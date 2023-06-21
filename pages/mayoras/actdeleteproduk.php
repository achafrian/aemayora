<?php
include 'koneksi.php';
 
$id_produk = $_GET['delete'];
 
$sql = "DELETE FROM produk WHERE id_produk='$id_produk'";
$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Data berhasil dihapus');
        window.location.href=('dataproduk.php');
        </script>";
}else{
    echo "error";
}
?>