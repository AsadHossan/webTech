<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['signup'])){
		$id=$_POST['id'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$repass = $_POST['cPassword'];
		$email = $_POST['email'];
		//$type=$_POST['choose'];
		$_SESSION['name']=$name;
		if($id=="" || $name == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission...";
		}else{

			if($password == $repass){

				$user = [
							'id'=>$id,
							'name' => $name,
							'password' => $password,
							'email' => $email,
							//'type' => $type
						];
				$connection=getConnection();

				$status = insertUser($user);
				//print_r($status);

				if($status){
					header('location: ../view/login.html');
					
				}else{
					echo "error";
				}

			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>