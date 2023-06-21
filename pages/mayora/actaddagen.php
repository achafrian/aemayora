<?php
include "koneksi.php";
$id_agen = $_POST['id_agen'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST ['no_hp'];
$alamat = $_POST ['alamat'];

$sql = "INSERT INTO agen (nama,email,no_hp,alamat)
        VALUES ('$nama','$email','$no_hp','$alamat')";
$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Data telah ditambahkan');
        window.location.href=('dataagen.php');
        </script>";
}else{
    echo "error";
}
?>