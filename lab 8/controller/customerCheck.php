<?php
	if(isset($_POST['insert']))
	{
		
		
		

		if($_POST['name'] == "" ||$_POST['email'] == "" || $_POST['number']=="" ){
			echo "Null submission!";
		}
		
		else{
			
				$data=[
					
					'name'=>$_POST['name'],
					'email'=>$_POST['email'],
					'number'=>$_POST['number'],
				];
				$user = json_encode($data);
				$myfile = fopen('../model/customer.json', 'w');
				$dataa = fwrite($myfile, $user);
				
				header('location: ../view/viewCustomer.php');
			
		}
		
		
		/*$myfile = fopen('../model/manager.json', 'r');
		$data = fread($myfile, filesize('../model/manager.json'));
		$userinfo = json_decode($data, true);*/
	}
?>