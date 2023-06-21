<?php
include 'koneksi.php';
 
$id_agen = $_GET['delete'];
 
$sql = "DELETE FROM agen WHERE id_agen='$id_agen'";
$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Data berhasil dihapus');
        window.location.href=('dataagen.php');
        </script>";
}else{
    echo "error";
}
?>