<!DOCTYPE html>
<html>
<head>

<style type="text/css">
	.form{
		display: inline-grid;
		background-color:orange;
		padding:50px;
	}
	.btn{
		background-color:#0066ff;
		padding:5px;
		opacity:0.9;
	}
</style>

</head>
<body style="background-color: black">
	<script type="text/javascript">
		function f1()
		{
			alert("input field lost focus");
		}
	</script>
<center>
	<h1>MY REGISTRATION FORM</h1>
	<form  class="form" method="post" name="regis">
		First<input type="text" name="name" onblur="f1()" required>
		Last <input type="text" name="name" onblur="f1()" required>
		email<input type="text" name="text" required onblur="f1()">
		contact No<input type="contact" name="no" required onblur="f1()">
		password<input type="password" name="pass" required onblur="f1()">
		<br>
		<button name="submit" class="btn">submit to us</button>
	</form>
</center>
</body>
</html>
<?php
$c=mysqli_connect("localhost","root","");
if($c)
{
if(isset($_POST["submit"]))
{
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$em=$_POST['email'];
$psd=$_POST['pass'];
$phno=$_POST['no'];
$wdl=$_POST['wdl'];
$ins="insert into regis values('$fn','$ln','$em','$psd','$phno','$wdl')";

mysqli_select_db($c,"assignment5");

if(mysqli_query($c,$ins))
{
	echo"<br><script>alert('entries are registered');</script><br>";
}
else
{
	echo mysqli_error($c);
}
}
else
{
	echo mysqli_error($c);
}
}



mysqli_close($c);
?>
	

