<?php
session_start();
class Database
{

	private $host  = 'localhost';
	private $user  = 'root';
	private $password   = "";
	private $database  = "galeria-dinamica";

	public function getConnection()
	{
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if ($conn->connect_error) {
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
	}

	function get_imgs(){
		$images = array();
		$con = $this->getConnection();
		$query=$con->query("select user_gallery.image_name from user_gallery order by user_gallery.image_name asc");
		while($r=$query->fetch_object()){
			$images[] = $r;
		}
		return $images;
	}
}
