<?php 

class dbcon
{
	function __construct(){
		$con=mysqli_connect('localhost','root','','cedHosting');
		$this->dbh=$con;
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else{
			// echo "connected";
		}
	}
}
// $db=new dbcon();
// print_r($db);
 ?>