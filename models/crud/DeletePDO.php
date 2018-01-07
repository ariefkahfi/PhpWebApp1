<?php
/**
 * Created by IntelliJ IDEA.
 * User: arief
 * Date: 07/01/18
 * Time: 8:15
 */
include_once "/var/www/html/WebApp1/models/base/BasePDO.php";
include_once "/var/www/html/WebApp1/models/const/FileUploadPath.php";

class DeletePDO
{
    private function deleteFromDatabase($fileId){
        try{
            $pdo = BasePDO::getPDOInstance("mysql:dbname=webapp_db1;host=localhost","arief","arief");
            $pstStatement = $pdo->prepare("delete from gambar_buku where id = :delete_id ");
            $pstStatement->bindParam(":delete_id",$fileId);

            $pstStatement->execute();
            echo "delete success \n";
        }catch (PDOException $ex){
            echo "Error : " . $ex->getMessage() . "\n";
        }
    }


    public function deleteUploadedFile($fileId , $fileName ){
       $fullPath = unlink(FileUploadPath::TARGET_DIR."/".$fileName);
       if($fullPath){
         echo "file deleted \n";
         $this->deleteFromDatabase($fileId);
       }else{
         echo "file not deleted";
       }
    }

}