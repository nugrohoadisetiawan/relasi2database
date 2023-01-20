<?php
include("koneksi.php");
isset($_GET['id']);
$kode = $_GET['id'];

$sql= "DELETE FROM tb_jurusan where id=$kode";
$query = mysqli_query($db, $sql);

$sql= "DELETE FROM tb_spp1 where id=$kode";
$query = mysqli_query($db, $sql);

$sql= "DELETE FROM tb_siswa where id=$kode";
$query = mysqli_query($db, $sql);

if($query){
    header("Location:join-table.php?status=sukses");
}else{
    die("akses dilarang");  
}
?>