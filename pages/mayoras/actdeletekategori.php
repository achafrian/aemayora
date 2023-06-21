<?php
include 'koneksi.php';
 
$id_kategori = $_GET['delete'];
 
$sql = "DELETE FROM kategori WHERE id_kategori='$id_kategori'";
$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Data berhasil dihapus');
        window.location.href=('datakategori.php');
        </script>";
}else{
    echo "error";
}
?>