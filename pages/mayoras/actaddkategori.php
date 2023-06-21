<?php
include "koneksi.php";
$id_kategori = $_POST['id_kategori'];
$kategori = $_POST['kategori'];

$sql = "INSERT INTO kategori (kategori)
        VALUES ('$kategori')";
$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Data telah ditambahkan');
        window.location.href=('datakategori.php');
        </script>";
}else{
    echo "error";
}
?>