<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];

		if($id == "" || $password == ""){
			echo "null submission...";
		}else{

			$status = validateUser($name, $password);
			if($status){
				$_SESSION['flag'] = true;
				$_SESSION['name'] = $name;
				if($_SESSION['type']=='user'){
					header('location: ../view/userhome.php');
				}
				else{
					header('location: ../view/adminhome.php');
				}

				

			}else{
				echo "invalid user";
			}
		}

	}
?>