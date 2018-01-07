<?php

include "../../crud/BukuTamuCRUD.php";
include_once "/var/www/html/WebApp1/models/callback-function/QueryResutListener.php";

$crud = new BukuTamuCRUD();


$nama = $_POST['nama'];
$saran = $_POST['saran'];




$crud->saveBukuTamu($nama,$saran , new class implements QueryResutListener {
    public function OnResult(string $result, int $queryCode)
    {
        switch($queryCode){
            case 0:
                echo "Query Error";
                break;
            case 1 :
                echo "Query OK " .$result;
                break;
        }
    }
});



