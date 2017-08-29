<?php 
	$servername = '127.0.0.1';
	$username = 'root';
	$password = '';
	$dbname = 'ajaxwithdb_db';

	/*Create Connection*/
	$conn = new mysqli($servername , $username , $password , $dbname);

	/*Check Connection*/
	if (mysqli_connect_error()) {
		die("Connection Failed:" . mysqli_connect_error());
	}
	
 ?>