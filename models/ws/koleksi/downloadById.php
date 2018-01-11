<?php
include_once "/var/www/html/WebApp1/models/crud/DownloadPDO.php";

$id = $_GET['id'];


$downloadPDO = new DownloadPDO();

echo $downloadPDO->downloadPictureById($id);
