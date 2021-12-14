<?php
	if (isset($_POST['submit'])) 
	{
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Recipt</title>
</head>
<body>
    <table border="1" width="50%" cellspacing="0">
        <tr>
            <td align="right" colspan="2">
                <h1 align="left">Tourism Management System</h1>
                <a href="index.html">Home</a>|
                <a href="bookroom.php">Back</a>|
                <a href="../controller/logout.php">Logout</a>

            </td>
        </tr>
        <tr>
        	<td colspan="2">
        		<p>Here is Customer Information Who book room</p>
        	</td>
        </tr>
        <tr>
        	<td>Name</td>
        	<td><?php echo $_POST['name'] ?></td>
        </tr>
        <tr>
        	<td>Room Id</td>
        	<td><?php echo $_POST['id'] ?></td>
        </tr>
        <tr>
        	<td>Email</td>
        	<td><?php echo $_POST['email'] ?></td>
        </tr>
        <tr>
        	<td>Phone Number</td>
        	<td><?php echo $_POST['number'] ?></td>

        </tr>
        <tr>
            <td>Room Type</td>
            <td><?php echo $_POST['choose'] ?></td>

        </tr>
        <tr>
        	<td colspan="2" align="center">
        		<p>Thank You!</p>
        	</td>
        </tr>
        <tr height = "30px">
            <td colspan="2">
                <center> Copyright@2017 </center>
            </td>
        </tr>
    </table>
</body>
</html>