<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Room Table</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
        <tr>
            <td align="right" colspan="2">
                <h1 align="left">Tourism Management System</h1>
                <a href="index.html">Home</a>|
                <a href="bookroom.php">Back</a>|
                <a href="../controller/logout.php">Logout</a>
            </td>
        </tr>
        
        <tr height="500px">
            <td align="center">
            
               
                    <table border="1" width="50%" cellspacing="0">
                        <tr>
                            <td><b>Room Id</b></td>
                            <td><b>Room Type<b></b></td>
                            <td><b>Status</b></td>
                        </tr>
                        <tr>
                            <td>101</td>
                            <td>Single</b></td>
                            <td>Booked</td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td>Double</b></td>
                            <td>Not Booked</td>
                        </tr>
                     </table>
                
           
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
<?php
	}else{
		echo "you didnot register";
		header('location: registration.php');
	}
?>