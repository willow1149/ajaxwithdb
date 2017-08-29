<?php
	include_once ('../config.php');
	/*Include Header*/
	include_once('../header.php');
 ?>

	
</form>
<?php 
	/*signup form*/
	function newUser(){
		$firstname = $_POST['sufirstname'];
		$lastname = $_POST['sulastname'];
		$email = $_POST['suemail'];
		$password = $_POST['supassword'];

		$query = "INSERT into ajaxwithdbuser (firstname,userName,email,pass) VALUES ('$firstname','$lastname','$email','$password') ";
		$data = mysqli_query($conn, $query) or die(mysqli_error());

		if($data){
			echo 'Successfully Registered';
		}
	}

	if (isset($_POST['submit'])) {
		newUser();
	}

 ?>


<?php 
	/*Include Footer*/
	include_once('../footer.php');
 ?>