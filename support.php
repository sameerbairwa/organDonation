<!DOCTYPE html>
<html lang="en">





<head>
  <title>Organ Donation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 <!-- <link rel="stylesheet" type="text/css" href="css/navbar.css"> -->
 <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>
<body>
  <div id="dontscroll">

<script type="text/javascript">
  function signup()
  {
  document.getElementById('id01').style.display='block';
  }
</script>


	<header>
	<div style="text-align: left;
  margin-left: 200px;
font-family: 'Philosopher', sans-serif;
font-size: 30px; display: inline-block;"><a href="index.php" style="color: white;">Organ Receiving and Giving Awareness Network</a></div><div style="display: inline-block; margin-left: 100px;">  <div>   
 <?php
     session_start();
if(isset($_SESSION['username']))
{
     echo 'Welcome   ' ,$_SESSION["username"] ," ", '<a href="/dbms/login/logout.php"><button  style="width:auto; background-color:red;">Logout</button></a>';
}
else 
    echo '<a href="signup.html"><button onclick="signup();" style="width:200px;">Sign Up</button></a>&nbsp &nbsp<a href="login.php"><button style="width:200px; background-color:red">Login</button></a>';
?></div>
</header>













<nav class="navbar navbar-expand-lg navbar-light bg-dark"  >
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="color: white;" href="#"><span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item" id="drop">
        <a class="nav-link" style="color: white;" href="#" id="homebar" >Understanding Organ Donation</a>
        <ul class="submenu">
          <li><a href="donationProcess.php">Organ Donation Process</a></li>
          <li><a href="whatToDo.php">What Do I need To Do</a></li>
          <li><a href="discussFam.php">Discuss With Your Family</a></li>
                </ul>
      </li>
      <li class="nav-item" >
        <a class="nav-link" style="color: white;"" href="signup.html" id="homebar">Register Your Decision</a>
    </li>
        <li class="nav-item" >
        <a class="nav-link " style="color: white;"  href="stories_of_hope.php" id="homebar">Stories of Hope</a>
      </li>
  <li class="nav-item">
        <a class="nav-link" style="color: white;"" href="support.php" id="support">Support Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white;" href="faq.php" id="homebar">Answers to Your Questions</a>
      </li>

    </ul>
   
  </div>
</nav>
</div>




  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


<h1 id="con"> Contribute </h1>
<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect("localhost","root","","user");
if(!$con)
{die('could not connect'.mysql_error());}
$check=0;
$amt=$_POST['Amount'];
$feed=$_POST['Feedback'];
$mail=$_POST['Email'];
$query="insert into supportdb values ('$amt','$feed','$mail')";
$run=mysqli_query($con,$query);
if($run)
{
	?><script type="text/javascript">alert("Donation successfull");</script><?php
}
else
{
	?><script type="text/javascript">alert("Donation Unsuccessfull");</script><?php
}
}
 //mysqli_close($con);

?>
<body>

	
	<div class="container">
	<!-- Amount: -->
	<form method="post" action="support.php">
	<input type="text" name="Amount" placeholder="Amount">
	<br>
	<!-- Tell us why are you contributing: -->
	
	<input type="textbox" name="Feedback" placeholder="Tell us why are you contributing" height="100px">
	
	<br>
	<!-- Email id: -->
	
	<input type="text" name="Email" placeholder="Email">
	
	<br>
	<input type="submit" name="submit" value="Submit" class="btn">
	<br>
	
</div>
</form>

<footer><p id="foot"><img src="images/fb.png" style="width:25px">&nbsp<img src="images/t.png" style="width:25px">&nbsp<img src="images/you.png" style="width:25px">&nbspCopyright &copy; .com &nbsp &nbsp &nbsp </p></footer>
<!-- </div> -->















</body>
</html>



<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Philosopher');






h3
{
  text-align: center;
  font-family: 'Philosopher', sans-serif;
}
header
{
  
  padding: 10px;
    color: white;
    background-color: #035851;
    clear: left;
    text-align: left;
    /*position: fixed;*/
    /*width: 100%;*/
  
}






footer{
  padding: 10px;
    color: white;
    background-color: #035851;
    clear: left;
    text-align: center;
  }

p
  {
    margin-left: 10px;
  }
  
  .skin
{
  float: left;
  
  margin-left: 30px;
  width:400px;
  font-family: 'Philosopher', sans-serif;

}
.brain
{
  float: left;
  
  margin-left: 30px;
  width:400px;
  font-family: 'Philosopher', sans-serif;

}
.organ
{
  float: left;
  margin-left: 30px;
  width:400px;
  font-family: 'Philosopher', sans-serif;

}
  
h1
{
text-align: left;
font-family: 'Philosopher', sans-serif;
font-size: 30px;

}
#homebar
{

  text-align: center;
  margin-left: 70px;
  


}
a
{
  font-family: 'Philosopher', sans-serif;
  
}
#homebar:hover
{
  background-color: #0b5b75;
}
#foot
{
  text-align: right;
}

/*#dontscroll
{
  position: fixed;
  overflow: hidden;
  width: 100%;
  margin-top: -116px;
}
#sectionid
{
  margin-top: 116px;
}*/


 button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 4px;
}
button:hover{background-color:#46a049 }

</style>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Montserrat|Oswald:400,700');
	@import url('https://fonts.googleapis.com/css?family=Montserrat|Oswald:400,700');

body
{
	margin: 0px;
background-image: url(/dbms/images/wood.jpg);
background-repeat: no-repeat;
background-size: 100%;
}

#con
{
	text-align: center;
	color: rgba(52,73,94,.7);
	background-color: #E4B273;
	padding-bottom: 5px;
	padding-top: 5px;
	font-family: 'Montserrat', sans-serif;
	font-size: 40px;
	margin-top: 30px;
}
.container
{
	width: 500px;
	height:400px;
	text-align: center;
	background-color: rgba(52,73,94,.7);
	
	margin: 0 auto;
	margin-top: 50px;
}
input[type="text"],input[type="password"]
{
	width:340px;
	height: 40px;
	font-size: 18px;
	margin-top: 35px;
	padding-left: 30px;
}

input[type="textbox"]
{
	width:340px;
	height: 110px;
	font-size: 18px;
	margin-top: 25px;
	padding-left: 30px;
}

input[type="submit"]
{
	font-size:18px;
}

.btn
{
	height:40PX;
	width: 336px;
	margin-top: 25px;
	color: #fff;
	background-color: #2ecc71;
	border-radius: 4px;
	cursor: pointer;
}
#support
{
	background-color: red;
	margin-left: 70px;
}



</style>



 <style type="text/css">


	 

body
{
	margin: 0px;
background-image: url('/dbms/images/sup.jpg');
background-repeat: no-repeat;
background-size: 100%;
}
#con
{
	text-align: center;
	color: black;
	background-color: #e3eee8;
	padding-bottom: 5px;
	padding-top: 5px;
	font-family: 'Montserrat', sans-serif;
	font-size: 40px;
	margin-top: 30px;
}
.container
{
	width: 500px;
	height:400px;
	text-align: center;
	background-color: rgba(52,73,94,.7);
	
	margin: 0 auto;
	margin-top: 50px;
}
input[type="text"],input[type="password"]
{
	width:300px;
	height: 40px;
	font-size: 18px;
	margin-top: 35px;
	padding-left: 30px;
}
input[type="textbox"]
{
	width:300px;
	height: 110px;
	font-size: 18px;
	margin-top: 25px;
	padding-left: 30px;
}
input[type="submit"]
{
	font-size:18px;
}
.btn
{
	height:40PX;
	width: 336px;
	margin-top: 25px;
	color: #fff;
	background-color: #2ecc71;
	border-radius: 4px;
	cursor: pointer;
}
/*a
{
	margin-top: 20px;
	color:#fff;
}
img
{
	width: 120px;
	height: 120px;
	margin-top: -60px;
}*/

/*dropdown menu*/

#navbarSupportedContent ul
{
	margin:0px;
	padding:0px;
	list-style:none;
	color:white;
	z-index:100;
}

#navbarSupportedContent ul li
{
	float:left;
	height:60px;
	line-height:50px;
	
	opacity: 0.8;
	text-align:center;
	
}
.submenu li
{
	background-color:black;
	
}
	
#navbarSupportedContent ul li a
{
	text-decoration:none;
	color:white;
	display:block;
	width:80%;
}

#navbarSupportedContent ul li a:hover
{
	background-color:#0b5b75;
	width:80%;
	height:60px;
}

#navbarSupportedContent ul li ul li
{
	display:none;
	
	width:100%;
	
}

#navbarSupportedContent ul li:hover ul li
{
	display:block;
	color:white;
	height:60px;
	width:60%;
}

	 </style>