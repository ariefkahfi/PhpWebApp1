<?php
/**
 * Created by IntelliJ IDEA.
 * User: arief
 * Date: 06/01/18
 * Time: 14:19
 */



include "/var/www/html/WebApp1/models/base/BasePDO.php";

include_once "/var/www/html/WebApp1/models/callback-function/QueryResutListener.php";
include_once "/var/www/html/WebApp1/models/const/QueryCodeConsts.php";

class BukuTamuCRUD
{
    private $pdo;


    public function __construct()
    {
        $this->pdo = BasePDO::getPDOInstance("mysql:dbname=webapp_db1;host=localhost","arief","arief");
    }

    public function getAllBukuTamu(QueryResutListener $queryResutListener){
        try{
            $pdoQuery = $this->pdo->query("selecst * from buku_tamu",PDO::FETCH_ASSOC);
            $result = $pdoQuery->fetch();

            $jsonEncoder = json_encode($result);

            $queryResutListener->OnResult($jsonEncoder,QueryCodeConsts::QUERY_OK);
        }catch (PDOException $pdoEx){
            $queryResutListener->OnResult("Error fetching data : ". $pdoEx->getMessage(),QueryCodeConsts::QUERY_ERR);
        }
    }
    public function saveBukuTamu($nama , $saran , QueryResutListener $queryResutListener){
        try{
            $pdoPst = $this->pdo->prepare(
                "insert into buku_tamu (nama, saran) VALUES (:nama , :saran)"
            );
            $pdoPst->bindParam(":nama",$nama);
            $pdoPst->bindParam(":saran",$saran);


            $pdoPst->execute();

            $queryResutListener->OnResult("save data done !!",QueryCodeConsts::QUERY_OK);
        }catch (PDOException $pdoEx){
            $queryResutListener->OnResult("save data error " .$pdoEx->getMessage() , QueryCodeConsts::QUERY_ERR);
        }
    }
}