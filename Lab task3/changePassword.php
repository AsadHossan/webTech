<?php

    session_start();

    if(isset($_POST['submit']))
    {

        $currPass = $_POST['Cpassword'];
        $newPass=   $_POST['Npassword'];    

        $RePass=    $_POST['Rpassword'];

        if($currPass!=$_SESSION['password'] || $currPass==$newPass || $newPass!=$RePass)  {
            echo "Retype, password is incorect!";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
        

           					 </td>
            					<td height="300px"  align="center">
                                    <br>
                                    <fieldset style="width: 40%" >
                                        <legend> CHANGE PASSWORD </legend>
                                        <table>
                                            <tr>
                                                <td>Current Password</td>
                                                <td>:<input type="password" name="Cpassword" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>New Password</td>
                                                <td>:<input type="password" name="Npassword" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Retype Password</td>
                                                <td>:<input type="password" name="Rpassword" value=""></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"> 
                                                    <input type="submit" name="submit" value="Submit">
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                    <br> 
                            </td>
        
    </table>

</body>
</html>
