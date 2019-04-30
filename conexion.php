<?php
class conexion{
private $conn;

public function conexion()
{
 $username="root";
 $password="";
 $host="127.0.0.1";
 $db="biblioteca";
	$this->conn=mysqli_connect($host,$username,$password,$db);
   if (!$this->conn) {
	echo "Error conexion Mysql";
	  }
	}
	public function consultar($query){
		$result= mysqli_query($this->conn,$query);
		$data=array();
		while ($row=  mysqli_fetch_assoc($result) ) {
			$data[] = $row;
//			print_r($row);
		}
		return $data;
	}	
	public function ejecutar($query){	
		mysqli_query($this->conn,$query);
	}
}
?>