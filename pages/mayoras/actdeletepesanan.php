<?php
include 'koneksi.php';
 
$id_pesanan = $_GET['delete'];
 
$sql = "DELETE FROM pesanan WHERE id_pesanan='$id_pesanan'";
$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Data berhasil dihapus');
        window.location.href=('datapesanan.php');
        </script>";
}else{
    echo "error";
}
?>