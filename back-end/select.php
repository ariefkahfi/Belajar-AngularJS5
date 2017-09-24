<?php
include "koneksi.php";


$arr = array();

$sql = $con->query("select * from person");


while ($rs = $sql->fetch_assoc()){
   array_push($arr,$rs);
}

echo json_encode(array('person'=>$arr));