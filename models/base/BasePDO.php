<?php
/**
 * Created by IntelliJ IDEA.
 * User: arief
 * Date: 04/01/18
 * Time: 21:44
 */

class BasePDO{

    private static function  PDOInstance($dsn , $username , $password){
        $pdo = new PDO($dsn,$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public static function getPDOInstance($dsn , $username , $password){
        $pdoInstance = null;
        try{
            $pdoInstance = BasePDO::PDOInstance($dsn,$username,$password);
        }catch (PDOException $pdoEx){
            echo $pdoEx->getMessage();
        }
        return $pdoInstance;
    }

    public static function getMySqlPDOInstance(){
        $pdoInstance = null;
        try{
            $pdoInstance = self::getPDOInstance("mysql:dbname=webapp_db1;host=localhost","arief","arief");
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
        return $pdoInstance;
    }
}