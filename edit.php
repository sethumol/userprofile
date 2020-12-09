<?php
include 'connection.php';
$id=$_SESSION['uname'];
$res=mysqli_query($con,"SELECT * FROM user_details where uname='$id'");
$fetched_row=mysqli_fetch_array($res,MYSQLI_ASSOC);
if(isset($_POST['update']))
{
	
	
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$city=$_POST['city'];
	$sql=mysqli_query($con,"update user_details set uname='$uname',pass='$pass',email='$email',dob='$dob',city='$city' where uname='$id'");
	$result=mysqli_query($con,"update user set uname='$uname',pass='$pass' where uname='$id'");
	if($sql&&$result)
	{
		echo"<script>alert('updation completed successfully')</script>";
					echo "<script>window.location.href='login.html'</script>";

	}
	else
	{
		echo"<script>alert('error in updation')</script>";
					echo "<script>window.location.href='login.html'</script>";

	}
}
if(isset($_POST['cancel']))
 {
	header('Location:reg.html');
 }
?>
<form method="post" enctype="multipart/form-data">
    <table align="center">
    
  <tr>
    <td>
    User Name<input type="text" value="<?php echo $fetched_row['uname'] ?>" class="form-control" id="uname" name="uname">
</td>
    </tr>
	<tr>
    <td>
   Password <input type="text" value="<?php echo $fetched_row['pass'] ?>" class="form-control" id="pass" name="pass">
</td>
    </tr>
	<tr>
    <td>
    Email<input type="text" value="<?php echo $fetched_row['email'] ?>" class="form-control" id="email" name="email">
</td>
</tr>
<tr>
    <td>
    DOB<input type="text" value="<?php echo $fetched_row['dob'] ?>" class="form-control" id="dob" name="dob">
</td>
</tr>
<tr>
    <td>
    City<input type="text" value="<?php echo $fetched_row['city'] ?>" class="form-control" id="city" name="city">
</td>
</tr>
      <tr>
    <td>
    <button type="submit" name="update"><strong>UPDATE</strong></button>
    <button type="submit" name="cancel"><strong>CANCEL</strong></button>
    </td>
    </tr>
    </table>
    </form>