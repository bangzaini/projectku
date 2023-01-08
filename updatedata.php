<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$PROJETNAME     = $_POST['PROJETNAME'];
$CLIENT         = $_POST['CLIENT'];
$NAMA           = $_POST['NAMA'];
$EMAIL          = $_POST['EMAIL'];
$POTO           = $_POST['POTO'];
$STARTDATE      = $_POST['STARTDATE'];
$ENDDATE        = $_POST['ENDDATE'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_pegawai SET PROJETNAME= '$PROJETNAME', CLIENT= '$CLIENT', NAMA= '$NAMA', EMAIL= '$EMAIL', POTO= '$POTO', STARTDATE= '$STARTDATE', ENDDATE= '$ENDATE', PROGRESS= '$PROGRESS' WHERE id_peserta = '$id_siswa'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>