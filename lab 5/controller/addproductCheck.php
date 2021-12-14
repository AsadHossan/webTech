<?php
	//session_start();
	require_once('../model/productModel.php');

	if(isset($_POST['save']))
	{

		$name = $_POST['name'];
		$Bprice = $_POST['Bprice'];
		$Sprice = $_POST['Sprice'];
		

		
				$product = [
							'name' => $name,
							'Bprice' => $Bprice,
							'Sprice' => $Sprice
							
						];

				$status = insertProduct($product);

				if($status)
				{
					header('location: ../view/display.php');
				}else
				{
					echo "error";
				}

			
		}

	
?>