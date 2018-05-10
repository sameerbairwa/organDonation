<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.forgetme
		{
			width: 800px;
	height:450px;
	text-align: center;
	background-color: rgba(52,73,94,.7);
	
	margin: 0 auto;
	margin-top: 150px;
		}
		input[type="email"],input[type="password"]
		{
			width:500px;
	height: 40px;
	font-size: 18px;
	margin-top: 30px;
	margin-bottom: 20px;
	padding-left: 30px;
		}
		input[type="submit"]
		{
			font-size:18px;
		}
		.btn
{
	height:40PX;
	width: 540px;
	margin-top: 30px;
	color: #fff;
	background-color: #2ecc71;
	border-radius: 4px;
	cursor: pointer;
}
p
{
	font-size: 30px;
	color: white;
}
	</style>
</head>
<body>
	<div class="forgetme">
		<p>Forget Password?</p>
<form method="post" action="forget.php">
 <input type="email" name="email" placeholder="Enter Your email"><br>
 <input type="password" name="pass" placeholder="Enter new password"><br>
 <input type="password" name="repass" placeholder="Re-Enter Password">
	<br>
	<input type="submit" name="proceed" value="Proceed" class="btn">
</form>
<div>
</body>
<?php
if(isset($_POST['proceed']))
{
	$con=mysqli_connect("localhost","root","","user");
	if(!$con)
{die('could not connect'.mysql_error());}
	$query=mysqli_query($con,"select email from person");
	$check=0;
	while($data=mysqli_fetch_array($query))
	{
		if($_POST['email']==$data['email'])
		{
			$check=1;
			$p=$_POST['pass'];
			$np=$_POST['repass'];
			if($p==$np)
			{   $email=$_POST['email'];
				mysqli_query($con,"update person set password='$p' where email='$email'");

			}
			else
			{
				?><script type="text/javascript">alert("Password Do Not Match")</script><?php
			}
		}
		
	}
	if($check==0)
		{
			?><script type="text/javascript">alert("Email Not Registered")</script><?php
		}
	else
	{
		
		?>
			<script type=text/javascript> 
			{
				alert('Password successfully changed')
				location.assign('http://localhost/dbms/index.php');
			}
			</script><?php
	}

}

	?>
</html>