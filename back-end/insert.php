<?php
include "koneksi.php";

$nama = $_POST['nama'];
$umur = $_POST['umur'];



function executeStateAndBindParam(mysqli $con , mysqli_stmt $st , $nama ,$umur){
    $st->bind_param("si",$nama,$umur);
    $b = $st->execute();
    if($b){
        echo "Data berhasil dimasukkan ke dalam database";
    }else{
        echo mysqli_error($con);
    }
}

function preparedStament(){
    global $con ;
    $st =  $con->prepare("insert into person (nama,umur) values (?,?)");
    return $st;
}


executeStateAndBindParam($con,preparedStament(),$nama,$umur);


