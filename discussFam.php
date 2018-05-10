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
    echo '<a href="signup.php"><button onclick="signup();" style="width:200px;">Sign Up</button></a>&nbsp &nbsp<a href="login.php"><button style="width:200px; background-color:red">Login</button></a>';
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
        <a class="nav-link" style="color: white;" href="signup.html" id="homebar">Register Your Decision</a>
	  </li>
        <li class="nav-item" >
        <a class="nav-link " style="color: white;"  href="stories_of_hope.php" id="homebar">Stories of Hope</a>
      </li>
  <li class="nav-item">
        <a class="nav-link" style="color: white;" href="support.php" id="homebar">Support Us</a>
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


<div class="row">
	<div class="col-sm-12"><img src="images/w02.jpg" style="width:100%" ></div>
	
	<div class="col-sm-12"><h2 style="color:green; font-family:Philosopher">Why Should You Discuss this with Your Family</h2>
	<p style="color:grey;">The most important thing is that after you have made your decision about whether 
	to become an organ donor – and register that decision – you must discuss your 
	wishes with your family. Organ and tissue donation cannot proceed without the 
	consent of the family.</p></div>
	<div class="col-sm-3">
	<br>
		<img src="images/w03.jpg">
	<br><br>	
		<img src="images/w04.jpg">
	</div>
	<div class="col-sm-5">
		<h3 style="color:green; font-family:Philosopher">Discuss this Topic</h3>
			<p style="text-align:justify;">It is important that your family, partner and friends understand your reasons for pledging your organs. It is 
			important for people to make an informed decision, so you may like to share the facts around organ and tissue 
			donation included on this website. You may also like to share some of the stories about donors and recipients.</p>
		<h3 style="color:green; font-family:Philosopher">Having the Discussion</h3>
			<p style="text-align:justify;">A good start is to use everyday situations to start a discussion on important life issues, including what to 
			do with your organs and tissues when you die. There would be situations and opportunities to bring this topic up 
			such as making a will, getting your life insurance, leaving home for the first time as an adult, celebrating an 
			anniversary with your partner, getting a checkup at your doctor, seeing a traumatic event in the news or after a 
			friend or a family member dies.</p>
	</div>
	<div class="col-sm-4">
		<h3 style="color:green; font-family:Philosopher;">Always remember…</h3>
		<h4 style="color:green; font-family:Philosopher;text-align:justify;">Register Your Decision</h4>
			<p style="color:grey;">Record your decision on the register and be ensure that your decision will be known.</p>
		<h4 style="color:green; font-family:Philosopher;">Inform and discuss with your family and dear ones</h4>
			<p style="color:grey;">Help your family and friends understand and remember your decision.</p>
		<h4 style="color:green; font-family:Philosopher;text-align:justify;">Always carry your Donor Card</h4>
			<p style="color:grey;font-family:Philosopher;text-align:justify;">Always carry an Organ Donor Card in your wallet. It is important for your family to be 
			aware of your wishes as WITHOUT their consent your organs / tissue cannot be donated.</p>
	</div>
	
</div>

<footer><p id="foot"><img src="images/fb.png" style="width:25px">&nbsp <img src="images/t.png" style="width:25px">&nbsp <img src="images/you.png" style="width:25px">&nbsp Copyright &copy; .com &nbsp &nbsp &nbsp </p></footer>
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