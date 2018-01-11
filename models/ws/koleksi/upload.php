<?php

include_once "/var/www/html/WebApp1/models/crud/UploadPDO.php";

$namaBuku = $_POST['nama_buku'];
$kategoriBuku = $_POST['kategori_buku'];
$deskBuku = $_POST['deskripsi_buku'];
$fileName = $_FILES["file_buku"]["name"];
$fileTemp = $_FILES["file_buku"]["tmp_name"];


$uploadPDO = new UploadPDO();

$url = "http://localhost/storage/images/".$fileName;

$rs = $uploadPDO->saveToDatabase($namaBuku,$url,$kategoriBuku,$fileName,$deskBuku,$fileTemp);

if($rs){
    echo "file uploaded to server";
}










