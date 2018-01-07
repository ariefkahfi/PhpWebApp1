<?php

include_once "/var/www/html/WebApp1/models/crud/DeletePDO.php";
include_once "/var/www/html/WebApp1/models/const/FileUploadPath.php";


$deletePDO = new DeletePDO();


$fileId = $_GET["file_id"];
$fileName = $_GET["file_name"];


//echo $fileId . "\n";
//echo FileUploadPath::TARGET_DIR."/".$fileName . "\n";

$deletePDO->deleteUploadedFile($fileId,$fileName);

