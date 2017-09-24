<?php
include "koneksi.php";

$id = $_GET['id'];


   $arr = array();

   $st = $con->prepare("select * from person where id = ? ");

   $st->bind_param("i",$id);
   $st->execute();


   $rs = $st->get_result()->fetch_assoc();

   array_push($arr,$rs);



   echo json_encode($arr);


