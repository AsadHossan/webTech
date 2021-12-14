<?php
	
	require_once('db.php');

	

	function insertProduct($product){

		$conn = getConnection();
		$sql = "insert into products values('{$product['name']}', '{$product['Bprice']}', '{$product['Sprice']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateProduct($product){

		$conn = getConnection();
		$sql = "update products set name='{$product['name']}', '{$product['Bprice']}', '{$product['Sprice']}' ";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteProduct($id){
		$conn = getConnection();
		$sql = "delete from product where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>