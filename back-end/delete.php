<?php
include "koneksi.php";
//include "selectOne.php";

$id = $_GET['id'];

//getOne($id);

$st = $con->prepare("delete from person where id = ?");

$st->bind_param("i",$id);
$st->execute();

$rowsAffected = $st->affected_rows;

if($rowsAffected){
    echo $rowsAffected . " data berhasil dihapus ";
}

