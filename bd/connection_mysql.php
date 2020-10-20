<?php
/**
 * Connect to a MySQL database using driver invocation 
 */
class Database
{

    private static $dbHost = "localhost";
    private static $nameBdd = "cv_girard_s_portfolio" ;
    // $port ='3306';    
    private static  $user = "root";
    private static  $password = "root";
    private static  $connection = null;

    public static function dbConnect()
    {
        try 
        {
            self::$connection= new PDO("mysql:host=" . self::$dbHost .";dbname=" . self::$nameBdd , self::$user , self::$password, 
                                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
         
        catch (PDOException $e) 
        {
            die('ERROR: ' . $e->getMessage());
            echo 'Connection failed: ' ;
        }
        return self::$connection;
    }
    public static function dbDisconnect()
    {
     self::$connection = null;
    }  
} 

?>
    

