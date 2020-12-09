<?php
include 'connection.php';
if(isset($_POST["btn1"]))
{
	
	$uname=$_POST["uname"];
	$pass=$_POST["pass"];
	$cpass=$_POST["cpass"];
	$email=$_POST["email"];
	$dob=$_POST["dob"];
	$city=$_POST["city"];
	
	$res=mysqli_query($con,"select email from user_details where email='$email'");
	if(mysqli_num_rows($res)>0)
	{
	echo "email is exist";	
	}
	elseif($pass!=$cpass){
        echo "password doesn't match";
		
    }
	else{
	$res=mysqli_query($con,"insert into user_details(uname,pass,cpass,email,dob,city)values('$uname','$pass','$cpass','$email','$dob','$city')");
	$result=mysqli_query($con,"insert into user(uname,pass)values('$uname','$pass')");
	
	echo "<script>alert('Successfully Registered')</script>";
		echo "<script>window.location.href='login.html'</script>";
	}
}
?>