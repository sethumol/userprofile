<?php
include 'connection.php';
$id=$_SESSION['uname'];
$result3 = mysqli_query($con,"SELECT * FROM user_details where uname='$id'");
while($row3 = mysqli_fetch_array($result3))
{ 

$uname=$row3['uname'];
$pass=$row3['pass'];
$email=$row3["email"];
	$dob=$row3["dob"];
	$city=$row3["city"];

}
?>
<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">Your Profile Information </td>
	<td><div align="bottom"><a href="index.html">Logout</a></div></td>
  </tr>
  
  <tr>
    <td valign="top"><div align="left">User Name:</div></td>
    <td valign="top"><?php echo $uname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">pass:</div></td>
    <td valign="top"><?php echo $pass ?></td>
  </tr>
  <tr>
    
    <td width="82" valign="top"><div align="left">Email:</div></td>
    <td width="165" valign="top"><?php echo $email ?></td>
  </tr>
  <tr>
    
    <td width="82" valign="top"><div align="left">DOB:</div></td>
    <td width="165" valign="top"><?php echo $dob ?></td>
  </tr>
  <tr>
    
    <td width="82" valign="top"><div align="left">city:</div></td>
    <td width="165" valign="top"><?php echo $city ?></td>
  </tr>
  <form action="edit.php">
  <table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td><input type="submit" value="EDIT" name="edit"></td>
    
  </tr>
  </table>
  </form>
</table>
