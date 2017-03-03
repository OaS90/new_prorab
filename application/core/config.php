<?php
if(!isset($_GET['page'])) {
	$_GET['page'] = 'main';
}



/**
* 
*/
class Dbase
{
	private $db_host="localhost";
	private $db_name = "prorab";
	private $db_user = "admini";
	private $db_pass = "131090";


	function connect(){
		$q = mysqli_connect($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
		if($q){
			return true;
		}	
		else{
			return 'Error connection';
		}
	}
}

$link = new Dbase();

?>