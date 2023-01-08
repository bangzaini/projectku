<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$PROJETNAME     = $_POST['PROJETNAME'];
$CLIENT         = $_POST['CLIENT'];
$NAMA           = $_POST['NAMA'];
$EMAIL          = $_POST['EMAIL'];
$POTO           = $_POST['POTO'];
$STARTDATE      = $_POST['STARTDATE '];
$ENDDATE        = $_POST['ENDDATE'];
$PROGRESS       = $_POST['PROGRESS'];

//query insert data ke dalam database
$query = "INSERT INTO tb_pegawai (PROJETNAME,CLIENT,NAMA,EMAIL,POTO,STARTDATE,ENDDATE,PROGRESS) VALUES ('$PROJETNAME', '$CLIENT', '$NAMA', '$EMAIL', '$POTO', '$STARTDATE', '$ENDDATE', '$PROGRESS')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>