<?php
include("koneksi.php");

if(isset($_POST['kirim_data'])){;
    $kode=$_POST['id'];
    $No_seri=$_POST['no_seri'];
    $Merek=$_POST['merek'];
    $Jumlah=$_POST['jumlah'];

$sql = "UPDATE tb_komputer SET no_seri='$No_seri' , merek='$Merek' , jumlah='$Jumlah' WHERE id=$kode";
$query= mysqli_query($db, $sql);
if($query){
    header('location:komputer.php');
}else{
    die ("gagal mengedit");
}}
else{
    die  ("akses dilarang");
}
?>