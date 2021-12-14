<?php
	$title= "Customer";
	include('header.php');
?>
	<table border="1" width="100%" cellspacing="0">
		<tr>
            <td align="right">
                <h1 align="left">Tourism Management System</h1>
                <a href="../controller/logout.php">Logout</a>|
                <a href="managerDashboard.php">Back</a>
            </td>
        </tr>
		<tr height = "400px">
				      <td align="center">
				        
				        <form method="POST" action="../controller/customerCheck.php">
				        <fieldset style="width: 30%">
				            
				              <table>
				                <tr>
				                  <td>Name</td>
				                  <td>:<input type="text" name="name" value="">  </td>
				                </tr>
				               <tr>
				               	<td colspan="2"><hr></td>
				               </tr>
				                <tr>
				                  <td>Email</td>
				                  <td>:<input type="email" name="email" value="">  </td>
				                </tr>
				               <tr>
				               	<td colspan="2"><hr></td>
				               </tr>
				                <tr>
				                  <td>Phone Number</td>     
				                  <td>:<input type="text" name="number" value="">  </td>
				                </tr>
				                <tr>
				               	<td colspan="2"><hr></td>
				               </tr>
				               <tr>
				               	<td colspan="2">
				               		<input type="submit" name="insert" value="Insert">
				               	</td>
				               
				               </tr>
				                
				            </table>
				        </fieldset>
				     </form>
				 </td>
		</tr>

		<tr height = "30px">
            <td colspan="2">
                <center> Copyright@2021 </center>
            </td>
        </tr>
		
	</table>
</body>
</html>