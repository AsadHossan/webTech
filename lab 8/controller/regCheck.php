<?php
	if(isset($_POST['submit']))
	{
		
		
		

		if($_POST['username'] == "" ||$_POST['password'] == "" || $_POST['email']=="" || $_POST['name'] == "" || $_POST['conpass'] == ""){
			echo "Null submission!";
		}
		elseif (strlen($_POST['username'])<2) {
			echo "Username must be 2 characters";
		}
		elseif (strlen($_POST['password'])<5) {
			echo "Password must be 5 characters";
		}		
		else{
			if($_POST['password']==$_POST['conpass'])
			{
				$data=[
					'user'=>$_POST['username'],
					'pass'=>$_POST['password'],
					'name'=>$_POST['name'],
					'email'=>$_POST['email'],
					'gender'=>$_POST['gender'],
					'date'=>$_POST['dd'],
					'month'=>$_POST['mm'],
					'year'=>$_POST['yyy'],
				];
				$user = json_encode($data);
				$myfile = fopen('../model/manager.json', 'w');
				$dataa = fwrite($myfile, $user);
				
				header('location: ../view/managerLogin.html');
			}else{
				echo "password & confirm password mismatch..";
			}
		}
		
		
		/*$myfile = fopen('../model/manager.json', 'r');
		$data = fread($myfile, filesize('../model/manager.json'));
		$userinfo = json_decode($data, true);*/
	}
?>