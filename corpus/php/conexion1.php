<?php 

class connection {
	private $conn;
	 public function __construct(){
	 	$this->conn = new mysqli ("localhost","root","Savcoinc1.","olgasant_corpusc");
	 }

	 public function get_connection(){
	 	return $this->conn;
	 }
}


?>