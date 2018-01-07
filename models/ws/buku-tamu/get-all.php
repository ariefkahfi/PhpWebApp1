<?php


include "../../crud/BukuTamuCRUD.php";
include_once "/var/www/html/WebApp1/models/callback-function/QueryResutListener.php";


$bukuTamu  = new BukuTamuCRUD();


$bukuTamu->getAllBukuTamu(new class implements QueryResutListener{
    public function OnResult(string $result, int $queryCode)
    {
        switch ($queryCode){
            case 0:
                header("Content-type: text/plain");
                echo $result;
                break;
            case 1 :
                header("Content-type: application/json");
                echo $result;
                break;
        }
    }
});
