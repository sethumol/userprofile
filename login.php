<?php
include 'connection.php';

if(isset($_POST['submit'])){

    $uname = ($_POST['uname']);
    $pass = ($_POST['pass']);

    if ($uname != "" && $pass != ""){

        $sql_query = "select * from user where uname='".$uname."' and pass='".$pass."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        
        if($row > 0){
            $_SESSION['uname'] = $uname;
			 
            header('Location: welcome.html');
        }else{
            echo"<script>alert('inavalid username and password')</script>";
					echo "<script>window.location.href='login.html'</script>";

        }

    }

}