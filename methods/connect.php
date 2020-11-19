<?php
require_once'config.php';
class Connection{
 
    public static $instance;
 
    private function __construct() {}
 
    public static function getInstance() {
        if (!isset(self::$instance)) {
        	self::$instance = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));  
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }
 
        return self::$instance;
    }

    private function __clone(){
	//Previnir clonagem da instância
    }

    private function __wakeup(){
	//Evitar unserialize()
    }
 
}
?>