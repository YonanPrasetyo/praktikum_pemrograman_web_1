<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nuptk = $_POST['nuptk'];
$nama = $_POST['nama'];
$golongan = $_POST['golongan'];
$jenis_kelamin = $_POST['jenis_kelamin'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_guru (nuptk, nama, golongan, jenis_kelamin) VALUES ('$nuptk', '$nama', '$golongan', '$jenis_kelamin')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>