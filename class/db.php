<?php
session_start();
error_reporting(E_ALL);

class Redirect{
    public static function to($location=null){
		if($location){
			header('Location: ' .$location);
			exit();
		}
	}
}

class Input {
	public static function get($item){
		if(isset($_POST[$item])){
			return $_POST[$item];
		}else if(isset($_GET[$item])){
			return $_GET[$item];
		}
	}
}


class Session{
    private $_username;
    
    public static function setUsername($username){
        if(!isset($_SESSION['username'])){
            $_SESSION['username'] = $username;
            return true;
        } return false;
    }
    public static function getUsername(){
        if(isset($_SESSION['username'])) return $_SESSION['username'];
        return false;
    }
    public function existUsername(){
        return (isset($_SESSION['username'])) ? true : false;
    }
    public static function setImageHash($defined = null){
        if($defined) $_SESSION['imageHash'] = $defined;
        else $_SESSION['imageHash'] = time();
    }
    
    public static function getImageHash(){return $_SESSION['imageHash'];}
}


class Cookie{
    //Will be done :D
}


class DB{
    private static $_instance = null;
    private $_pdo, $_query;
    public  function __construct(){
        try{
            $this->_pdo = new PDO('mysql:host=localhost;dbname=a_group','root','');
        }catch(PDOException $e){
            echo $e;
        }
    }

    public static function getInstance(){
        if(!isset(self::$_instance)){
            self::$_instance = new DB();
        }
        return self::$_instance;
    }
    
    public function query($table){
        return $this->_pdo ->query("SELECT * FROM ". $table); 
    }
    public function querySpecific($table, $id){
        return $this->_pdo ->query("SELECT * FROM ". $table." WHERE id = ".$id); 
    }
    public function DESCquery($table){
        return $this->_pdo ->query("SELECT * FROM ". $table." ORDER BY ID DESC"); 
    }
    public function DESCCustonQuery($table, $order){
        return $this->_pdo ->query("SELECT * FROM ". $table." ORDER BY ".$order." DESC");
    }
    public function insert($insert){
        $this->_pdo->query($insert);
    }

    public function delete($table, $id){
        //"DELETE FROM `note` WHERE id = $id"
        return $this->_pdo ->query("DELETE * FROM ".$table." WHERE id=".$id);
    }

    public function action($action){
        $this->_pdo->query($action);
    }
}

class Snow{
    public $_pdo, $_query, $_active, $_code;
    public function __construct(){
        $this->_pdo = DB::getInstance();
        $this->_query = $this->_pdo->query("events");
        while($snow = $this->_query -> fetch()){
            if($snow['name'] == 'snow'){
                $this->_active = $snow['active'];
                $this->_code = $snow['code'];
            }
        }
    }

    public function letItSnow(){
        $letit = "UPDATE `events` SET `active` = 1 WHERE name = 'snow'";
        $this->_pdo->insert($letit);
    }

    public function stopSnowing(){
        $letit = "UPDATE `events` SET `active` = 0 WHERE name = 'snow'";
        $this->_pdo->insert($letit);
    }
}
