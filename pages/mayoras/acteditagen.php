<?php
include 'koneksi.php';
$id_agen = $_POST['id_agen'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST ['no_hp'];
$alamat = $_POST ['alamat'];
 
$sql = "UPDATE agen SET nama='$nama', email='$email', no_hp='$no_hp',alamat='$alamat' WHERE id_agen='$id_agen'";
$a = $koneksi->query($sql);
if($a == true){
    header('location: dataagen.php');
}else{
    echo "error";
}
?>