<?php
class Dbase {
	
	
static $_instance;
	

	public  static function connect(){

	$_host="localhost";	 	  		//nom serveur
	 $_user="root";			 	   //nom user 
	 $_pwd="";					  //password
	 $_nameDB="ilearner";	 //nom de data base
	 
		
		try {
			
			return new PDO('mysql:host='.$_host.';dbname='.$_nameDB,$_user,$_pwd,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			
		} 
		catch (PDOException $e) {
			echo "No Connected ";}
	}

	

	
	


	public static function getInstance()
	{
		if (!isset(self::$_instance)) {
			self::$_instance=Dbase::connect(); }
		
		return self::$_instance;
	}


}

