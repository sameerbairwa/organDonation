<!DOCTYPE html>
<html>
<head>
	<?php
	$serverName = "localhost";
	$userName = "root";
	$password = "";

	$con = mysqli_connect($serverName,$userName,$password);

	if(!$con)
	{
		die('Could not connect :'.mysql_error());
	}

	mysqli_select_db($con,"user");


	if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$aadharId = $_POST["aadharId"];	
	$title = $_POST["title"];
	$fname = $_POST["fname"];
	$Mname = $_POST["Mname"];
	$Lname = $_POST["Lname"];
	$postcode = $_POST["postcode"];
	$addressLine = $_POST["addressLine"];
	$city = $_POST["city"];
	$country = $_POST["country"];
	$DateOfBirth = $_POST["dob"];
	$telephone= $_POST["telephone"];
	$MobileNo = $_POST["MobileNo"];
	$EmailAddress = $_POST["email"];
	$donate = $_POST["Donate"];

	$PreferredContact = $_POST["PreferredContact"];
	$ECName = $_POST["EmergencyContactName"];
	$ECNumber = $_POST["EmergencyContactNo"];
	$passwd = $_POST["pass"];
	// $ECAddress = $_POST["Emergency-Contact-Address"];
	
	if(isset($_POST["EmergencyContactAddress"]))
	{
		$ECAddress = $addressLine;
	}
	else
	{
		$ECAddress = $_POST["emergencycontactaddress"];
	}
	
}
	$count = sizeof($donate);
	

	$sql1="select * from person where email='$EmailAddress' ";

	if($check1 = mysqli_query($con,$sql1));
	{
		$rowuid=mysqli_num_rows($check1);
		if($rowuid>0)
		{
			echo "
			<script type=text/javascript> 
			{
				alert('Email Already Exists');
				location.assign('http://localhost/dbms/signup.html');
			}
			</script>";
		}
	}
		mysqli_query($con,"INSERT INTO person (id,First_Name,Middle_Name,Last_Name,Title,Dob,password,mobile,phone,email,preferredContact,EmergencyContactName,emergencyContactNo,EmergencyContactAddress,postcode,addressLine,town,country) VALUES('$aadharId','$fname','$Mname','$Lname','$title','$DateOfBirth','$passwd','$MobileNo','$telephone','$EmailAddress','$PreferredContact','$ECName','$ECNumber','$ECAddress','$postcode','$addressLine','$city','$country')");
		for($i = 0; $i<$count; $i++)
		{
			mysqli_query($con,"INSERT INTO organs (id,donateOrgans) VALUES('$aadharId','$donate[$i]')"); 
		}
	
	
		
 	
//delete from organs where id = 44654654
mysqli_close($con);
?>
</head>
<body onload="load()">
<?php
echo "
<script type=text/javascript> 
function load()
{
	alert('Registration Successful');
	location.assign('http://localhost/dbms/');
}
</script>"
?>
</body>
</html>
