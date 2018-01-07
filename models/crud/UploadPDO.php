<?php

include_once "/var/www/html/WebApp1/models/const/FileUploadPath.php";
include_once "/var/www/html/WebApp1/models/base/BasePDO.php";

class UploadPDO
{


    public function saveToDatabase(
        $nama ,
        $url ,
        $kategori ,
        $namaGambar,
        $tmpFile
    ){
        $result = false;
        try{
            $pdo = BasePDO::getPDOInstance("mysql:dbname=webapp_db1;host=localhost","arief","arief");
            $pStatement = $pdo->prepare(
                "insert into gambar_buku (nama, url, kategori ,nama_gambar) 
                           VALUES (:nama , :url, :kategori , :nama_gambar)"
            );

            $pStatement->bindParam(":nama",$nama);
            $pStatement->bindParam(":url",$url);
            $pStatement->bindParam(":kategori",$kategori);
            $pStatement->bindParam(":nama_gambar",$namaGambar);

            $pStatement->execute();

            $this->uploadFile($tmpFile,$namaGambar);
            $result = true;
        }catch (PDOException $pdoEx){
            echo "Error , upload file \n file exists" ;
        }
        return $result;
    }
    private function uploadFile($tmpFilePath , $fileName){
        move_uploaded_file($tmpFilePath,FileUploadPath::TARGET_DIR."/".$fileName);
    }
}