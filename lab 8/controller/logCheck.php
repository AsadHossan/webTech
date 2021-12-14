<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$myfile = fopen('../model/manager.json', 'r');
		$data = fread($myfile, filesize('../model/manager.json'));
		$userinfo = json_decode($data, true);
		
		$username = $userinfo['user'];
		$password = $userinfo['pass'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{

			if($username == $_POST['username'] && $password == $_POST['password']){
				$_SESSION['flag'] = true;
				header('location: ../view/managerDashboard.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>