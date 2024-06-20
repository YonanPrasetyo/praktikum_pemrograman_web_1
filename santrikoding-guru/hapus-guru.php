<?php

include('koneksi.php');

//get id
$nuptk = $_GET['id'];

$query = "DELETE FROM tbl_guru WHERE nuptk = '$nuptk'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>