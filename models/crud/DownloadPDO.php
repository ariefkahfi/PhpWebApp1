<?php
/**
 * Created by IntelliJ IDEA.
 * User: arief
 * Date: 06/01/18
 * Time: 19:25
 */

include_once "/var/www/html/WebApp1/models/base/BasePDO.php";
include_once "/var/www/html/WebApp1/models/callback-function/QueryResutListener.php";
include_once "/var/www/html/WebApp1/models/const/QueryCodeConsts.php";
class DownloadPDO
{
    public function downloadPictures(QueryResutListener $queryResutListener){
        try{
            $pdo = BasePDO::getPDOInstance("mysql:dbname=webapp_db1;host=localhost","arief","arief");
            $query = $pdo->query("select * from gambar_buku",PDO::FETCH_ASSOC);
            $output = $query->fetchAll();

            $jsonArr = json_encode($output);
            $queryResutListener->OnResult($jsonArr,QueryCodeConsts::QUERY_OK);
        }catch (PDOException $exception){
            $queryResutListener->OnResult("Error : ".$exception->getMessage(),QueryCodeConsts::QUERY_ERR);
        }
    }
}