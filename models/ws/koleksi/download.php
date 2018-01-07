<?php
include_once "/var/www/html/WebApp1/models/crud/DownloadPDO.php";
include_once "/var/www/html/WebApp1/models/callback-function/QueryResutListener.php";


$downloadPDO = new DownloadPDO();

$downloadPDO->downloadPictures(new class implements QueryResutListener{
    public function OnResult(string $result, int $queryCode)
    {
        header("Content-type: application/json");
        echo $result;
    }
});